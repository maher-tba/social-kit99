<div class="settings-box hide-settings">
    <div class="setting-content chiller-theme toggled">

        {{-- start nav --}}
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-right image">
                        <img src="{{Auth::user()->url}}" class="sidebar-user-img" alt="User Image" />

                    </div>
                    <div class="pull-right info">
                        <span style="color: rgba(255,255,255,.2);">{{ Auth::user()->name }}</span>
                        <!-- Status -->
                        <p><a href="#"><i class="fa fa-circle text-success"></i> Online</a></p>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>الاعدادات</span>
                        </li>
                        <li >
                            <a href="#">
                                <i class="fas fa-home"></i>
                                <span>الصفحة الرئيسية</span>
                            </a>

                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-users-cog"></i>
                                <span>الاشتراكات</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li >
                                        <a  href="#">فيسبوك</a>
                                    </li>
                                    <li>
                                        <a href="#">اضف حساب تويتر</a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- sidebar-menu  -->
            </div>

        </nav>
        {{-- end nav --}}

    </div>
</div>

