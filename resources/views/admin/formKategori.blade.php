@extends('layouts.master-admin')

@section('tabelArtikel','active')
@section('title')
@section('content') 
	<div class="container-fluid">
		<h2>Profile getJudulArtikel</h2>
		<div class="row">
			<div class="col">
				<div class="card">
    				<div class="card-header bg-danger text-white">Tambah Kategori</div>
    				<div class="card-body">
    					<form method="POST" action="">
    						<div class="form-grup">
    							<label>Nama Kategori</label>
    							<input type="text" name="" class="form-control" placeholder="Nama Kategori">
    						</div>
		    				<div class="mt-3">
		    					<input type="button" name="" class="btn btn-success" value="Add">
		    					<a href="{{ route('kategori') }}" class="btn btn-danger">Back</a>
@section('kategori','active')
@section('title')
@section('content') 

@if(session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Perhatian</strong><br>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(!empty($kategori))
        @method('PATCH')
        @php
            $title = "Edit";
			$btn = "Simpan"
        @endphp
    @else
        @php
            $title = "Tambah"; 
			$btn = "Tambah"
        @endphp
    @endif
	<div class="container">
		<h2>{{ $title }} Kategori</h2>
		<div class="row">
			<div class="col">
				<div class="card">
    				<div class="card-header bg-danger text-white">{{ $title }} Kategori</div>
    				<div class="card-body">
    					<form action="{{ url('kategori', @$kategori->id) }}" method="POST">
							@csrf
							@if(!empty($kategori))
								@method('PATCH')
							@endif
    						<div class="form-grup mb-3">
    							<label>Nama Kategori</label>
    							<input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" value="{{ old('nama_kategori', @$kategori->nama_kategori) }}">
    						</div>

		    				<div class="float-right mt-4">
		    					<input type="submit" name="" class="btn btn-success mr-3" style="width:120px;" value="{{$btn}}">
		    					<a href="{{ route('kategori') }}" class="btn btn-danger" style="width:120px;">Cancel</a>
		    				</div>
    					</form>
					</div>
    			</div>
			</div>
		</div>
	</div>
@endsection