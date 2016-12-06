@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Selected Data Infos</div>
                    <div class="panel-body">
                        <p><b>Required time</b></p>
                        <ul>
                            <li>{{$data->duration}}</li>
                        </ul>

                        <p><b>Covered distance</b></p>
                        <ul>
                            <li>{{$data->distance}}</li>
                        </ul>

                        <p><b>Burned calories</b></p>
                        <ul>
                            <li>{{$data->calories}}</li>
                        </ul>

                        <p><b>Needed footsteps</b></p>
                        <ul>
                            <li>{{$data->footsteps}}</li>
                        </ul>


                        <div style="width:500px; height:500px" id="mapid"></div>

                        <script>
                            var mymap = L.map('mapid').setView([51.505, -0.09], 13);

                            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                            }).addTo(mymap);

                            for(var point in "{{$data->geometry}}")
                            {
                                console.log(point[0]);
                                console.log(point[1]);
                            }
                            console.log(Line);

                            L.marker([50.12, 10.12]).addTo(mymap)
                                .bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();


                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
