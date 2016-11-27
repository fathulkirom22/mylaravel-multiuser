<aside class="main-sidebar navbar-fixed-left">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <div class="header">MAIN NAVIGATION</div>
      <li class="active treeview">
        <a href="{{ url('/admin_home') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="active treeview">
        <a href="{{ url('/admin_register') }}">
          <i class="fa fa-user"></i> <span>Add New Admin</span>
        </a>
      </li>
      <li class="active treeview">
        <a href="{{ url('/admin_home/list_users') }}">
          <i class="fa fa-table"></i> <span>List Patien</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
