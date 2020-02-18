<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
     @include('includes.head')
    <body>
     @include('includes.header')
     
        <div class="flex-center position-ref full-height">
            <div class="content">

			<div class="container">

@include('includes.slider')

				<!-- Produit et services -->
				<div class="row text-center">

									<div class="col-lg-3 col-md-6 mb-4">
										<div class="card h-100">
											<img class="card-img-top" src="http://placehold.it/500x325" alt="">
											<div class="card-body">
												<h4 class="card-title">Card title</h4>
												<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
											</div>
											<div class="card-footer">
												<a href="#" class="btn btn-primary">Find Out More!</a>
											</div>
										</div>
									</div>

									<div class="col-lg-3 col-md-6 mb-4">
										<div class="card h-100">
											<img class="card-img-top" src="http://placehold.it/500x325" alt="">
											<div class="card-body">
												<h4 class="card-title">Card title</h4>
												<p class="card-text">Lorem ipsum dolor sit amet, consectetur. Tempore debitis beatae culpa natus architecto.</p>
											</div>
											<div class="card-footer">
												<a href="#" class="btn btn-primary">Find Out More!</a>
											</div>
										</div>
									</div>

									<div class="col-lg-3 col-md-6 mb-4">
										<div class="card h-100">
											<img class="card-img-top" src="http://placehold.it/500x325" alt="">
											<div class="card-body">
												<h4 class="card-title">Card title</h4>
												<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
											</div>
											<div class="card-footer">
												<a href="#" class="btn btn-primary">Find Out More!</a>
											</div>
										</div>
									</div>

									<div class="col-lg-3 col-md-6 mb-4">
										<div class="card h-100">
											<img class="card-img-top" src="http://placehold.it/500x325" alt="">
											<div class="card-body">
												<h4 class="card-title">Card title</h4>
												<p class="card-text">Lorem ipsum dolor sit amet. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
											</div>
											<div class="card-footer">
												<a href="#" class="btn btn-primary">Find Out More!</a>
											</div>
										</div>
									</div>

								</div>
								<!-- /.row -->

			</div>
								
              
            </div>
        </div>
     <!-- slider script -->   
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/slick.min.js') }}"></script>
     <script> 
		$(document).ready(function(){
				 $('.centerSlide').slick({
						centerMode: true,
						centerPadding: '60px',
						slidesToShow: 3,
						slidesToScroll: 1,
						autoplay: true,
						autoplaySpeed: 2000,
						responsive: [
							{
								breakpoint: 768,
								settings: {
									arrows: false,
									centerMode: true,
									centerPadding: '40px',
									slidesToShow: 3
								}
							},
							{
								breakpoint: 480,
								settings: {
									arrows: false,
									centerMode: true,
									centerPadding: '40px',
									slidesToShow: 1
								}
							}
						]
					});
					
		});
     </script>      
	@include('includes.footer')