@extends('layouts.master-admin')

@section('tabelArtikel','active')
@section('artikel','active')
@section('title')
@section('content') 
		
		<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Artikel</h1>

          @if(session('success'))
              <div class="alert alert-success">
                  {{session('success')}}
              </div>
          @endif
          @if(session('error'))
              <div class="alert alert-error">
                  {{session('error')}}
              </div>
          @endif
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><a href="{{ route('artikel/tambah') }}"><i class="fas fa-plus"></i> Tambah Artikel</a></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th width="18%">Judul Artikel</th>
                      <th width="12%">Kategori</th>
                      <th>Isi Artikel</th>
                      <th width="10%">Gambar</th>
                      <th width="11%">Tanggal Upload</th>
                      <th class="text-center" width="9%"><i class="fas fa-cog"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($artikel as $row)
                      <tr style="font-size:14px;">
                        <td>{{$loop->iteration}}</td>
                        <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;" data-toggle="tooltip" data-placement="bottom" title="{{$row->judul}}">{{$row->judul}}</td>
                        <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;" data-toggle="tooltip" data-placement="bottom" title="{{$row->kategori_id}}">{{$row->Kategori->nama_kategori}}</td>
                        <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;" data-toggle="tooltip" data-placement="bottom" title="{{strip_tags($row->isi) }}">{{strip_tags($row->isi)}}</td>
                        <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;" data-toggle="tooltip" data-placement="bottom" title="{{$row->gambar}}">{{$row->gambar}}</td>
                        <!-- @php
                          $newDateFormat = \Carbon\Carbon::parse($row->created_at)->format('d/m/Y');
                        @endphp -->
                        <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;" data-toggle="tooltip" data-placement="bottom" title="{{$row->created_at}}">{{$row->created_at}}</td>
                        <td class="text-center form-inline p-2">
                          <a href="{{ url('/artikel/' . $row->id . '/edit') }}" class="btn btn-warning btn-sm ml-auto mr-2"><i class="fas fa-edit"></i></a>
                          <form action="{{ url('/artikel', $row->id) }}" method="POST" class="mr-auto">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </form>
                          <!-- <a href="" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash"></i></a> -->
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

    </div>		

		<!-- Modal Delete-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Getjudulartikel</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        Are you sure to delete this artikel?
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-danger">Delete</button>
		      </div>
		    </div>
		  </div>
		</div>
@endsection