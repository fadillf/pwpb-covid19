@extends('layouts.master-user')

@section('content')
	<div class="pl-4">
		<div class="row mt-4">
			<div class="col-sm-9 p-4 bg-white ">
				<h1 class="text-bold">{{ $artikelDetail['judul'] }}</h1>
				@php
					$newDateFormat = \Carbon\Carbon::parse($artikelDetail['created_at'])->format('l, d F Y H:i');
				@endphp
				<h6 class="mb-4">{{ $newDateFormat }}</h6>
				<figure class="figure-img">
				<img src="{{ asset('/uploads/artikel/' . $artikelDetail->gambar) }}" height="520px" width="100%" class="img-responsive" style="object-fit: cover;">
				</figure><br>
				
				{!! $artikelDetail['isi'] !!}
			</div>

			<div class="col-sm-3 pl-4">
				<div>
					<h3 class="mt-2 mb 3">Artikel Terkait</h3>
					@foreach($artikelTerkait as $artkl)
				
					<div class="card mb-4 shadow-sm">
						<img src="{{ asset('/uploads/artikel/' . $artkl->gambar) }}" width="100" height="140" class="card-img-top" alt="..." style="object-fit: cover;">
						<div class="card-body">
						@php
							$newDateFormat = \Carbon\Carbon::parse($artkl->created_at)->format('l, d F Y');
						@endphp
						<h6 style="font-size: 14px;color: #C8200C;">{{$newDateFormat}} <span class="badge badge-success float-right">{{$artkl->Kategori->nama_kategori}}</span></h6>
						<h5 class="card-title text-truncate font-weight-bold">{{ $artkl->judul }}</h5>
						<p class="card-text text-truncate">{{ strip_tags($artkl->isi) }}</p>
						<a href="{{ route('informasi.detail', $artkl->slug) }}" class="btn btn-sm btn-primary">Baca</a>
						
						</div>
					</div>
					@endforeach
				</div>

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
				</div><br>

			</div>
		</div>
	</div>
@endsection