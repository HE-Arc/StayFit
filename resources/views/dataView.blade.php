@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Selected Data Infos</div>
                <div class="panel-body">
                    <div id="ca_graph"></div>
                    @columnchart('Finances', 'ca_graph')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
