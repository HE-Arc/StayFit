@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Your sessions</div>

                    <div class="panel-body">
                        <div class="list-group">
                            @foreach($data as $entry)
                                <a href="{!!action('DataSelectionController@send',['id'=>$entry->id])!!}" class="list-group-item">{!! $entry->date." ".$entry->duration !!}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection