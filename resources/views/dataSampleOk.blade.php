@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Imported data content</div>

                    <div class="panel-body">

                        <p><b>Required time</b></p>
                        <ul>
                            <li>{{$session->duration}}</li>
                        </ul>

                        <p><b>Covered distance</b></p>
                        <ul>
                            <li>{{$session->distance}}</li>
                        </ul>

                        <p><b>Burned calories</b></p>
                        <ul>
                            <li>{{$session->calories}}</li>
                        </ul>

                        <p><b>Needed footsteps</b></p>
                        <ul>
                            <li>{{$session->footsteps}}</li>
                        </ul>

                        <p><b>Visited Geopositions</b></p>
                        <ul>
                            @foreach($session->geometry as $point)
                                <li>{{ $point[0] }}, {{ $point[1] }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
