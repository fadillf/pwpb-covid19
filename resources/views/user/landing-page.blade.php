@extends('layouts.master-user')

@section('content')
<main role="main">
    <div class="container">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3"><img src="img/1.png" width="90" height="100" class="d-block" alt=""></h1>
            <p>(PWPWB Covid Indonesia) Web informatif tentang perkembangan virus covid indonesia dan beberapa daftar rumah sakit penanganan virus.
            </p>
            {{-- <p><a class="btn btn-success btn-lg" href="#" role="button">Baca lebih lanjut..</a></p> --}}
        </div>
    </div>
    <div class="container my-5 z-depth-1">
    </div>

    <div class="container">
        <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading text-danger">Stay Safe at Home !<span class="text-muted"></span></h2>
        <p class="lead">Dirumah Aja! Dengan berdiam diri di rumah dan menjaga jarak ketika bersosialisai dapat 
            membantu kita dalam melawan virus Corona.</p>
      </div>    
      <div class="col-md-5">
        <img src="https://mdbootstrap.com/img/illustrations/graphics(4).png" class="img-fluid " alt="smaple image">

            
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading text-danger">Hindari Kontak Langusng!<span class="text-muted"></span></h2>
        <p class="lead">Hindari kontak dengan orang lain dan ingat jaga jarak minimal 1,5 Meter!. dengan begitu kita dapat 
            menurukan resiko penularan virus.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{ URL::asset('img/sosial.jpg') }}" class="img-fluid " alt="smaple image">


      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading text-danger">Ayo Dirimah Aja!<span class="text-muted"></span></h2>
        <p class="lead">Dengan membatasi aktifitas sosial kita dapat membantu penurunan tingkat penularan virus di indonesia dan 
            dengan begitu kita dapat membantu para tenaga medis menangani korban positif agar tidak betambah :).</p>
      </div>
      <div class="col-md-5">

        <img src="{{ URL::asset('img/dis.jpg') }}" class="img-fluid  " alt="smaple image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading text-danger">Cek Suhu Tubuhmu!<span class="text-muted"></span></h2>
        <p class="lead">Cek suhu tubuh mu, dengan pengecekan suhu tubuh sangat lah penting karena penuradan dapat di deteksi dengan tingginya
            suhu tubuh.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{ URL::asset('img/suhu.jpg') }} " class="img-fluid" alt="smaple image">


      </div>
    </div>

    <hr class="featurette-divider"
    
@endsection
