<!DOCTYPE html>
<html lang="zxx" class="js">
    <head>
        <base href="/">
        <meta charset="utf-8">
        <meta name="author">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description">
        <!-- Fav Icon  -->
        <link rel="shortcut icon" href="{{ asset('assets/images/logo.black.png') }}">
        <!-- Page Title  -->
        <title>{{ config('app.name', 'Softlife') }} | Dashboard</title>
        <!-- StyleSheets  -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/dashlite.css') }}">
        <link id="skin-default" rel="stylesheet" href="{{ asset('backend/assets/css/theme.css') }}">
    </head>

    <body class="nk-body npc-default">
        <div class="nk-app-root">
            <div class="nk-main ">
                <div class="nk-wrap">
                    <!-- main header @s -->
                    <div class="nk-header nk-header-fixed is-dark">
                        <div class="container-fluid">
                            <div class="nk-header-wrap">
                                <div class="nk-menu-trigger d-xl-none ml-n1">
                                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                                </div>
                                <div class="nk-header-app-name">
                                    <div class="nk-header-app-logo">
                                        <em class="icon ni ni-dashlite bg-purple-dim"></em>
                                    </div>
                                    <div class="nk-header-app-info">
                                        <span class="sub-text">{{ config('app.name') }}</span>
                                        <span class="lead-text">Dashboard</span>
                                    </div>
                                </div>

                                <div class="nk-header-tools">
                                    <ul class="nk-quick-nav">
                                        <li class="dropdown notification-dropdown">
                                            <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                                <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                                <div class="dropdown-head">
                                                    <span class="sub-title nk-dropdown-title">Notifications</span>
                                                    <a href="#">Mark All as Read</a>
                                                </div>
                                                <div class="dropdown-body">

                                                </div><!-- .nk-dropdown-body -->
                                                <div class="dropdown-foot center">
                                                    <a href="#">View All</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="dropdown language-dropdown d-none d-sm-block mr-n1">
                                            <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                                <div class="quick-icon border border-light">
                                                    <img class="icon" src="{{ asset('backend/images/flags/english-sq.png') }}" alt="">
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-s1">
                                                <ul class="language-list">
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="{{ asset('backend/images/flags/english.png') }}" alt="" class="language-flag">
                                                            <span class="language-name">English</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li><!-- .dropdown -->
                                        <li class="dropdown user-dropdown">
                                            <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                                <div class="user-toggle">
                                                    <div class="user-avatar sm">
                                                        <em class="icon ni ni-user-alt"></em>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                    <div class="user-card">
                                                        <div class="user-avatar">
                                                            <span>Avatar</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="lead-text">User Name Here</span>
                                                            <span class="sub-text">user@email.com</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown-inner">
                                                    <ul class="link-list">
                                                        <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                        <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                        <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="dropdown-inner">
                                                    <ul class="link-list">
                                                        <li>
                                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                <em class="icon ni ni-signout"></em><span>Sign out</span>
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- main header @e -->

                    <div class="nk-sidebar" data-content="sidebarMenu">
                        <div class="nk-sidebar-inner" data-simplebar>
                            <ul class="nk-menu nk-menu-md">
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Dashboard</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item">
                                    <a href="blank.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="blank.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-speed"></em></span>
                                        <span class="nk-menu-text">Home Page</span>
                                    </a>
                                </li><!-- .nk-menu-item -->

                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Administrative Pages</h6>
                                </li><!-- .nk-menu-heading -->

                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text">User Management</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="users.html" class="nk-menu-link"><span class="nk-menu-text">All users</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->

                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                                        <span class="nk-menu-text">Tours</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="tours.html" class="nk-menu-link"><span class="nk-menu-text">All Tours </span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="add new tour.html" class="nk-menu-link"><span class="nk-menu-text">Add New Tour</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->

                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-home"></em></span>
                                        <span class="nk-menu-text">Hotels</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="hotels.html" class="nk-menu-link"><span class="nk-menu-text">All Hotels </span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->

                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-ticket"></em></span>
                                        <span class="nk-menu-text">Events</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="events.html" class="nk-menu-link"><span class="nk-menu-text">All Events </span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->


                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Misc Pages</h6>
                                </li><!-- .nk-menu-heading -->

                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                        <span class="nk-menu-text">Report Pages</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="html/pages/errors/404-classic.html" class="nk-menu-link"><span class="nk-menu-text">Reports Classic</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                            </ul><!-- .nk-menu -->
                        </div>
                    </div>

                    <div class="nk-content ">
                        <div class="container-fluid">
                            <div class="nk-content-inner">
                                <div class="nk-content-body">

                                    @yield('body')

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- JavaScript -->
        <script src="{{ asset('backend/assets/js/bundle.js') }}"></script>
        <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
        <script src="{{ asset('backend/assets/js/libs/datatable-btns.js') }}"></script>
    </body>
</html>
