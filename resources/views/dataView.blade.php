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

                        <p><b>Completed course</b></p>
                        <div style="width:500px; height:500px" id="mapid"></div>
                        <script>
                            var map = L.map('mapid').setView([51.505, -0.09], 13);
                            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                            }).addTo(map);

                            var points= "{!! json_encode($data->geometry)!!}";
                            var pointTab = JSON.parse(points);

                            for(var i=0;i<pointTab.length;i++)
                            {
                                L.marker([pointTab[i][0], pointTab[i][1]]).addTo(map)
                                    .bindPopup("<b>Geo position</b><br />Last visited geo position.").openPopup();
                            }
                            var line = new L.polyline(pointTab , {
                                color: 'red',
                                weight: 3,
                                opacity: 0.5,
                                smoothFactor: 1
                            });
                            line.addTo(map);
                            L.setView([pointTab[pointTab.length-1][0], pointTab[pointTab.length-1][1]], 20);

                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
