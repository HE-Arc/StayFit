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
                            {!! Form::label('File to import') !!}
                            {!! Form::file('dataSample', null, ['required','class'=>'form-control']) !!}
                            {!! Form::submit('Submit!', ['class' => 'btn btn-info pull-right']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection