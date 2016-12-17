<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Session extends Model
{
    protected $table = 'session_data';

    public $timestamps = false;

    protected $fillable = ['duration', 'footsteps', 'activity_id', 'distance', 'geometry', 'calories', 'date'];

    public static function boot() {
        parent::boot();
        static::creating(function($model) {
            $model->setAttribute('geometry', DB::raw("ST_GeomFromText('".$model->getGeometryAsWkt()."')"));
        });
    }

    public function newQuery() {
        return parent::newQuery()->select(DB::raw('*, ST_AsText(geometry) as geometry'));
    }

    public function getDirty() {
        $dirty = parent::getDirty();
        if (array_key_exists('geometry', $dirty)) {
            $dirty['geometry'] = DB::raw("ST_GeomFromText('".$this->getGeometryAsWkt()."')");
        }
        return $dirty;
    }

    public function getGeometryAttribute($geometry) {
        if (is_array($geometry)) {
            return $geometry;
        }
        $geom = [];
        if (preg_match('#LINESTRING\((.*)\)#', $geometry, $matches)) {
            $points = explode(",", $matches[1]);
            foreach($points as $point) {
                list($lat, $lon) = explode(" ", $point);
                $geom[] = [(float) $lat, (float) $lon];
            }
        }
        return $geom;
    }

    protected function getGeometryAsWkt() {
        $ps = [];
        foreach($this->geometry as $p) {
            $ps[] = implode(" ", $p);
        }
        $linestring = implode(",", $ps);
        return "LINESTRING($linestring)";
    }

    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }
}
