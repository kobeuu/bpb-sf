<header class="main-header">

<!-- Logo -->
<a href="/dashboard" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>BPB</b></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg">Sinergi Foundation</span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      <li class="dropdown messages-menu">
        <a href="/articles/create" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-file-text-o"></i>
        </a>
      </li>

      <li class="dropdown messages-menu">
        <a href="/articles/create" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-envelope-o"></i>
        </a>
      </li>

      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <!-- The user image in the navbar-->
          <img src="{{ asset ("/img/dian-p.png") }}" class="user-image" alt="User Image">
          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs">{{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
            <img src="{{ asset ("/img/dian-p.png") }}" class="img-circle" alt="User Image">
            <p>
              {{ Auth::user()->name }}
              <small>Beasiswa Pemimpin Bangsa</small>
            </p>
          </li>

          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="{{ url('/auth/logout') }}" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
</header>
