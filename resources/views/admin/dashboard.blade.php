@extends('layouts.master-admin')

@section('dashboard','active')
@section('content')          
    <div class="container-fluid" style="height:100%;">
    	<div class="row">
            
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
          <a href="{{Route('artikel')}}" class="text-decoration-none" >
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Artikel</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countArtikel}}</div>
                </div>
              </div>
            </div>
            </a>
          </div>
        </div>
        

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
          <a href="{{Route('kategori')}}" class="text-decoration-none">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kategori</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countKategori}}</div>
                </div>
              </div>
            </div>
          </a>
          </div>
        </div>

      </div>
    </div>
@endsection