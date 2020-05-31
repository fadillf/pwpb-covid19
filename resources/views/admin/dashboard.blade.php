@extends('layouts.master-admin')

@section('dashboard','active')
@section('content')          
    <div class="container-fluid" style="height:100%;">
    	<div class="row">
            
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Rumah Sakit</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countRs}}</div>
                </div>
              </div>
            </div>
            <div class="card-footer bg-white">
              <div class="row ">
                <div class="col-sm-8">
                  <div class="text">
                    <a href="{{Route('admin.rumahsakit')}}" class="text-decoration-none">Lihat Selengkapnya</a>
                 </div>
                </div>
                <div class="col-sm-4 text-right">
                  <a href="{{Route('admin.rumahsakit')}}" class="text-decoration-none text-right"><i class="fas fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Artikel</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countArtikel}}</div>
                </div>
              </div>
            </div>
            <div class="card-footer bg-white">
              <div class="row ">
                <div class="col-sm-8">
                  <div class="text">
                    <a href="{{Route('artikel')}}" class="text-decoration-none" >Lihat Selengkapnya</a>
                 </div>
                </div>
                <div class="col-sm-4 text-right">
                  <a href="{{Route('artikel')}}" class="text-decoration-none" ><i class="fas fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        

        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kategori</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countKategori}}</div>
                </div>
              </div>
            </div>
            <div class="card-footer bg-white">
              <div class="row ">
                <div class="col-sm-8">
                  <div class="text">
                    <a href="{{Route('kategori')}}" class="text-decoration-none">Lihat Selengkapnya</a>
                 </div>
                </div>
                <div class="col-sm-4 text-right">
                  <a href="{{Route('kategori')}}" class="text-decoration-none"><i class="fas fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-sm-12">
          <div id="list-example" class="list-group">
  <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
  <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
  <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
</div>
<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
  <h4 id="list-item-1">Item 1</h4>
  <p>...</p>
  <h4 id="list-item-2">Item 2</h4>
  <p>...</p>
  <h4 id="list-item-3">Item 3</h4>
  <p>...</p>
  <h4 id="list-item-4">Item 4</h4>
  <p>...</p>
</div>
        </div>
      </div>
    </div>
@endsection