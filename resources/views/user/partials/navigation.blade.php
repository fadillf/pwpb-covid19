<!-- Topbar -->
<nav class="navbar navbar-expand-lg navbar-light site-header sticky-top shadow-sm p-3 bg-white h-400">
  <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="{{ URL::asset('/logo.png') }} " width="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-danger font-weight-bold mr-4" href="{{ route('/') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger font-weight-bold mr-4" href="{{ route('terkini') }}">Kasus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger font-weight-bold mr-4" href="{{ route('rumahsakit') }}">Rumah Sakit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger font-weight-bold mr-4" href="{{ route('informasi') }}">Informasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger font-weight-bold" href="{{ route('contact') }}">Contact Us</a>
          </li>
      </div>
  </div>
</nav>
<!-- End of Topbar -->
