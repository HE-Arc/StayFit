@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Imported data content</div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h3>Duration</h3>
                                <p>{{$session->duration}}</p>
                            </li>
                            <li class="list-group-item">
                                <h3>Covered distance</h3>
                                <p>{{$session->distance}}</p>
                            </li>
                            <li class="list-group-item">
                                <h3>Burned calories</h3>
                                <p>{{$session->calories}}</p>
                            </li>
                            <li class="list-group-item">
                                <h3>Footsteps</h3>
                                <p>{{$session->footsteps}}</p>
                            </li>
                            <li class="list-group-item">
                                <h3>Gps positions</h3>
                                @foreach($session->geometry as $point)
                                    <li class="list-group-item">
                                        {{ $point[0] }}, {{ $point[1] }}
                                    </li>
                                @endforeach
                            </li>
                        </ul>


                        {{--<p><b>Needed footsteps</b></p>--}}
                        {{--<ul>--}}
                        {{--<li>{{$session->footsteps}}</li>--}}
                        {{--</ul>--}}

                        {{--<p><b>Visited Geopositions</b></p>--}}
                        {{--<ul>--}}
                        {{--@foreach($session->geometry as $point)--}}
                        {{--<li>{{ $point[0] }}, {{ $point[1] }}</li>--}}
                        {{--@endforeach--}}
                        {{--</ul>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
