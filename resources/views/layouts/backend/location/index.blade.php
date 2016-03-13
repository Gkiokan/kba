@extends ('layouts.backend')

@section('header_title', 'my Locations')

@section('content')
  <div class="panel panel-default">
      <div class="panel-heading">User Location Information</div>

      <div class="panel-body">
            <div class='locations_wrapper'>
            @foreach($locations as $location)
                <div class='row location'>
                    <div class='col-xs-4'>
                        <b>{{ $location->title }}</b> <br>
                        {{ $location->description }}
                    </div>
                    <div class='col-xs-4'>
                        {{ $location->adress }} <br>
                        {{ $location->plz }} {{ $location->city }} <br>
                    </div>
                    <div class='col-xs-4'>
                        Tel: {{ $location->tel }} <br>
                        Fax: {{ $location->fax }} <br>
                        E-Mail: {{ $location->email }} <br>
                        <br>
                        <br>
                        Open Times: <br>
                        {{ $location->times }}
                        <br>
                        <br>
                        Map: <br>
                        {{ $location->map }}
                    </div>
                </div>
            @endforeach
            </div>
      </div>
  </div>


@stop
