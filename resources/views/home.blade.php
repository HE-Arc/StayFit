@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome {{$user->pseudo}}</div>

                <div class="panel-body jumbotron">
                    <p><b> You personnal informations</b></p>
                    <p>Pseudo: {{$user->pseudo}}</p>
                    <p>Email: {{$user->email}}</p>
                    <p>Birthdate: {{$user->birth_date}}</p>
                    <p>Weight: {{$user->weight}}</p>
                    <p>Size: {{$user->size}}</p>
                    <p>Gender: {{$user->gender}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
