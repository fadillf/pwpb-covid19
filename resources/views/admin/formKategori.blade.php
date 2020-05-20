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
		    				</div>
    					</form>
    			</div>
			</div>
		</div>
	</div>
@endsection