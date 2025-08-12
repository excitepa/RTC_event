<!DOCTYPE html>

 <html lang="en">

<head>

<meta charset="utf-8">

<title>{{ env('APP_NAM @yield('page_title') </title>

<!-- Stylesheets -->

<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<link href="{{ asset('cscss') }}" rel="stylesheet">

<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}



<!--Color Switcher Mockup-->

<link href="{{ asset('css/color-switcher-design.css') }}" rel="stylesheet">



<link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">

<link rel="icon" href="images/logo1.png" type="image/x-icon">



<!-- Responsive -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->



</head>



<body>



<div class="page-wrapper">



    <!-- Preloader -->

    <!-- <div class="preloader"></div> -->

 	<!-- Header span -->



    <!-- Header Span -->

    <span class="header-span"></span>



    @include('web.includes.header')

    

    @include('web.includes.errors')



    @yield('content')



    @include('web.includes.footer')



</div>

<!--End pagewrapper-->



   @include('web.includes.palate_popup')



   @include('web.includes.js')

</body>

</html>

