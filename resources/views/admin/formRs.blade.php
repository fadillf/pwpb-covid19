@extends('layouts.master-admin')

@section('title')
@section('content') 
	
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
    @if(!empty($rs))
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

	<div class="container-fluid">
		<h2>Form Rumah Sakit</h2>
		<div class="row">
			<div class="col">
				<div class="card">
    				<div class="card-header bg-danger text-white">{{$title}} Rumah Sakit</div>
    				<div class="card-body">
    					<form action="{{ url('/admin/rumahsakit', @$rs->id) }}" method="POST">
							@csrf
							@if(!empty($rs))
								@method('PATCH')
							@endif
    						<div class="form-group">
    							<label>Nama Rumah Sakit</label>
    							<input type="text" name="nama_rs" class="form-control" placeholder="Rumah Sakit" value="{{ old('nama_rs', @$rs->nama_rs) }}">
    						</div>
    						<div class="form-group">
    							<label>Alamat</label>
    							<textarea type="text" class="form-control" rows="6" placeholder="Alamat Lengkap" name="alamat">{{ old('alamat', @$rs->alamat) }}</textarea>
    						</div>
    						<div class="form-group">
    							<label>No Telepon</label>
    							<input type="text" name="no_telp" class="form-control" placeholder="No Telepon" value="{{ old('no_telp', @$rs->no_telp) }}">
    						</div>
    						<div class="float-right mt-4">
		    					<input type="submit" name="" class="btn btn-success mr-3" style="width:120px;" value="{{$btn}}">
		    					<a href="{{route('admin.rumahsakit')}" class="btn btn-danger" style="width:120px;">Cancel</a>
		    				</div>
    					</form>
    			</div>
			</div>
		</div>
	</div>
</div>

@endsection