<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Session;
use Khill\Lavacharts\Lavacharts;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;
use Auth;
use App\Activity;
use App\DataSample;
use App\Http\Requests\DataCompareRequest;

class DataCompareController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        $data=$user->sessions()->with('activity')->pluck('date', 'id');
        return view('dataCompare',['data'=>$data]);
    }
    public function send(DataCompareRequest $request)
    {
        $data1 = Session::find($request->items);
        $data2 = Session::find($request->items2);

        $time1 = $data1->duration;
        $parsed1 = date_parse($time1);
        $seconds1 = $parsed1['hour'] * 3600 + $parsed1['minute'] * 60 + $parsed1['second'];

        $time2 = $data2->duration;
        $parsed2 = date_parse($time2);
        $seconds2 = $parsed2['hour'] * 3600 + $parsed2['minute'] * 60 + $parsed2['second'];

        $speedAverage = Lava::DataTable();
        $speedAverage->addStringColumn('Type')
            ->addNumberColumn('Value')
            ->addRow(['Av speed 1', (($data1->distance)/$seconds1)*3.6])
            ->addRow(['Av speed 2', (($data2->distance)/$seconds2)*3.6]);

        $calories = Lava::DataTable();
        $calories ->addDateColumn('Date')
            ->addNumberColumn('Burned calories')
            ->addRoleColumn('string', 'style')
            ->addRow([$data1->date,$data1->calories,'color:#58BB4E'])
            ->addRow([$data2->date,$data2->calories,'color:#58BB4E']);

        $distance = Lava::DataTable();
        $distance ->addDateColumn('Date')
            ->addNumberColumn('Covered distance')
            ->addRoleColumn('string', 'style')
            ->addRow([$data1->date,$data1->distance,'color:#85D77C'])
            ->addRow([$data2->date,$data2->distance,'color:#85D77C']);

        $footsteps = Lava::DataTable();
        $footsteps->addDateColumn('Date')
            ->addNumberColumn('Footsteps')
            ->addRoleColumn('string', 'style')
            ->addRow([$data1->date,$data1->footsteps,'color:#228817'])
            ->addRow([$data2->date,$data2->footsteps,'color:#228817']);

        Lava::GaugeChart('Speed',$speedAverage, [
            'width'      => 400,
            'greenFrom'  => 0,
            'greenTo'    => 13,
            'yellowFrom' => 15,
            'yellowTo'   => 48,
            'redFrom'    => 50,
            'redTo'      => 100,
            'majorTicks' => [
                'Slow',
                'Fast'
            ]
        ]);

        Lava::ColumnChart('Calories', $calories, [
            'title' => 'Burned calories comparison',
            'legend' => 'none',
            'titleTextStyle' => [
                'color'    => '#39a42e',
                'fontSize' => 14
            ]
        ]);

        Lava::ColumnChart('Distance', $distance, [
            'title' => 'Covered distance comparison',
            'legend' => 'none',
            'titleTextStyle' => [
                'color'    => '#39a42e',
                'fontSize' => 14
            ]
        ]);

        Lava::ColumnChart('Footsteps', $footsteps, [
            'title' => 'Footsteps comparison',
            'legend' => 'none',
            'titleTextStyle' => [
                'color'    => '#39a42e',
                'fontSize' => 14
            ]
        ]);
        return view('dataCompareOk',compact('lava'));
    }
}
