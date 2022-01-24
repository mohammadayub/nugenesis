<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nugenesis | Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="{{asset('/images/favicon.ico')}}">

	<link rel="stylesheet" href="{{asset('/css/styles.css')}}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link media='all' href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Slider -->
	<link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">
</head>
<body>
    @yield('content')

    @include('footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="{{asset('/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('/js/main.js')}}"></script>

</body>
</html>
