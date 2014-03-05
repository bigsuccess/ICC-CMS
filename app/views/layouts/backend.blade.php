<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Andy Pham, Lại Đạo">
        <meta name="keyword" content="Administrator">
        <title>Administrator</title>
        {{ Basset::show('backend.css') }}
    </head>

    <body>
        <section id="container" class="">
            <!--header start-->
            <header class="header white-bg">
                <div class="sidebar-toggle-box">
                    <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
                </div>
                <!--logo start-->
                <a href="{{ url('nevergiveup') }}" class="logo" >Flat<span>lab</span></a>
                <!--logo end-->
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu">
                        <li>
                            <input type="text" class="form-control search" placeholder="Search">
                        </li>
                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="" src="{{ Asset('assets/img/avatar1_small.jpg') }}">
                                <span class="username">{{ Auth::user()->username }}</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <div class="log-arrow-up"></div>
                                <li><a href="{{ url('/nevergiveup/users/change-password') }}"><i class=" icon-suitcase"></i>Đổi mật khẩu</a></li>
                                <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                                <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                                <li><a href="{{ url('/nevergiveup/users/logout') }}"><i class="icon-key"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                </div>
            </header>
            <!--header end-->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu">
                        <li {{ active() }}>
                            <a href="{{ url('nevergiveup') }}">
                                <i class="icon-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-cogs"></i>
                                <span>Quản lý tài khoản</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="{{ url('nevergiveup/users') }}">Tài khoản</a></li>
                                <li><a  href="{{ url('nevergiveup/users/create') }}">Thêm tài khoản</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-cogs"></i>
                                <span>Quản lý blog</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a  href="{{ url('nevergiveup/categories') }}">Chuyên mục</a></li>
                                <li><a class="" href="{{ url('nevergiveup/categories/create') }}">Thêm chuyên mục</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            @include('notifications.backend')
                        </div>
                    </div>
                    @yield('content')
                </section>
            </section>
            <!--main content end-->
        </section>
        <!-- js placed at the end of the document so the pages load faster -->
        {{ Basset::show('backend.js') }}
    </body>
</html>