<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shoes Shop | @yield('title')</title>

	<meta name="description" content="@yield('page_description', $page_description ?? '')"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
		$(function(){
			$(".icon-1").click(function(){
			  $(".input").toggleClass("active");
			})
		});
	</script>

	{{-- Global Theme Styles (used by all pages) --}}
	@if(!empty(config('dz.public.global.css')))
		@foreach(config('dz.public.global.css') as $style)
			<link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
		@endforeach
	@endif
</head>
<body>

<div class="header" style="height: 100px;">

    <div class="nav-header" style="height: 100px;">
       <a href="/" title="Shoes Shop"><img class="logo_header" src="images/logo1.png" alt="" srcset=""></a>
    </div>

            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">

                        </div>
                        <ul class="nav-menu">
                            <!--<li class="nav-item">
                                <div>
                                    <form action="search" method="GET" role="search">
                                        <div class="input-group search-area d-lg-inline-flex d-none mr-5">
                                            <input type="text" class="form-control" name="term" placeholder="Pesquisar produto" id="term">
                                            <div class="input-group-append">
                                                <button class="input-group-text" type="submit" title="Search projects">
                                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z" fill="#A4A4A4"></path></svg>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>-->
                            <li class="nav-item">
                                <img class="img" src="./images/United-Kingdom.hash-b0a46ea66d0654696a07257d9bbbca13.png" alt="">
                            </li>
                            <li class="nav-item">
                                <a href="/wishlist" class="nav-link"><i class="far fa-heart"></i>     Favourites</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-gift"></i>     Gift Card</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-map-marker-alt"></i>     Stores</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-question-circle"></i>     Help</a>
                            </li>

                            <li class="nav-item dropdown">

                                @if (!Auth::user())
                                    <a href="{!! url('/page-login'); !!}" class="dropdown-item ai-icon login">
                                        <i class="fas fa-sign-in-alt"></i>
                                        <span class="ml-2">Login </span>
                                    </a>
                                @endif

                                @role('admin')
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ optional(Auth::user())->name }}
                                </a>
                                @endrole

                                @role('regular')
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ optional(Auth::user())->name }}
                                </a>
                                @endrole

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    @role('admin')
                                        <a class="dropdown-item" href="{{ route('products.index') }}">{{ __('Manage Products') }}</a>
                                        <a class="dropdown-item" href="{{ route('products.create') }}">{{ __('Add Product') }}</a>
                                        <a class="dropdown-item" href="{{ route('user.index') }}">{{ __('Users List') }}</a>
                                    @endrole

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item">
                                <form action="search" method="GET" role="search" id="demo-2">
                                    <input type="search" placeholder="Pesquisar" name="term" id="term">
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div>
            <br><br><br><br>
            @yield('content')
        </div>
    </div>

    @include('elements.footer')

    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/holder.min.js"></script>

    @yield('footer-scripts')

    <script src="{{ asset('js/new.js') }}"></script>
</body>
</html>

