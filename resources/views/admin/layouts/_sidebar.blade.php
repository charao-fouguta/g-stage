<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.top') }}">
    {{-- <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div> --}}
    <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
  </a>

  <hr class="sidebar-divider my-0">

  <li class="nav-item">
    <a class="nav-link text-center" href="{{ route('admin.top') }}">
      <i class="fas fa-fw fa-level-up-alt"></i>
      <span>TOP</span></a>
  </li>

  <hr class="sidebar-divider">
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
      aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-list-alt"></i>
      <span>ブランド管理</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

        <a class="collapse-item">G-stage</a>
        <a class="collapse-item">GALLIPOLI</a>
      </div>
    </div>
  </li>

  <hr class="sidebar-divider">
  <li class="nav-item">
    <a class="nav-link">
      <i class="fas fa-fw fa-newspaper"></i>
      <span>News管理</span>
    </a>
  </li>

  <hr class="sidebar-divider d-none d-md-block">

  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->