@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data add</div>

                <div class="panel-body">
                {!! Form::open(['route' => 'addDataSample']) !!}
				<div class="form-group">
					{!! Form::label('File to import') !!}
					{!! Form::text('dataSample', null, array('required','class'=>'form-control', 'placeholder'=>'File name')) !!}
					{!! Form::submit('Submit!', ['class' => 'btn btn-info pull-right']) !!}
				</div>
				{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>	
@endsection