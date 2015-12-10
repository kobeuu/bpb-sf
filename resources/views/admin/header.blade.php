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

      <li class="messages-menu">
        <a href="/articles/create" class="dropdown-toggle">
          Tulis Artikel
        </a>
      </li>

      <li class="messages-menu">
        <a href="{{ url('/auth/logout') }}" class="dropdown-toggle">
          Keluar
        </a>
      </li>
      
    </ul>
  </div>
</nav>
</header>
