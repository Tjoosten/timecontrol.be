<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Time control | Coming Soon</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow" />    
    <meta name="description" content="{{Lang::get('header.description')}}">
    <meta name="keywords" content="{{Lang::get('header.keywords')}}">    
    <meta name="author" content="">

    <link rel="shortcut icon" href="favicon.ico">

    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <link rel="stylesheet" href="{{ asset('js/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/maintenance.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/blue.css') }}" id="style_color">    
</head> 

<body class="coming-soon-page">
<div class="coming-soon-border"></div>
<div class="coming-soon-bg-cover"></div>

<div class="container cooming-soon-content">
    <!-- Coming Soon Content -->
    <div class="row">
        <div class="col-md-12 coming-soon">
            <h1>{{Lang::get('offline.title')}}</h1>
            <p>{{Lang::get('offline.soon')}}</p><br>
        </div>
    </div>

</div>

<div class="container sticky-footer">
    <p class="copyright-space">
        2016 &copy; iDevelopment. ALL Rights Reserved. 
    </p>  
</div>

<script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery/jquery-migrate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script> 

<script type="text/javascript" src="{{ asset('js/backstretch/jquery.backstretch.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/page_coming_soon.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        PageComingSoon.initPageComingSoon();
    });

    $.backstretch([
      "img/bg/11.jpg",
      "img/bg/17.jpg",
      "img/bg/30.jpg"
      ], {
        fade: 1000,
        duration: 7000
    });

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53453665-3', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html> 