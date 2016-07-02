<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                  <a class="navbar-brand" href="{{ route('departments') }}">HR</a>
            </div>
             <ul class="nav navbar-nav">
                <li><a href="{{ route('departments') }}">Departments</a></li>
                <li><a href="{{ route('employees') }}">Employees</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->email }}</a></li>
              <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
</header>