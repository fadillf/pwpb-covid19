@extends('layouts.master-user')

@section('content')

    <div>
      <div class="jumbotron">
        <div class="container">
            <h2 class="display-4 text-danger my-auto ">Data Rumah Sakit Rujukan</h2>
            <p class="lead">Data ini adalah data terus di update setiap harinya.</p>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rumah Sakit Rujukan</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive ">
              <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="30%">Nama Rumah Sakit</th>
                    <th>Alamat</th>
                    <th width="20%">No Telp</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($rs as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;" data-toggle="tooltip" data-placement="bottom" title="{{$row->nama_rs}}">{{$row->nama_rs}}</td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;" data-toggle="tooltip" data-placement="bottom" title="{{$row->alamat}}">{{$row->alamat}}</td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;" data-toggle="tooltip" data-placement="bottom" title="{{$row->no_telp}}">{{$row->no_telp}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
      </div>

    </div>
  @endsection