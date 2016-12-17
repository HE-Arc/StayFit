@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    {!! Form::open (['route'=>'compareSelection']) !!}
                    <div class="form-group">
                        <p>1st session for comparison </p>
                        <p>{!! Form::select('items', $data, null) !!}</p>
                        <p>2nd session for comparison </p>
                        <p>{!! Form::select('items2', $data, null) !!}</p>
                        <p>{!! Form::submit('Compare') !!}</p>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
