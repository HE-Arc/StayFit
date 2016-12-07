@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'formUser']) !!}
                        <div class="form-group">
                            {!! Form::label('Nom') !!}
                            {!! Auth::user()->pseudo !!}
                            <ul class=flex-outer">
                                <li>
                                    {!! Form::label('size') !!}
                                    {!! Form::selectRange('size', 0, 200, Auth::user()->size) !!}
                                </li>
                                <li>
                                    {!! Form::label('weight') !!}
                                    {!! Form::selectRange('weight', 0, 200, Auth::user()->weight) !!}
                                </li>
                                <li>
                                    {!! Form::label('Birth date') !!}
                                    {!! Form::text('birth_date', Auth::user()->birth_date, ['id' => 'datepicker','readonly'=>'readonly']) !!}
                                    @if ($errors->has('birth_date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                    </span>
                                    @endif
                                </li>
                                <li>
                                    {!! Form::label('gender') !!}
                                    {!! Form::select('gender', ['F' => 'F', 'M' => 'M'], Auth::user()->gender) !!}
                                </li>
                                <li>
                                    {!! Form::submit('Update') !!}
                                </li>
                            </ul>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
