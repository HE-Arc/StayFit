@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body" align="center">
                    <image img src="{{asset('/assets/images/stayfit.png')}}"></image>
                    <p><b>Bienvenu dans StayFit</b></p>
                    <p>Ce projet a été réalisé dans le cadre de l'école d'ingénieur de Neuchâtel en 2016. ©</p>
                    <p>Il permet la récupération et visualisation de vos efforts physiques du quotidien à l'aide de votre smartphone.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
