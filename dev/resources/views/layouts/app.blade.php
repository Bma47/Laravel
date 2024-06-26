
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Lang" content="nl">
    <meta name="author" content="J.J. Strootman">
    <meta http-equiv="Reply-to" content="noreply@forum.ao-alfa.nl">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="creation-date" content="16/01/2018">
    <meta name="revisit-after" content="60 days">
    <meta name="google" content="nostranslate">
    <meta name="robots" content="noodp, noarchive">

    <title>
        @yield('pagetitle') | SD Forum
    </title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('img/apple-touch-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-touch-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/apple-touch-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon-180x180.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{asset('img/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('img/favicon-96x96.png')}}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{asset('img/android-chrome-192x192.png')}}" sizes="192x192">
    <meta name="msapplication-square70x70logo" content="img/smalltile.png">
    <meta name="msapplication-square150x150logo" content="img/mediumtile.png">
    <meta name="msapplication-wide310x150logo" content="img/widetile.png">
    <meta name="msapplication-square310x310logo" content="img/largetile.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href=" {{asset('js/ckeditor/plugins/prism/lib/prism/prism_patched.min.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/forum.css')}}">

    @yield('styles')
</head>


<body>
<!-- BEGIN MENU -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper white">
            <div class="container">
                <a href="{{ route('home.index')}}" class="brand-logo"><img alt="" title="" src="{{asset('img/weblogo.png')}}" class="responsive-img">
                    <span class="forum-title">Forum</span>
                </a>
                <ul id="theme-menu" class="dropdown-content">
                    @if(Auth::check())
                        <li><a href="">Profiel</a></li>
                        @if(auth()->user()->isAdmin())
                            <li><a href="">Beheer</a></li>
                        @endif
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <li> <button class="btn1" type="submit">Logout</button></li>
                        </form>
                    @endif

                </ul>
                <ul id="nav-mobile" class="right hide-on-med-and-down">

                    <li><a href="{{ route('blog.index')}}">Home</a></li>
                    @if(Auth::check())
                        <li><a href="{{ route('blog.create')}}">Create</a></li>
                    @endif
                    @guest()
                        <li><a href="{{ route('register')}}">Registreren</a></li>
                        <li><a href="{{ route('login')}}">Aanmelden</a></li>
                    @endguest

                    @auth()
                        <li>
                            <a href="/" data-activates="theme-menu" class="dropdown-button">
                                <img src="http://www.gravatar.com/avatar/fc7d81525f7040b7e34b073f0218084d?s=20" alt="" class="square">
                                {{ auth()->user()->name }} &dtrif;
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- EINDE MENU -->

@yield('home-page')
@yield('content-login')
@yield('content-register')
@yield('content-home')
@yield('content-create')
@yield('content-topic')
@yield('çontent-show')
@yield('content-blog')



<!-- BEGIN FOOTER -->
<footer class="page-footer white">
    <div class="container">
        <div class="row last-row">
            <div class="col s4">
                <p>Copyright &copy; by Alfa-college AO, All rights reserved</p>
            </div>
            <div class="col s8">
                <div class="footer-nav white">
                    <ul class="right">
                        <li><a href="">Regels</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Disclaimer</a></li>
                        <li><a href="">Privacy verklaring</a></li>
                        <li><a href="">Cookie-beleid</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- EINDE FOOTER -->

<script type="text/javascript" src="{{asset('js/ckeditor/plugins/prism/lib/prism/prism_patched.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('js/forum.js')}}"></script>
</body>
</html>
