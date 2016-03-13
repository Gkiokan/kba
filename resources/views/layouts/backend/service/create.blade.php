@extends ('layouts.backend')

@section('header_title', 'my Service - Create Service ')

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


@stop
