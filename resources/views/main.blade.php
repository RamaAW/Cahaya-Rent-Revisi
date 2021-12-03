<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cahaya Rent | Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="/img/logo2.png">
    <link rel="shortcut icon" href="/img/logo2.png">
    <link rel="stylesheet" href="/style/assets/css/normalize.css">
    <link rel="stylesheet" href="/style/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/style/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/style/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="/style/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="/style/assets/scss/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    
    

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="">Cahaya Rent</a>
                <a class="navbar-brand hidden" href="">C</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/about"> <i class="menu-icon fas fa-address-card"></i>About Us</a>
                    </li>
                    <li>
                        <a href="/produk"> <i class="menu-icon fas fa-laptop"></i>Product</a>
                    </li>
                    <li>
                        <a href="/dok"> <i class="menu-icon far fa-image"></i>Dokumentasi</a>
                    </li>
                    <li>
                        <a href="/maps"> <i class="menu-icon fas fa-map-marked-alt"></i>Alamat</a>
                    </li>
                    <li>
                        <a href="/wa"> <i class="menu-icon fab fa-whatsapp"></i>WhatsApp</a>
                    </li>
                    <li>
                        <a href="/review"> <i class="menu-icon fas fa-book"></i>Reviews</a>
                    </li>
                    <li>
                        <a href="/faq"> <i class="menu-icon far fa-question-circle"></i>FAQ</a>
                    </li>
                    <li>
                        <a href="/email"> <i class="menu-icon fas fa-envelope-open-text"></i>Email</a>
                    </li>
                    <li>
                        <a href="/detail"> <i class="menu-icon fas fa-info-circle"></i>Detail Produk</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <!-- <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div> -->
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                   
                        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="/style/images/admin.jpg">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="/"><i class="fa fa-power -off"></i>Logout</a>
                        </div> -->
                    </div>






                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-id"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-id"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-jp"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->

        @yield('breadcrumbs')

        @yield('content')

        

    </div>    
    <script src="/style/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="/style/assets/js/popper.min.js"></script>
    <script src="/style/assets/js/plugins.js"></script>
    <script src="/style/assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/003603851d.js" crossorigin="anonymous"></script>

</body>
</html>