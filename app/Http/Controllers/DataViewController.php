<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Session;
use Khill\Lavacharts\Lavacharts;
class DataViewController extends Controller
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
        $data = \DB::table('session_data')->where('user_id', 1)->orderBy('date')->lists('date', 'id');

        $stocksTable = \Lava::DataTable();

        $stocksTable->addDateColumn('Day of Month')
            ->addNumberColumn('Projected')
            ->addNumberColumn('Official');

        $lava = new Lavacharts; // See note below for Laravel
        $finances = \Lava::DataTable();
        $finances->addStringColumn('Mois')
            ->addNumberColumn('CA')
            ->addNumberColumn('Bénéfice')
            ->addRow(['janv-2016',  rand(1000,5000), rand(1000,5000)])
            ->addRow(['fev-2016',  rand(1000,5000), rand(1000,5000)])
            ->addRow(['mar-2016',  rand(1000,5000), rand(1000,5000)]);

        \LAVA::ColumnChart('Finances',$finances,[
        'title' => 'Chiffre d\'affaire et bénéfice',
        'titleTextStyle' => [
        'color'    => '#000',
        'fontSize' => 14]
        ]);





        //$data = (Session::lists('date'));

        /* <div class="form-group">
                        {!! Form::Label('datas', 'datas:') !!}
                        {!! Form::select('datas', $dataSamples, null, ['class' => 'form-control']) !!}
                    </div>
        div id="ca_graph"></div>
                    @columnchart('Finances', 'ca_graph')
        */

        return view('dataView',compact('lava'), ['data' => $data]);
    }
}
