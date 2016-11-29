@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data add</div>

                <div class="panel-body">
				{{$message}}

                <h2>Points</h2>
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
