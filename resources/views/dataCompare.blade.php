@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <div id="perf_div"></div>
                    {!! Form::open (['route'=>'selectionSample']) !!}
                    {!! Form::select('items', $data, null) !!}
                    {!! Form::select('items2', $data, null) !!}
                    {!! Form::submit('Comparer') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
