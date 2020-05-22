@extends('layouts.master-admin')

@section('artikel','active')
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

	<div class="container">
		<h2>{{ $title }} Artikel</h2>
		<div class="row ">
			<div class="col">
				<div class="card ">
    				<div class="card-header bg-danger text-white">{{$title}} Artikel</div>
    				<div class="card-body">
    					<form action="{{ url('artikel', @$artikel['id']) }}" method="POST" enctype="multipart/form-data">
							@csrf
							@if(!empty($artikel))
								@method('PATCH')
							@endif
    						<div class="form-grup mb-3">
    							<label>Judul Artikel</label>
    							<input type="text" name="judul" class="form-control" value="{{ old('judul', @$artikel['judul']) }}">
    						</div>

    						<div class="form-group mb-3">
							 	<label>Kategori</label>
							    <select class="form-control" id="kategori_id" name="kategori_id">
									
									<option value=" " >Pilih Kategori</option>
									@foreach ($kategori as $row)
										<option value="{{ $row->id }}" {{ old('kategori_id', @$row->id) == @$artikel['kategori_id']  ? 'selected' : '' }}>{{$row->nama_kategori}}</option>
									@endforeach
							    </select>
							</div>

							<div class="form-grup mb-3">
    							<label>Thumbnail</label><br>
								@if(@$artikel['gambar'])
									<img id="output" src="{{ asset('/uploads/artikel/' . @$artikel['gambar']) }}" width="400px" height="240px" style="object-fit: cover;"/>
								@else
									<img id="output" src="{{ asset('/uploads/artikel/default.png')}}" width="200px" height="200px" style="object-fit: cover;"/>
								@endif
    						</div>

							<div class="input-group mb-4 " @if(@$artikel['gambar']) style="width:39%;" @else style="width:20%;" @endif>
								<div class="custom-file">
									<input type="file" name="gambar" class="custom-file-input" id="inputGroupFile01" accept="image/*" onchange="loadFile(event)" aria-describedby="inputGroupFileAddon01">
									<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
								</div>
							</div>

    						<div class="form-grup">
    							<label>Isi Artikel</label>
								<textarea type="text" id="editor" name="isi">
									{{ old('isi', @$artikel['isi']) }}
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

	<script>
		var loadFile = function(event) {
			var output = document.getElementById('output');
			output.src = URL.createObjectURL(event.target.files[0]);
			output.onload = function() {
				URL.revokeObjectURL(output.src) // free memory
			}
		};

	</script>
		
@endsection