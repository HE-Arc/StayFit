@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        dataselection

                        <div class="panel-body">
                            {!! Form::open (['route'=>'selectionSample']) !!}
                                    @foreach($data as $entry)
                                        {!! Form::submit($data,['id'=>$entry]) !!}
                                    @endforeach
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
