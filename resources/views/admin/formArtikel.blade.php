@extends('layouts.master-admin')

@section('artikel','active')
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
    @if(!empty($artikel))
        @method('PATCH')
        @php
            $title = "Edit";
			$btn = "Simpan";
        @endphp
    @else
        @php
            $title = "Tambah"; 
			$btn = "Upload";
        @endphp
    @endif

	<div class="container-fluid">
		<h2>{{ $title }} Artikel</h2>
		<div class="row ">
			<div class="col">
				<div class="card ">
    				<div class="card-header bg-danger text-white">{{$title}} Artikel</div>
    				<div class="card-body">
    					<form action="{{ url('artikel', @$artikel->id) }}" method="POST">
							@csrf
							@if(!empty($artikel))
								@method('PATCH')
							@endif
    						<div class="form-grup mb-3">
    							<label>Judul Artikel</label>
    							<input type="text" name="judul" class="form-control" value="{{ old('judul', @$artikel->judul) }}">
    						</div>

    						<div class="form-group mb-3">
							 	<label>Kategori</label>
							    <select class="form-control" id="kategori_id" name="kategori_id">
									
									<option value="" {{ old('kategori_id', @$artikel->kategori_id) == '' ? 'selected' : '' }} >Pilih Kategori</option>
									
									<option value="4" {{ old('kategori_id', @$artikel->kategori_id) == '4' ? 'selected' : '' }}>4</option>
									
							    </select>
							</div>

							<div class="form-grup mb-3">
    							<label>Gambar</label><br>
    							<input type="file" name="gambar" value="{{ old('gambar', @$artikel->gambar) }}">
    						</div>

    						<div class="form-grup">
    							<label>Isi Artikel</label>
								<textarea id="editor" name="isi">
								{{ old('isi', @$artikel->isi) }}
								</textarea>
    						</div>
							
    
		    				<div class="mt-4 float-right">
		    					<input type="submit" class="btn btn-success mr-3" style="width:120px;" value="{{$btn}}">
		    					<a href="{{ route('artikel') }}" class="btn btn-danger" style="width:120px;">Cancel</a>
							</div>
							
							<script>
								ClassicEditor
									.create( document.querySelector( '#editor' ) )
									.catch( error => {
										console.error( error );
									} );
							</script>
							
    					</form>
					</div>
    			</div>
			</div>
		</div>
	</div>


@endsection
@section('jscript')
		
@endsection