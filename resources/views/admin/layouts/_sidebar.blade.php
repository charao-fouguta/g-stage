<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #0a0837">

  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.top') }}">
    {{-- <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div> --}}
    <div class="sidebar-brand-text mx-3"><img src="{{ asset('images/G-STAGE-rogo.png') }}" style="height: 40px;"></div>
  </a>

  <hr class="sidebar-divider my-0">

  <li class="nav-item">
    <a class="nav-link text-center" href="{{ route('admin.top') }}">
      <span>TOP</span></a>
  </li>

  <hr class="sidebar-divider">
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
      aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw far fa-tshirt"></i>
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
  <li class="nav-item @if(stripos(Route::currentRouteName(), 'news') !== false) active @endif">
    <a class="nav-link" href="{{ route('admin.news.index') }}">
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