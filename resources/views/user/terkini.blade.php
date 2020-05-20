@extends('layouts.master-user')

@section('content')
			<h2 class="mb-4 text-dark">Kasus Terkini Hari ini</h2>
			<div class="row">
				<div class="col-sm-4">
					<div class="card border-white shadow-sm" style="height: 315px;">
					<div class="card-body text-dark">
						<h2 class="card-title">Kabar Dunia</h2><hr>
					    <h4 class="card-title">4,819,959</h4>
					    <h6 class="card-text">Positif</h6>
					    <h4 class="card-title">1,798,148</h4>
					    <h6 class="card-text">Sembuh</h6>
					    <h4 class="card-title">318,833</h4>
					    <h6 class="card-text">Meninggal</h6>
					</div>
				</div>
				</div>
				<div class="col-sm-4">
					<div class="card shadow-sm mb-3 border-left-danger border-danger" style="height: 150px;">
						<div class="card-body text-dark">
						    <h3 class="card-title">Kabar Indonesia <img src="{{ URL::asset('/indonesia.png') }}" width="50"class="img-thumbnail rounded-circle"></h3>
						    <h3 class="card-title">18456</h3>
						    <h5 class="card-text">Total Kasus</h5>
						</div>
					</div>
					<div class="card shadow-sm border-white" style="height: 150px;">
						<div class="card-body text-dark">
							<h5 class="card-text">Total Sembuh</h5>
						    <h2 class="card-title">4.324</h2>
						    <h5 class="card-text">Orang</h5>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card mb-3 border-left-danger border-danger" style="height: 150px;">
						<div class="card-body text-dark">
							<h5 class="card-text">Total Positif</h5>
						    <h2 class="card-title">18010</h2>
						    <h5 class="card-text">Orang</h5>
						</div>
					</div>
					<div class="card shadow-sm border-white" style="height: 150px;">
						<div class="card-body text-dark">
							<h5 class="card-text">Total Meninggal</h5>
						    <h2 class="card-title">1191</h2>
						    <h5 class="card-text">Orang</h5>
						</div>
					</div>
				</div>
			</div>
			<h6 class="text-dark mt-4" style="text-align: center;">Sumber data : Kementerian Kesehatan & JHU. Update terakhir : 19 Mei 2020 17:45:00 WIB</h6>
@endsection