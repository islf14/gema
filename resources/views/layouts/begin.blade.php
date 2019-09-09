<!DOCTYPE html>
<html>
<head>
  <title>  @yield('title') </title>
   <!--Made with love by Mutiullah Samim -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	 
	{{-- <link rel="stylesheet" href="{{asset('bower_components/bootstrap-4.3.1/css/bootstrap.css')}}"> --}}

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="{{asset('bower_components/bootstrap-stackpath/bootstrap.min.css')}}">
	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	

	{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}

	  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dist/img/computer2.png')}}">

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">

    @yield('form')

	</div>
</div>
{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}
{{-- <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script> --}}
{{-- <script src="{{asset('bower_components/bootstrap-4.3.1/js/bootstrap.min.js')}}"></script> --}}
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<script src="{{asset('bower_components/jquery/dist/jquery-3.4.1.js')}}"></script>
</body>
</html>