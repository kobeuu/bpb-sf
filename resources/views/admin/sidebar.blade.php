<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset ("/img/dian-p.png") }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active">
        <a href="/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
      </li>

      <li class="treeview">
        <a href="/articles/admin">
          <i class="fa fa-file-text-o"></i> <span>Artikel</span>
        </a>
      </li>

      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-newspaper-o"></i> <span>Berita</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Daftar Berita</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Berita Baru</a></li>
        </ul>
      </li> -->

      <li class="treeview">
        <a href="/users/admin">
          <i class="fa fa-users"></i> <span>Peserta</span>
          <!-- <i class="fa fa-angle-left pull-right"></i> -->
        </a>
        <!-- <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Semua Daftar Peserta</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Prestasi</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Peserta Baru</a></li>
        </ul> -->
      </li>

      <li class="treeview">
        <a href="/images/admin">
          <i class="fa fa-image"></i> <span>Gallery</span>
        </a>
      </li>

      <li class="treeview">
        <a href="/registrants/admin">
          <i class="fa fa-user"></i> <span>Pendaftaran</span>
        </a>
      </li>

      <li>
        <a href="/messages/admin">
          <i class="fa fa-envelope"></i> <span>Pesan</span>
        </a>
      </li>

    </ul>
</aside>
