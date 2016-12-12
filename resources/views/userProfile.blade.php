@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <form class="form-horizontal">
                        <div class="panel-body">
                            {!! Form::open(['route' => 'formUser']) !!}
                            {{--<div class="form-group">--}}
                            {{--{!! Form::label('Nom') !!}--}}
                            {{--{!! Auth::user()->pseudo !!}--}}
                            {{--<ul class=flex-outer">--}}
                            {{--<li>--}}
                            {{--{!! Form::label('size') !!}--}}
                            {{--{!! Form::selectRange('size', 0, 200, Auth::user()->size) !!}--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--{!! Form::label('weight') !!}--}}
                            {{--{!! Form::selectRange('weight', 0, 200, Auth::user()->weight) !!}--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--{!! Form::label('Birth date') !!}--}}
                            {{--{!! Form::text('birth_date', Auth::user()->birth_date, ['id' => 'datepicker','readonly'=>'readonly']) !!}--}}
                            {{--@if ($errors->has('birth_date'))--}}
                            {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('birth_date') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--{!! Form::label('gender') !!}--}}
                            {{--{!! Form::select('gender', ['F' => 'F', 'M' => 'M'], Auth::user()->gender) !!}--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--{!! Form::submit('Update') !!}--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--NEW IMPLEMENTATION TEST--}}
                            <div class="form-group">
                                <label class="control-label col-sm-2">Nom</label>
                                <div class="col-sm-10">
                                    {!! Auth::user()->pseudo !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Size</label>
                                <div class="col-sm-10">
                                    {!! Form::selectRange('size', 0, 200, Auth::user()->size) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Weight</label>
                                <div class="col-sm-10">
                                    {!! Form::selectRange('weight', 0, 200, Auth::user()->weight) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Birth date</label>
                                <div class="col-sm-10">
                                    {!! Form::text('birth_date', Auth::user()->birth_date, ['id' => 'datepicker','readonly'=>'readonly']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Gender</label>
                                <div class="col-sm-10">
                                    {!! Form::select('gender', ['F' => 'F', 'M' => 'M'], Auth::user()->gender) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    {!! Form::submit('Update') !!}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                        {{--</div>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
