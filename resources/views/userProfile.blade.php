@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        {{ Form::model($user, ['route' => ['user.update', $user->id]]) }}
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Nom</label>
                            <div class="col-sm-10">
                                {!! $user->pseudo !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Size</label>
                            <div class="col-sm-10">
                                {!! Form::selectRange('size', 0, 200) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Weight</label>
                            <div class="col-sm-10">
                                {!! Form::selectRange('weight', 0, 200) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Birth date</label>
                            <div class="col-sm-10">
                                {!! Form::text('birth_date',null, ['id' => 'datepicker','readonly'=>'readonly']) !!}
                                @if ($errors->has('birth_date'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('birth_date') }}</strong>
                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Gender</label>
                            <div class="col-sm-10">
                                {!! Form::select('gender', ['F' => 'F', 'M' => 'M']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::submit('Update') !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
