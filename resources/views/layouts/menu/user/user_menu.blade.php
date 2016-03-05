<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li class="dropdown-header">my Account</li>
        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
        <li class="divider"></li>
        <li class="dropdown-header">my KBA</li>
        <li><a href="{{ url('/myProfile') }}"> myProfile </a> </li>
        <li><a href="{{ url('/myService') }}"> myService </a> </li>
        <li><a href="{{ url('/myCalendar') }}"> myCalendar </a> </li>
        <li><a href="{{ url('/myBusiness') }}"> myBusiness </a> </li>
        <li><a href="{{ url('/myLocation') }}"> myLocation </a> </li>
    </ul>
</li>
