<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="{{ url('dashboard') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('profile') }}" class="nav-link">
        <i class="nav-icon fa fa-users"></i>
        <p>
          Profile
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('pengalaman-kuliah') }}" class="nav-link">
        <i class="nav-icon fa fa-graduation-cap"></i>
        <p>
          Pengalaman Kuliah
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('matkul') }}" class="nav-link">
        <i class="nav-icon fa  fa-book"></i>
        <p>
          Mata Kuliah
        </p>
      </a>
    </li>
  </ul>
</nav>