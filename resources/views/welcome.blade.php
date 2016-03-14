<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Time Control | Time tracking and workforce management</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ Lang::get('header.description') }}">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">    
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/header-v6.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css"> 
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sky-forms-pro/skyforms/css/sky-forms.css')}}">
    <link rel="stylesheet" href="{{ asset('css/sky-forms-pro/skyforms/custom/custom-sky-forms.css')}}">    
    
    <link rel="stylesheet" href="{{ asset('css/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-dark.css') }}">
</head>
<body>

<div class="wrapper">
 <div class="header-v6 header-classic-dark">
        <!-- Navbar -->
        <div class="navbar mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Navbar Brand -->
                    <div class="navbar-brand">
                        <a href="{{url('')}}">
                            <img class="default-logo" src="" alt="Time control">
                        </a>
                    </div>
                    <!-- ENd Navbar Brand -->
               </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav">
                            <!-- Home -->
                            <li class="active"><a href="{{url('')}}">{{ Lang::get('header.home')}}</a></li>
                            <li><a href="{{url('features')}}">{{ Lang::get('header.features')}}</a></li>
                            <li><a href="{{url('services')}}">{{ Lang::get('header.services')}}</a></li>
                            <li><a href="{{url('download')}}">{{ Lang::get('header.download')}}</a></li>                            
                            <li><a href="{{url('demo')}}">{{ Lang::get('header.demo')}}</a></li>                          
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">{{ Lang::get('header.support')}}</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">{{ Lang::get('header.chat')}}</a></li>
                            <li><a href="#">{{ Lang::get('header.docs')}}</a></li>
                            <li><a href="#">{{ Lang::get('header.forum')}}</a></li>
                        </ul>
                            </li>
                            <li><a href="{{ url('contact') }}">{{ Lang::get('header.contact')}}</a></li>                            

                      </ul>
                    </div>
                </div><!--/navbar-collapse-->
            </div>
        </div>
        <!-- End Navbar -->
    </div>

 @yield('breakcrumbs')

        

     @yield('content')

    <div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                            <div class="headline"><h2>Time control</h2></div>
                            <div class="clearfix">&nbsp;</div>
                        <p>The best open source time tracking and workforce management system.</p>
                    </div><!--/col-md-3-->
                    <!-- End About -->

                    <!-- Latest -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="posts">
                            <div class="headline"><h2>General</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">Features</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Services</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Demo</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Support</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                        </div>
                    </div><!--/col-md-3-->
                    <!-- End Latest -->

                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>Useful Links</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->

                    <!-- Address -->
                    <div class="col-md-3 col-sm-6">
                        <div class="headline"><h2>Newsletter</h2></div>
                        <p><strong>Subscribe</strong> to our newsletter and stay up to date with the latest news and deals!</p><br>

                        <!-- Form Group -->
                        <div class="input-group margin-bottom-50">
                            <input class="form-control" type="email" placeholder="Enter email">
                            <div class="input-group-btn">
                                <button type="button" class="btn-u input-btn">Subscribe</button>
                            </div>
                        </div>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div>
        </div><!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            2016 &copy; iDevelopment All Rights Reserved.
                           <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>

                    <!-- Social Links -->
                    <div class="col-md-6">
                        <ul class="footer-socials list-inline">
                            <li>
                                <a href="#" class="tooltips" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/idevelopment/timecontrol" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Github">
                                    <i class="fa fa-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social Links -->
                </div>
            </div>
        </div><!--/copyright-->
    </div>

<script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/js/bootstrap.min.js')}}"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53453665-3', 'auto');
  ga('send', 'pageview');

</script>
</body>

</html>