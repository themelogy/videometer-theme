<!-- Header -->
<header class="header padding-0 margin-0" id="site-header">
    <div class="container">
        <div class="header-content-wrapper">

            <div class="logo">
                <a href="{{ url(locale()) }}" class="full-block-link"></a>
                <img src="{{ Theme::url("img/logo.png") }}" alt="{{ setting('core::site-name') }}">
            </div>

            <nav id="primary-menu" class="primary-menu">

                <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                    <span class="mob-menu--title">Menu</span>
                    <span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                            <svg width="1000px" height="1000px">
                                <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                <path id="pathE" d="M 300 500 L 700 500"></path>
                                <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                            </svg>
                        </span>
                </a>

                <!-- menu-icon-wrapper -->

                {!! Menu::render('header', \Modules\Theme\Presenters\Videometer\HeaderMenuPresenter::class) !!}
            </nav>

            <ul class="nav-add">

                <li class="search search_main">
                    <a href="#" class="js-open-search">
                        <i class="seoicon-loupe"></i>
                    </a>
                </li>
            </ul>

            <div class="user-menu open-overlay">
                <a href="#" class="user-menu-content  js-open-aside">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</header>
<!-- ... End Header -->

<!-- Right-menu -->
@include('partials.header.right')

<!-- ... End Right-menu -->