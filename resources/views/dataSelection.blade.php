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

                                    {{--Day {{$session->date}}--}}
                                    {{--Duration {{$session->duration }}--}}
                                    {{--Distance {{$session->distance }}--}}
                                    {{--Calories {{$session->calories }}--}}
                                    @foreach($data as $entry)
                                        {!! Form::submit($entry,['id'=>$entry]) !!}
                                    @endforeach
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
