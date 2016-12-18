<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests\DataSampleRequest;
use App\Http\Controllers\Controller;

use App\Session;
use App\User;
use App\Activity;
class DataSampleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getForm()
    {
        return view('dataSample');
    }

    public function postForm(DataSampleRequest $request)
    {
        $file = $request->file('dataSample');
        if (file_exists($file)) {
            $string = file_get_contents($file);
            $data = json_decode($string, true);

            $session = Auth::user()->sessions()->create([
                "duration" => $data["duration"],
                "date" => date("Y-m-d", strtotime($data["date"])),
                "activity_id" => (int)$data["activity_id"],
                "distance" => (int)$data["distance"],
                "footsteps" => (int)$data["footsteps"],
                "calories" => (int)$data["calories"],
                "geometry" => $data["geometry"]
            ]);

            $session = Session::find($session->id);


            return view('dataSampleOk', ['message' => 'The file correctly imported...', 'session' => $session]);
        } else {
            return view('dataSampleOk', ['message' => 'The file doesnt exist, try again...']);
        }

    }
}
