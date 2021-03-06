<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-text mx-3">
     PCI Admin
  </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<li class="nav-item @yield('dashboard')">
    <a class="nav-link" href="{{ route('home') }}">
      <i class="fas fa-home"></i>
    <span>Dashboard</span></a>
</li>

<li class="nav-item @yield('profile')">
    <a class="nav-link" href="{{ route('profile') }}">
      <i class="fas fa-user"></i>
    <span>Profile</span></a>
</li>

<li class="nav-item @yield('rs')">
    <a class="nav-link" href="{{ route('admin.rumahsakit') }}">
      <i class="fas fa-hospital"></i>
    <span>Rumah Sakit</span></a>
</li>

<li class="nav-item @yield('artikel')">
    <a class="nav-link" href="{{ route('artikel') }}">
      <i class="fas fa-newspaper"></i>
    <span>Artikel</span></a>
</li>

<li class="nav-item @yield('kategori')">
    <a class="nav-link" href="{{ route('kategori') }}">
      <i class="fas fa-list"></i>
    <span>Kategori</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->