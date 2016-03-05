@extends ('layouts.backend')

@section('header_title', 'my Profile')

@section('content')

  <div class="panel panel-default">
      <div class="panel-heading">Create a new Service</div>
      <div class="panel-body">
          <div class='service_wrapper'>
                <form action='/myService/create' method='POST'>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Check me out
                        </label>
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                </form>
          </div>
      </div>
  </div>


  <div class="panel panel-success">
      <div class="panel-heading">Avaible Services</div>
      <div class="panel-body">

          <div class='service_wrapper'>
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



  <div class="panel panel-danger">
      <div class="panel-heading">Disabled Services</div>
      <div class="panel-body">

          <div class='service_wrapper'>
              <div class='row service_avaible'>
                  @for($i = 5; $i <= 7; $i++)
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
