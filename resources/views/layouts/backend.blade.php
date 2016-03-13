<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header.default')
</head>
<body id="app-layout">
    @include('layouts.menu.app_menu')

    <div class='container'>
      @include('layouts.partials.alerts')

      <div class='row'>
          <div class='col-xs-12'>
              <div class='header_title'><h2> @yield('header_title') <small>| Backend</small></h2></div>
          </div>
      </div>
      <div class='row'>
          <div class='col-xs-3'>
              @include('layouts.menu.backend.side_menu')
          </div>
          <div class='col-xs-9'>
              @yield('content')
          </div>
      </div>
    </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
