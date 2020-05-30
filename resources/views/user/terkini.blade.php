@extends('layouts.master-user')

@section('content')
			<h2 class="mb-4 text-dark mt-5">Kasus Terkini Hari ini</h2>
			<div class="row">
				<div class="col-sm-4">
					<div class="card border-white shadow-sm" style="height: 315px;">
					<div class="card-body text-dark">
						<h2 class="card-title">Kabar Dunia</h2><hr>
					    <h4 class="card-title text-warning mb-1">{{$dataGlobal['positif']['value']}}</h4>
					    <h6 class="card-text text-warning">Positif</h6>
					    <h4 class="card-title text-success mb-1 mt-3">{{$dataGlobal['sembuh']['value']}}</h4>
					    <h6 class="card-text text-success">Sembuh</h6>
					    <h4 class="card-title text-danger mb-1 mt-3">{{$dataGlobal['meninggal']['value']}}</h4>
					    <h6 class="card-text text-danger">Meninggal</h6>
					</div>
				</div>
				</div>
				<div class="col-sm-4">
					<div class="card shadow-sm mb-3 border-left-white border-white" style="height: 150px;">
						<div class="card-body text-dark">
							
						    <h3 class="card-title">Kabar {{ $dataInd['0']['name'] }} <img src="{{ URL::asset('/indonesia.png') }}" width="35px" height="35px" class="rounded-circle shadow-sm" style="object-fit: cover;"></h3>
						    <h3 class="card-title">{{ $dataInd['0']['positif'] }}</h3>
							<h5 class="card-text">Total Kasus</h5>
							
						</div>
					</div>
					<div class="card shadow-sm border-left-success border-success" style="height: 150px;">
						<div class="card-body text-dark">
							<h5 class="card-text">Total Sembuh</h5>
						    <h2 class="card-title text-success">{{ $dataInd['0']['sembuh'] }}</h2>
						    <h5 class="card-text">Orang</h5>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card mb-3 border-left-warning border-warning" style="height: 150px;">
						<div class="card-body text-dark">
							<h5 class="card-text">Total Positif</h5>
						    <h2 class="card-title text-warning">{{ $dataPositif }}</h2>
						    <h5 class="card-text">Orang</h5>
						</div>
					</div>
					<div class="card shadow-sm border-left-danger border-danger" style="height: 150px;">
						<div class="card-body text-dark">
							<h5 class="card-text">Total Meninggal</h5>
						    <h2 class="card-title text-danger">{{ $dataInd['0']['meninggal'] }}</h2>
						    <h5 class="card-text">Orang</h5>
						</div>
					</div>
				</div>
			</div>
			@php
				$newDateFormat = \Carbon\Carbon::parse($covid19['lastUpdate'])->format('l, d F Y H:i:s');
			@endphp
			<h6 class="text-dark mt-5" style="text-align: center;">Sumber data : Kementerian Kesehatan & JHU. Update terakhir : {{ $newDateFormat }} WIB</h6>
			<br><br><br><br><br>	
			<div class="container">

				<!-- DataTales Provinsi -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h6>
					</div>

					<div class="card-body">
						<div class="table-responsive" style="height: 580px; overflow: auto;">
							<table class="table table-bordered" id="" width="100%" cellspacing="0">
								<thead class="bg-danger text-white" style="position: sticky; top: 0;">
									<tr>
										<th scope="col" style="width:5%; position: sticky; top: 0;">No</th>
										<th scope="col" style="position: sticky; top: 0;">Provinsi</th>
										<th scope="col" style="position: sticky; top: 0;">Positif</th>
										<th scope="col" style="position: sticky; top: 0;">Sembuh</th>
										<th scope="col" style="position: sticky; top: 0;">Meninggal</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($dataProv as $datas)   
									<tr>
										<th scope="row">{{$loop->iteration}}</th>
										<td>{{ $datas['attributes']['Provinsi'] }}</td>
										<td>{{ $datas['attributes']['Kasus_Posi'] }}</td>
										<td>{{ $datas['attributes']['Kasus_Semb'] }}</td>
										<td>{{ $datas['attributes']['Kasus_Meni'] }}</td>
									</tr>
									@endforeach 
								</tbody>
							</table>
						</div>
					</div>
				</div>

				
			</div>
@endsection