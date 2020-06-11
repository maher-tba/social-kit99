<div class="contener">
    <!-- Navbar -->
    <!-- /.navbar -->
    <nav class="main-header navbar navbar-expand-lg shadow-lg navbar-dark navbar-gray-dark">
        <div class="container">

            @auth
            <!-- User Account Menu -->
            <div class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle  "  data-toggle="dropdown">
                    <!-- The user image in the navbar-->
{{--                    <div class="widget-user-image">--}}
{{--                        <img class="profile-nav-image" src="{{Auth::user()->url}}" alt="User Avatar">--}}
{{--                    </div>--}}
{{--                    <div class="img-fluid mb-2">--}}
{{--                        <img src="https://picsum.photos/400/400"  class="attachment-img" alt="User Image"/>--}}
{{--                    </div>--}}

                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="dropdown-sign-out ">

                            <img src="{{Auth::user()->url}}"  class="dropdown-nav-image" alt="User Image" />


                        <p>
                            {{ Auth::user()->name }} - Web Developer
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div>
                            <a href="{{ url('/logout') }}" class="btn btn-default btn-flat float-right btn-block " onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" >
                                <i class="fa fa-fw fa-power-off"></i>
                                تسجيل خروج
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endauth

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <!-- Left navbar links -->
                <ul class="navbar-nav mr-auto">
                    <!-- Notifications Dropdown Menu -->
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-calendar-check mr-1"></i>
                            <span class="badge badge-warning navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <i class="fa fa-twitter mr-2"></i> 4 تغريدة مجدولة

                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fa fa-facebook mr-2"></i>2 منشور مجدول

                            </a>
                        </div>
                    </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">تسجيل دخول</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">تسجيل</a>
                        </li>
                    @endguest
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->

                </ul>
            </div>
                <div class="logo"> <b class="text-blue">سوشل </b><b> كيت </b> </div>
        </div>
    </nav>

</div>
