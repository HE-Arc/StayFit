@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Sessions comparison</div>
                    <div class="panel-body">
                        <div class="row">
                            <div id="footsteps_div">
                                {!!Lava::render('ColumnChart', 'Footsteps', 'footsteps_div')!!}
                            </div>
                        </div>
                        <div class="row">
                            <div id="distance_div">
                                {!!Lava::render('ColumnChart', 'Distance', 'distance_div')!!}
                            </div>
                        </div>
                        <div class="row">
                            <div id="calories_div">
                                {!!Lava::render('ColumnChart', 'Calories', 'calories_div')!!}
                            </div>
                        </div>
                        <div class="row">
                            <div id="speed_div" align="center">
                                {!!Lava::render('GaugeChart', 'Speed', 'speed_div')!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection