<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="{{ route('admin') }}">
                        <img src="{{ asset('assets/images/icon/logo-white.png')}}" alt="CoolAdmin" />
                    </a>
                </div>
                <div class="header__navbar">
                    <ul class="list-unstyled">
                        <li class="has-sub">
                            <a href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboards
                                <span class="bot-line"></span>
                            </a>
                            <ul class="header3-sub-list list-unstyled">
                                <li>
                                    <a href="{{ route('admin') }}">Statistics</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin_users') }}">Manage users</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin_posts') }}">Manage posts</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin_cats') }}">Manage categories</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin_comments') }}">Manage comments</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="#">
                                <i class="fas fa-copy"></i>
                                <span class="bot-line"></span>Pages</a>
                            <ul class="header3-sub-list list-unstyled">
                                <li>
                                    <a href="{{ route('admin_user_create') }}">Register new user</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin_post_create') }}">Add new post</a>
                                </li>
                                <li>
                                    <a href="{{ route('cat_create') }}">Add new category</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="header__tool">
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="{{ asset('assets/images/icon/avatar.png')}}" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{ auth()->user()->name }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{ asset('assets/images/icon/avatar.png')}}" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ auth()->user()->name }}</a>
                                        </h5>
                                        <span class="email">{{ auth()->user()->email }}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{ route('admin_details') }}">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="{{ route('users.posts', auth()->user()) }}">
                                            <i class="zmdi zmdi-assignment-o"></i>User Dashboard</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a>
                                            <button type="submit" class="nav-link lg-btn">
                                                <i class="zmdi zmdi-power"></i>Logout
                                            </button>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->

    <!-- HEADER MOBILE-->
    <header class="header-mobile header-mobile-2 d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="{{ asset('assets/images/icon/logo-white.png')}}" alt="CoolAdmin" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboards</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="{{ route('admin') }}">Statistics</a>
                            </li>
                            <li>
                                <a href="{{ route('admin_users') }}">Manage users</a>
                            </li>
                            <li>
                                <a href="{{ route('admin_posts') }}">Manage posts</a>
                            </li>
                            <li>
                                <a href="{{ route('admin_cats') }}">Manage categories</a>
                            </li>
                            <li>
                                <a href="{{ route('admin_comments') }}">Manage comments</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Pages</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="{{ route('admin_user_create') }}">Register new user</a>
                            </li>
                            <li>
                                <a href="{{ route('admin_post_create') }}">Add new post</a>
                            </li>
                            <li>
                                <a href="{{ route('cat_create') }}">Add new category</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="sub-header-mobile-2 d-block d-lg-none">
        <div class="header__tool">
            <div class="account-wrap">
                <div class="account-item account-item--style2 clearfix js-item-menu">
                    <div class="image">
                        <img src="{{ asset('assets/images/icon/avatar.png')}}" alt="John Doe" />
                    </div>
                    <div class="content">
                        <a class="js-acc-btn" href="#">{{ auth()->user()->name }}</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                            <div class="image">
                                <a href="#">
                                    <img src="{{ asset('assets/images/icon/avatar.png')}}" alt="John Doe" />
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="name">
                                    <a href="#">{{ auth()->user()->name }}</a>
                                </h5>
                                <span class="email">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="{{ route('admin_details') }}">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="{{ route('users.posts', auth()->user()) }}">
                                    <i class="zmdi zmdi-assignment-o"></i>User Dashboard</a>
                            </div>
                        </div>
                        <div class="account-dropdown__footer">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a>
                                    <button type="submit" class="nav-link lg-btn">
                                        <i class="zmdi zmdi-power"></i>Logout
                                    </button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER MOBILE -->

    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
        <!-- BREADCRUMB-->
        <!-- END BREADCRUMB-->

        <!-- WELCOME-->
        <section class="welcome p-t-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title-4">Welcome back
                            <span>{{ auth()->user()->username }}!</span>
                        </h1>
                        <hr class="line-seprate">
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->