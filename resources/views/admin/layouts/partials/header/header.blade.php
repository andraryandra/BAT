
<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/master/') }}" class="logo">
        <div class="card bg-light">
            <img src="{{ asset('asset/gambar/action/samara.png') }}" alt="samara" width="100" class="bg-light">
        </div>
        {{-- PT SATYA AMARTA PRIMA --}}
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Ada Pesan Yang Masuk</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                5
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="../../dist/img/user2-160x160.jpg" class="img-circle"
                                                    alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{-- <img src="{{ url('/gambar/gambar_user.png') }}" class="user-image" alt="User Image"> --}}
                            {{ Auth::user()->users_users_name }}
                        <span class="hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ url('/template') }}/dist/img/user2-160x160.jpg" class="img-circle"
                                alt="User Image">

                            <p>
                             Administrator
                            </p>
                            <p>
                                {{ Auth::user()->users_users_name }}
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-info btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('logout') }}" class="btn btn-danger btn-flat">Logout</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
