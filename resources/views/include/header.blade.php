<!DOCTYPE html>
<html lang="en">
	<head>
	    <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title>mahmud zeglam</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="{{URL::asset('assets/logo/favicon.png')}}"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}">

		<!--flat icon css-->
		<link rel="stylesheet" href="{{URL::asset('assets/css/flaticon.css')}}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{URL::asset('assets/css/animate.css')}}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/css/owl.theme.default.min.css')}}">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="{{URL::asset('aassets/css/bootsnav.css')}}" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  

	</head>
    <body class="body">

	@yield('content')