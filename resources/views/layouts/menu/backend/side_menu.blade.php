<div class="panel panel-default">
    <div class="panel-heading">KBA User Menü</div>

    <div class="panel-body fix_that_to_zero">

        <ul class='side_menu'>
          <li><a href="{{ url('/myProfile') }}"> myProfile </a> </li>
          <li><a href="{{ url('/myService') }}"> myService </a>
            <ul class='sub-menu'>
                <li><a href="{{ url('/myService/create') }}">Create a Service</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/myCalendar') }}"> myCalendar </a> </li>
          <li><a href="{{ url('/myBusiness') }}"> myBusiness </a> </li>
          <li><a href="{{ URL::route('location.index') }}"> myLocation </a>
            <ul class='sub-menu'>
                <li><a href="{{ URL::route('location.create') }}">Create a Location</a></li>
            </ul>
          </li>

        </ul>
    </div>
</div>
