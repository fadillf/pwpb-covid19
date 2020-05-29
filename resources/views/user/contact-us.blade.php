@extends('layouts.master-user')

@section('content')
<section id="contact">
    <div class="container">
        <h3 class="text-center text-uppercase">contact us</h3><hr>
        <p class="text-center w-75 m-auto">Jika anda memiliki saran dan masukkan terhadap aplikasi kami, silahkan kontak kami dengan mengisi kotak saran atau bisa menghubungi kami.</p>
        <div class="row mt-4 mb-5">
        	<div class="col-sm-6 bg-white p-3 shadow-sm rounded mt-4 " style="margin: auto;">
        		<form id="contact-form" action="#" method="get">
                     <div class="from-group mb-4 mt-3">
                     	<input type="text" name="" class="form-control" placeholder="Your Name">
                     </div>
                     <div class="from-group mb-4">
                     	<input type="text" name="" class="form-control" placeholder="Email">
                     </div>
                     <div class="from-group mb-4">
                     	<textarea class="form-control" style="resize: none;" rows="6" placeholder="Message"></textarea>
                     </div>
                     <button class="btn btn-success">Send</button>
                </form>
        	</div>
        </div>
        <div class="row  mt-5" style="font-size: 22px;">
        	<div class="col-sm-12 text-center mt-4">
        		<p>Or Contact With</p>
        		<i class="fab fa-facebook-f fa-2x"></i>&emsp;
        		<i class="fab fa-instagram fa-2x"></i>&emsp;
        		<i class="fas fa-envelope fa-2x"></i>&emsp;
  				<i class="fab fa-twitter fa-2x"></i>
        	</div>
        </div>
    </div>
</section>
 @endsection
