@extends('layouts.master-user')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="card border-white shadow-sm mb-4 p-4 shadow-sm">
					<div class="card-body">
						<div class="card-text">
							<h1>Berita Terkini Hari Ini</h1>
							<h5>Informasi terkini mengenai COVID-19. 100% faktual, dari sumber-sumber terpercaya.</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="{{ URL::asset('/corona.jpg') }}" height="400" class="d-block w-100" alt="...">
				    </div>
				    <div class="carousel-item">
				      <img src="{{ URL::asset('/psbb.jpg') }}" height="400" class="d-block w-100" alt="...">
				    </div>
				    <div class="carousel-item">
				      <img src="{{ URL::asset('/bantuan.jpg') }}" height="400" class="d-block w-100" alt="...">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>	
	</div>
	<div class="row mt-4">
		<div class="col-sm-9">
				<div class="row">
					<div class="col-sm-4">
						<div class="card mb-4 shadow-sm">
						  <img src="{{ URL::asset('/artikel.jpg') }}" width="100" height="130" class="card-img-top" alt="...">
						  <div class="card-body">
						  	<h6 style="font-size: 14px;color: #C8200C;">5/20/2020</h6>
						    <h5 class="card-title text-truncate font-weight-bold">Himabuan Bobotoh</h5>
						    <p class="card-text text-truncate">Diduga Ketua Bobotoh yaitu Fadillah Faradita tidak menghiraukan himbauan ridwan kamil</p>
						    <a href="#" class="btn btn-primary">Selanjutnya -></a>
						  </div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card mb-4 shadow-sm">
						  <img src="{{ URL::asset('/artikel.jpg') }}" width="100" height="130" class="card-img-top" alt="...">
						  <div class="card-body">
						  	<h6 style="font-size: 14px;color: #C8200C;">5/20/2020</h6>
						    <h5 class="card-title text-truncate font-weight-bold">Himabuan Bobotoh</h5>
						    <p class="card-text text-truncate">Diduga Ketua Bobotoh yaitu Fadillah Faradita tidak menghiraukan himbauan ridwan kamil</p>
						    <a href="#" class="btn btn-primary">Selanjutnya -></a>
						  </div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card mb-4 shadow-sm">
						  <img src="{{ URL::asset('/artikel.jpg') }}" width="100" height="130" class="card-img-top" alt="...">
						  <div class="card-body">
						  	<h6 style="font-size: 14px;color: #C8200C;">5/20/2020</h6>
						    <h5 class="card-title text-truncate font-weight-bold">Himabuan Bobotoh</h5>
						    <p class="card-text text-truncate">Diduga Ketua Bobotoh yaitu Fadillah Faradita tidak menghiraukan himbauan ridwan kamil</p>
						    <a href="#" class="btn btn-primary">Selanjutnya -></a>
						  </div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card shadow-sm">
						  <img src="{{ URL::asset('/artikel.jpg') }}" width="100" height="130" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title text-truncate">Himabuan Bobotoh</h5>
						    <p class="card-text text-truncate">Diduga Ketua Bobotoh yaitu Fadillah Faradita tidak menghiraukan himbauan ridwan kamil</p>
						    <a href="#" class="btn btn-primary">Selanjutnya -></a>
						  </div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card shadow-sm mb-4">
						  <img src="{{ URL::asset('/artikel.jpg') }}" width="100" height="130" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title text-truncate">Himabuan Bobotoh</h5>
						    <p class="card-text text-truncate">Diduga Ketua Bobotoh yaitu Fadillah Faradita tidak menghiraukan himbauan ridwan kamil</p>
						    <a href="#" class="btn btn-primary">Selanjutnya -></a>
						  </div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card shadow-sm">
						  <img src="{{ URL::asset('/artikel.jpg') }}" width="100" height="130" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title text-truncate">Himabuan Bobotoh</h5>
						    <p class="card-text text-truncate">Diduga Ketua Bobotoh yaitu Fadillah Faradita tidak menghiraukan himbauan ridwan kamil</p>
						    <a href="#" class="btn btn-primary">Selanjutnya -></a>
						  </div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card shadow-sm">
						  <img src="{{ URL::asset('/artikel.jpg') }}" width="100" height="130" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title text-truncate">Himabuan Bobotoh</h5>
						    <p class="card-text text-truncate">Diduga Ketua Bobotoh yaitu Fadillah Faradita tidak menghiraukan himbauan ridwan kamil</p>
						    <a href="#" class="btn btn-primary">Selanjutnya -></a>
						  </div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card shadow-sm mb-4">
						  <img src="{{ URL::asset('/artikel.jpg') }}" width="100" height="130" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title text-truncate">Himabuan Bobotoh</h5>
						    <p class="card-text text-truncate">Diduga Ketua Bobotoh yaitu Fadillah Faradita tidak menghiraukan himbauan ridwan kamil</p>
						    <a href="#" class="btn btn-primary">Selanjutnya -></a>
						  </div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card shadow-sm">
						  <img src="{{ URL::asset('/artikel.jpg') }}" width="100" height="130" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title text-truncate">Himabuan Bobotoh</h5>
						    <p class="card-text text-truncate">Diduga Ketua Bobotoh yaitu Fadillah Faradita tidak menghiraukan himbauan ridwan kamil</p>
						    <a href="#" class="btn btn-primary">Selanjutnya -></a>
						  </div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card shadow-sm">
						  <img src="{{ URL::asset('/artikel.jpg') }}" width="100" height="130" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title text-truncate">Himabuan Bobotoh</h5>
						    <p class="card-text text-truncate">Diduga Ketua Bobotoh yaitu Fadillah Faradita tidak menghiraukan himbauan ridwan kamil</p>
						    <a href="#" class="btn btn-primary">Selanjutnya -></a>
						  </div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card shadow-sm">
						  <img src="{{ URL::asset('/artikel.jpg') }}" width="100" height="130" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title text-truncate">Himabuan Bobotoh</h5>
						    <p class="card-text text-truncate">Diduga Ketua Bobotoh yaitu Fadillah Faradita tidak menghiraukan himbauan ridwan kamil</p>
						    <a href="#" class="btn btn-primary">Selanjutnya -></a>
						  </div>
						</div>
					</div>
				</div>
		</div>
		<div class="col-sm-3">
			<div class="card sticky-top">
				<div class="card-header bg-danger">
					<h5 class="card-title">Kategori</h5>
				</div>
				<div class="card-body">
			    <h6 class="card-text">
			    	Contoh <hr>
			    	Contoh <hr>
			    	Contoh <hr>
			    	Contoh <hr>
			    	Contoh <hr>
			    	Contoh
			    </h6>
				</div>
			</div>
		</div>
	</div>
	</div>
@endsection