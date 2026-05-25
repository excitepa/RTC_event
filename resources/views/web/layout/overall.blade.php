<!DOCTYPE html>
 <html lang="en">
<head>
<meta charset="utf-8">
<title>{{ env('APP_NAME') }} - @yield('page_title') </title>
<meta name="keywords" content="@yield('keywords')" />
<meta name="description" content="@yield('description')">
<meta name="author" content="">
<!-- Stylesheets -->
<link href="/public/css/bootstrap.css" rel="stylesheet">
<link href="/public/css/style.css" rel="stylesheet">
<link href="/public/css/styles.css" rel="stylesheet">
<link href="/public/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

<!--Color Switcher Mockup-->
<link href="/public/css/color-switcher-design.css" rel="stylesheet">

<link rel="shortcut icon" href="/public/images/logo1.png" type="image/x-icon">
<link rel="icon" href="/public/images/logo1.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>

<meta name="facebook-domain-verification" content="fhc6hxujz417na5cda0hggqqh5u2a5" />

    <script>
        fbq('init', '1860165951518831');
        fbq('track', 'PageView');\
    </script>

    <!-- Meta Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1860165951518831');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1860165951518831&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->

<!--<script src="https://web.cmp.usercentrics.eu/modules/autoblocker.js"></script>-->
<!--<script id="usercentrics-cmp" src="https://web.cmp.usercentrics.eu/ui/loader.js" data-settings-id="hJqxo0X8nn_gi-" async></script>-->

</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-08JG4MPPGM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-08JG4MPPGM');
</script>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <!--<div class="preloader"></div>-->
 	<!-- Header span -->

    <!-- Header Span -->
    <span class="header-span"></span>

    @include('web.includes.header')
    
    @include('web.includes.errors')

    @yield('content')
    
    @include('cookie-consent::index')
    @include('web.includes.footer')

</div>
<!--End pagewrapper-->

   @include('web.includes.palate_popup')

   @include('web.includes.js')
</body>
</html>
