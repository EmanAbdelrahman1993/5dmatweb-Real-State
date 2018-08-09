<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!---css--->
    {!!Html::style('front-end/css/bootstrap.min.css')!!}
    {!!Html::style('front-end/css/flexslider.css')!!}
    {!!Html::style('front-end/css/style.css')!!}
    {!!Html::style('front-end/css/font-awesome.min.css')!!}

    {!!Html::script('front-end/js/jquery.min.js')!!}
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>



    <title>
	   	   موقع عقارات 
		   |
		   @yield('title')
	</title>
	

    <div class="header">
        <div class="container"> <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-paper-plane"></i> ONE</a>
            <div class="menu pull-left"> <a class="toggleMenu" href="#"><img src="front-end/images/nav_icon.png" alt="" /> </a>
                <ul class="nav" id="nav">
                    <li class="current"><a href="{{url('/home')}}">الرئيسية</a></li>
                    <li><a href="#">من نحن</a></li>
                    <li><a href="#">خدماتنا</a></li>
                    <li><a href="#">اتصل بنا</a></li>

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('عضوية جديدة') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <div class="clear"></div>
                </ul>


            </div>
        </div>
    </div>

</head>
<body style="direction: rtl">

<!---header--->

@yield('content')

<div class="clearfix"></div>


<!---footer--->

    <div class="footer">
        <div class="footer_bottom">
            <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
            <div class="copy">
                <p>Copyright &copy; 2015 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></p>
            </div>
        </div>
    </div>


{!!Html::script('front-end/js/responsive-nav.js')!!}
{!!Html::script('front-end/js/bootstrap.min.js')!!}
{!!Html::script('front-end/js/jquery.flexslider.js')!!}


</body>
</html>
