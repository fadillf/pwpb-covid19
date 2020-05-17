@extends('layouts.master-admin')

@section('dashboard','active')
@section('title')
@section('content')          
    <div class="container-fluid">
    	<div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kartu Prakerja</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">1000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kartu Pintar</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">10000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">BPJS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">10000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kartu Jamsoster</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">10000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection