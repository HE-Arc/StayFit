@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Import personnal Stayfit data</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'addDataSample']) !!}
                        <div class="form-group">
                            <p>{!! Form::file('dataSample', null) !!}</p>
                            <p>{!! Form::submit('Validate') !!}</p>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection