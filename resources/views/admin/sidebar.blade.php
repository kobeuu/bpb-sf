<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        @if (count(Auth::user()->avatar) > 0)
          <img class="img-circle" src="{{ URL('/uploads/avatar/'. Auth::user()->avatar) }}" alt="User Avatar">
        @else
          <img class="img-circle" src="{{ asset('/img/avatar.svg') }}" alt='User Avatar'>
        @endif
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i>{{ Auth::user()->universitas }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
      </li>

      <li class="treeview">
        <a href="/dashboard/profil">
          <i class="fa fa-user"></i> <span>Profil</span>
        </a>
      </li>

      <li class="treeview">
        <a href="/dashboard/articles">
          <i class="fa fa-file-text-o"></i> <span>Artikel</span>
        </a>
      </li>

      @if ( Auth::user()->admin)

      <li class="treeview">
        <a href="/dashboard/news">
          <i class="fa fa-newspaper-o"></i> <span>Berita</span>
        </a>
      </li>

      <li class="treeview">
        <a href="/dashboard/users">
          <i class="fa fa-users"></i> <span>Pengguna</span>
        </a>
      </li>

      <li class="treeview">
        <a href="/dashboard/images">
          <i class="fa fa-image"></i> <span>Gallery</span>
        </a>
      </li>

      <li>
        <a href="/dashboard/messages">
          <i class="fa fa-envelope"></i> <span>Pesan</span>
        </a>
      </li>

      <li class="treeview">
        <a href="/dashboard/registrants">
          <i class="fa fa-user-plus"></i> <span>Pendaftaran</span>
        </a>
      </li>
      @endif

    </ul>
</aside>
