@extends ('layouts.backend')

@section('header_title', 'my Profile')

@section('content')
  <div class="panel panel-default">
      <div class="panel-heading">User Account Information</div>

      <div class="panel-body">

          <div class='service_wrapper'>
              <h3>Avaible Services</h3>
              <div class='row service_avaible'>
                  @for($i = 1; $i <= 10; $i++)
                    <div class='col-xs-12 '>
                        <div class='row service_element'>
                            <div class='col-xs-8'>
                                  <p class="form-control-static"> Service {{ $i }} </p>
                            </div>
                            <div class='col-xs-4'>
                                <div class='btn-group btn-group-sm pull-right'>
                                    <div class='btn btn-success'><i class='glyphicon glyphicon-play-circle' aria-hidden=true></i> Activate </div>
                                    <div class='btn btn-warning'><i class='glyphicon glyphicon-edit' aria-hidden=true></i> Edit </div>
                                    <div class='btn btn-danger'><i class='glyphicon glyphicon-trash' aria-hidden=true></i> Delete </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endfor
              </div>
          </div>


      </div>
  </div>


@stop
