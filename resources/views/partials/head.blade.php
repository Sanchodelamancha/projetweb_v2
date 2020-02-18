<html>
<head>
	<title>AGLS</title>

	<meta charset="utf-8">
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/style.css">
    <!--<link rel="stylesheet" href="{{ URL::to('/') }}/css/app.css">-->
     <!---- slider css -->
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<link href="{{ asset('/css/slick-theme_ yorimontolalu.css') }}" rel="stylesheet">
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/slick.min.js') }}"></script>
     <script> 
         
		$(document).ready(function(){
				 $('.centerSlide').slick({
						slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
					});
					
		});
     </script>  	  
</head>