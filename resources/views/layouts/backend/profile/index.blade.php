@extends ('layouts.backend')

@section('header_title', 'my Profile')

@section('content')
  <div class="panel panel-default">
      <div class="panel-heading">User Account Information</div>

      <div class="panel-body">
            <form>
              <fieldset class="form-group">
                <label for="account_username">Account Username</label>
                <input type="text" class="form-control" id="account_username" placeholder="Your currently shown Username">
              </fieldset>

              <fieldset class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
                <small class="text-muted">We'll never share your email with anyone else.</small>
              </fieldset>

              <fieldset class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
              </fieldset>



              <pre>
  >> Due the Development are all features deactivated:
  [x] Edit User Data
  [x] Logs
  [x] Something Magical.
              </pre>
            </form>
      </div>
  </div>


@stop
