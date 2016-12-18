@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Import personnal Stayfit data</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'addDataSample','enctype'=>'multipart/form-data']) !!}
                        <div class="form-group row">
                            <div class="col-md-9">
                                {!! Form::file('dataSample', null) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                {!! Form::submit('Validate') !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection