@extends('layouts.master-admin')

@section('title')
@section('content') 
	
	<div class="container-fluid">
		<h2>Form Rumah Sakit</h2>
		<div class="row">
			<div class="col">
				<div class="card">
    				<div class="card-header bg-danger text-white">Tambah/ Edit Rumah Sakit</div>
    				<div class="card-body">
    					<form>
    						<div class="form-group">
    							<label>Nama Rumah Sakit</label>
    							<input type="" name="" class="form-control" placeholder="Rumah Sakit">
    						</div>
    						<div class="form-group">
    							<label>Alamat</label>
    							<textarea class="form-control" rows="6" placeholder="Address"></textarea>
    						</div>
    						<div class="form-group">
    							<label>No Telepon</label>
    							<input type="" name="" class="form-control" placeholder="No Telepon">
    						</div>
    						<div class="float-right mt-4">
		    					<input type="submit" name="" class="btn btn-success mr-3" style="width:120px;">
		    					<a href="" class="btn btn-danger" style="width:120px;">Cancel</a>
		    				</div>
    					</form>
    			</div>
			</div>
		</div>
	</div>
</div>

@endsection