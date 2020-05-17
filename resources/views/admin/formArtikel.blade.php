@extends('layouts.master-admin')

@section('tabelArtikel','active')
@section('title')
@section('content') 
	<div class="container-fluid">
		<h2>Profile getJudulArtikel</h2>
		<div class="row">
			<div class="col">
				<div class="card">
    				<div class="card-header bg-danger text-white">Tamabh/Edit Artikel</div>
    				<div class="card-body">
    					<form>
    						<div class="form-grup">
    							<label>Judul Artikel</label>
    							<input type="text" name="" class="form-control">
    						</div>
    						<div class="form-group">
							 	<label for="exampleFormControlSelect1">Kategori</label>
							    <select class="form-control" id="exampleFormControlSelect1">
							      <option>Tips & Trick</option>
							      <option>Informasi</option>
							      <option>Edukasi</option>
							    </select>
							</div>
    						<div class="form-grup">
    							<label>Isi Artikel</label>
    							<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style="resize: none;"></textarea>
    						</div>
    						<div class="form-grup">
    							<label>Tangal Upload</label>
    							<input type="text" name="" class="form-control">
    						</div>
		    				</div>
		    				<div class="card-footer bg-transparent border-white">
		    					<input type="button" name="" class="btn btn-success" value="Save">
		    					<input type="button" name="" class="btn btn-danger"  value="Back">
		    				</div>
    					</form>
    			</div>
			</div>
		</div>
	</div>
@endsection