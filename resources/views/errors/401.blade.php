<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="description" content="sladehq brands the product that you built. We put the clients first to deliver excellent results virtually and phyiscally.">
    <meta name="keywords" content="sladehq slade design branding com uk clients at heart slade hq we brand the product you built">

    <meta property="og:title" content="sladehq">
    <meta property="og:url" content="https://sladehq.uk">
    <meta property="og:description" content="sladehq brands the product that you built. We put the clients first to deliver excellent results virtually and phyiscally.">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="sladehq">
    <meta name="twitter:description" content="sladehq brands the product that you built. We put the clients first to deliver excellent results virtually and phyiscally.">
    <!-- Other -->
    <title>
        Sorry, something went wrong - sladehq
    </title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kalam">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/errors.css">

    <!-- Favicon -->
    <link href="images/branding/favicon.ico" rel="icon" type="image/png" sizes="16x16">

</head>
<body>



<div class="col-md-12 text-center pt-150">
    <H1><img src="images/branding/slade_white.png" alt="sladehq white logo"></H1>
    <H1 class="font-stripe">Sorry, something didn't go quite right!</H1>
    <h2>Error {{ $exception->getStatusCode() }}</h2>
    <h3> <a href="{{ route('home') }}">Return Home <i class="fa fa-arrow-circle-right"></i></a></h3>
</div>



</body>
</html>
