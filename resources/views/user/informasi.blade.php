@extends('layouts.master-user')

@section('content')
	<div class="container-fluid">
		<div class="bg-white border-white shadow-sm p-4 mb-3">
			<h5 class="mb-0">Informasi terkini mengenai COVID-19. 100% faktual, dari sumber-sumber terpercaya.</h5>
		</div>

		<div class="row">
			<div class="col">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				  @foreach($artikelSlideBar as $info)
				    <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->iteration}}" class="active"></li>
				  @endforeach
				  </ol>
				  <div class="carousel-inner">
				  @foreach($artikelSlideBar as $key => $info)
				    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
				      <img src="{{ URL::asset('/uploads/artikel/' . $info->gambar) }}" height="470" class="w-100" alt="Slider Image" style="object-fit: cover;">
					  <div class="carousel-caption d-none d-md-block text-left">
						<span class="badge badge-danger">{{$info->Kategori->nama_kategori}}</span><br>
						<a href="" class="h1 text-decoration-none text-white" ><strong>{{$info->judul}}</strong></a>
						<h4 class="text-truncate">{{ strip_tags($info->isi) }}</h4>
					  </div>
				    </div>
				  @endforeach
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>	
		</div>

	
	<div class="row mt-5">
		<div class="col-sm-9">
			<div class="border-white shadow-sm ">
				@if(!empty($slug))
				<h2 class="mb-4 bg-white p-3">Kategori {{$slug}}</h2>
				@else
				<h2 class="mb-4 bg-white p-3">Informasi Terkini</h2>
				@endif
			</div>
		
		
			<div class="row">
				@foreach($artikel as $artkl)
				<div class="col-sm-4">
					<div class="card mb-4 shadow-sm">
						<img src="{{ asset('/uploads/artikel/' . $artkl->gambar) }}" width="100" height="140" class="card-img-top" alt="..." style="object-fit: cover;">
						<div class="card-body">
						@php
							$newDateFormat = \Carbon\Carbon::parse($artkl->created_at)->format('l, d F Y');
						@endphp
						<h6 style="font-size: 14px;color: #C8200C;">{{$newDateFormat}} <span class="badge badge-success float-right">{{$artkl->Kategori->nama_kategori}}</span></h6>
						<h4 class="card-title text-truncate font-weight-bold">{{ $artkl->judul }}</h4>
						<p class="card-text text-truncate" width="50px">{{ strip_tags($artkl->isi) }}</p>
						<a href="{{ route('informasi.detail', $artkl->slug) }}" class="btn btn-sm btn-primary float-right"> Baca </a>
						
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>

		<div class="col-sm-3">
			<div class="card sticky-top">
				<div class="card-header bg-danger text-white">
					<h5 class="card-title mb-0">Kategori</h5>
				</div>
				<div class="card-body">
					<h6 class="card-text">
					@foreach($kategori as $ktgr)
						<a href="{{ route('informasi.kategori', $ktgr->slug) }}" class="nav-link text-secondary">{{$ktgr->nama_kategori}} <span class="badge badge-success float-right">{{$ktgr->artikel_count}}</span></a><hr class = "my-2">
					@endforeach
					</h6>
				</div>
			</div>
		</div>
	</div>
	</div>
@endsection