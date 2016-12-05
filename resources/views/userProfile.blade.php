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
                            <p>
                                {!! Form::label('Nom') !!}
                                {!! Auth::user()->pseudo !!}
                            </p>
                            <p>
                                {!! Form::label('size') !!}
                                {!! Form::selectRange('sizeNum', 0, 200, Auth::user()->size) !!}
                            </p>
                            <p>{!! Form::label('weight') !!}
                                {!! Form::selectRange('weightNum', 0, 200, Auth::user()->weight) !!}
                            </p>
                            <p>{!! Form::label('Birth date') !!}
                                {!! Form::text('date', Auth::user()->birth_date, ['id' => 'datepicker']) !!}
                            </p>
                            <p>{!! Form::label('gender') !!}
                                {!! Form::select('gender', ['F' => 'F', 'M' => 'M'], Auth::user()->gender) !!}
                            </p>
                            <p>{!! Form::submit('Update') !!}</p>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
