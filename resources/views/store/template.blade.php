<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Floreria Life')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="bower_components/materialize/dist/css/materialize.min.css">
  	<link rel="stylesheet" href="css/products.css">

</head>
<body>
	@include('store.partials.nav')

	@yield('content')

	@include('store.partials.footer')
</body>
 <!-- Compiled and minified JavaScript -->
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/materialize/dist/js/materialize.min.js"></script>
	<script src='js/nav.js'></script>
</html>