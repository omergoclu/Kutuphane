
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">
    @livewireStyles
</head>
<body class="home-page home-01 ">
	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>
	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/" class="link-to-home"><img src="{{asset('assets/images/logo-top-1.png')}}" alt="mercado"></a>
						</div>

                        @livewire('header-search-component')

						<div class="wrap-icon right-section">
                            <div class="topbar-menu-area">
                                <div class="topbar-menu right-menu">
                                    <ul>
                                        @if(Route::has('login'))
                                            @auth
                                                @if(Auth::user()->utype==='ADM')
                                                    <li class="menu-item menu-item-has-children parent" >
                                                        <a title="Hesabım" href="#">Hesabım({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                        <ul class="submenu curency" >
                                                            <li class="menu-item" >
                                                                <a title="Dasboard" href="{{ route('admin.dashboard') }}">DASBOARD</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{route('admin.kategoris')}}" title="Kategoris">KATEGORİLER</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{route('admin.yazarlars')}}" title="Yazarlars">YAZARLAR</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{route('admin.kitaplars')}}" title="Kitaplars">KİTAPLAR</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{route('admin.kiralananKitaplar')}}" title="kiralananKitaplar">KİRALANAN KİTAPLAR</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{route('admin.oncedenkiralananKitaplar')}}" title="oncedenkiralananKitaplar">ÖNCEDEN KİRALANAN KİTAPLAR</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ÇIKIŞ YAP</a>
                                                            </li>
                                                            <form id="logout-form" action="{{route('logout')}}" method="POST">
                                                                @csrf
                                                            </form>
                                                        </ul>
                                                    </li>
                                                @else
                                                    <li class="menu-item menu-item-has-children parent" >
                                                            <a title="Hesabım" href="/user/profil">Hesabım ({{Auth::user()->name}} {{Auth::user()->lastName}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                            <ul class="submenu curency" >
                                                                <li class="menu-item" >
                                                                    <a title="Dasboard" href="{{ route('user.dashboard') }}">Kiraladığım Kitap</a>
                                                                </li>
                                                                <li class="menu-item" >
                                                                    <a title="Dasboard" href="{{ route('user.profil') }}">Profilim</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Çıkış Yap</a>
                                                            </li>
                                                            <form id="logout-form" action="{{route('logout')}}" method="POST">
                                                                @csrf
                                                            </form>
                                                            </ul>
                                                    </li>
                                                @endif
                                            @else
                                                <li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">GİRİŞ YAP</a></li>
                                                <li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">ÜYE OL</a></li>
                                            @endif
                                        @endif
                                    </ul>
                                </div>
                            </div>
						</div>
					</div>
				</div>
					<div class="primary-nav-section">
                    <div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="/kitaplar" class="link-term mercado-item-title">TÜM KİTAPLAR</a>
								</li>
                                @auth
                                    @if(Auth::user()->utype==='USR')
                                        <li class="menu-item">
                                            <a href="/user/dashboard" class="link-term mercado-item-title">Kiraladığım Kitap</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/user/profil" class="link-term mercado-item-title">Profilim</a>
                                        </li>
                                    @else
                                    <li class="menu-item">
                                            <a href="/admin/kategoris" class="link-term mercado-item-title">Kategoriler</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/admin/yazarlars" class="link-term mercado-item-title">Yazarlar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/admin/kitaplars" class="link-term mercado-item-title">Kitaplar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/admin/kiralananKitaplar" class="link-term mercado-item-title">Kiralanan Kitaplar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/admin/oncedenkiralananKitaplar" class="link-term mercado-item-title">Önceden Kiralanmış Kitaplar</a>
                                        </li>
                                    @endif

                                @else
                                @endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	    {{$slot}}

    <footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">

				</div>
			</div>
			<!--End function info-->

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Tüm Hakları Saklıdır © 2022 Kütüphane</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>

	<script src="{{('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{('assets/js/jquery.flexslider.js')}}"></script>
	<script src="{{('assets/js/chosen.jquery.min.js')}}"></script>
	<script src="{{('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{('assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{('assets/js/jquery.sticky.js')}}"></script>
	<script src="{{('assets/js/functions.js')}}"></script>
    @livewireScripts

</body>
</html>
