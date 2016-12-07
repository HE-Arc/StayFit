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
                            {!! Form::select('items', $data, null) !!}

                            <ul class="list-group">
                            @foreach($data as $entry)
                                    <a href="#" class="list-group-item ">{!! $entry !!}</a>
                            @endforeach



                            </ul>
                            {!! Form::submit('Validate') !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection