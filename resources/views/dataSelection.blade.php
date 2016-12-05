@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        dataselection

                        @section('data')
                            {{!! $currentId=Auth::user()->id !!}}
                            {{!! $session=App\Session::where('user_id',3)->first() !!}}
                        @endsection
                        {{--{{$session}}--}}

                        <ul class="list-group">
                            <li class="list-group-item">
                                Day {{$session->date}}
                                Duration {{$session->duration }}
                                Distance {{$session->distance }}
                                Calories {{$session->calories }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
