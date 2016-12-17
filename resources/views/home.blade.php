@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome {{$user->pseudo}}</div>

                <div class="panel-body jumbotron">
                    <p><b> You personnal informations</b></p>
                    <p>pseudo: {{$user->pseudo}}</p>
                    <p>email: {{$user->email}}</p>
                    <p>birthdate: {{$user->birth_date}}</p>
                    <p>weight: {{$user->weight}}</p>
                    <p>size: {{$user->size}}</p>
                    <p>gender: {{$user->gender}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
