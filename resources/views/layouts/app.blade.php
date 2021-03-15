<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Highway - Free CSS Template</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontAwesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/light-box.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

</head>

<body>
    @include('layouts.nav')

    @yield('content')


    <footer>
        <div class="container-fluid">
            <div class="col-md-12"></div>
        </div>
    </footer>

    <!-- Modal button -->
{{--    <div class="popup-icon">--}}
{{--    @guest--}}
{{--        <button id="modBtn" class="modal-btn"><img src="img/login.png" alt=""></button>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--        </li>--}}
{{--        @if (Route::has('register'))--}}
{{--             <button id="modBtn" class="modal-btn"><img src="img/registration.png" alt=""></button>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--            </li>--}}
{{--        @endif--}}
{{--    @else--}}
{{--        <li class="nav-item dropdown">--}}
{{--            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                {{ Auth::user()->name }}--}}
{{--            </a>--}}

{{--            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                   onclick="event.preventDefault();--}}
{{--                                                         document.getElementById('logout-form').submit();">--}}
{{--                    {{ __('Logout') }}--}}
{{--                </a>--}}

{{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                    @csrf--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    @endguest--}}
{{--    </div>--}}

    @include('modal.registration')


    <section class="overlay-menu">
        <div class="container">
            <div class="row">
                <div class="main-menu">
                    <ul>
                        <li>
                            <a href="index.html">Home - Full-width</a>
                        </li>
                        <li>
                            <a href="masonry.html">Home - Masonry</a>
                        </li>
                        <li>
                            <a href="grid.html">Home - Small-width</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="blog.html">Blog Entries</a>
                        </li>
                        <li>
                            <a href="single-post.html">Single Post</a>
                        </li>
                    </ul>
                    <p>We create awesome templates for you.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="/js/vendor/bootstrap.min.js"></script>

    <script src="/js/plugins.js"></script>
    <script src="/js/main.js"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
