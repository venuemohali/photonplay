<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper" style="padding: 15px 30px;"><a href="{{route('admin.dashboard') }}">Logo</a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper" style="padding: 15px 30px;"><a href="{{route('admin.dashboard') }}">Logo</a></div>
        {{-- <div class="logo-wrapper" style="padding: 15px 30px;"><a href="{{ url('/dashboard') }}"><img class="img-fluid for-light" src="{{ asset('assets/logo/logo-black.png') }}" alt=""><img class="img-fluid for-dark" src="{{ asset('assets/logo/logo-white.png') }}" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper" style="padding: 15px 30px;"><a href="{{route('admin.dashboard') }}"><img class="img-fluid" src="{{ asset('assets/logo/fav.png') }}" alt=""></a></div> --}}
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{route('admin.dashboard') }}">
                            <img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="">
                        </a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/dashboard','admin-dashboard') ? 'active':''}}" href="{{route('admin.dashboard') }}">
                            <i data-feather="home"> </i><span>Dashboard</span>
                        </a>
                    </li>
                    @if(Auth::user()->role_as == 'Admin')

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/manage-employees','edit-employee*','add-employee') ? 'active':''}}" href="{{ url('admin/manage-employees') }}">
                            <i data-feather="users"></i>
                            <span>Manage Users</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/category') ? 'active':''}}" href="{{ url('admin/category') }}">
                            <i data-feather="trello"> </i>
                            <span>Manage Categories</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/specilization') ? 'active':''}}" href="{{ url('admin/specilization') }}">
                            <i data-feather="trello"> </i>
                            <span>Manage Specilization</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/product') ? 'active':''}}" href="{{ route('admin.product.index') }}">
                            <i data-feather="shopping-bag"></i>
                            <span>Manage Products</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav ">
                            <i data-feather="shopping-cart"></i>
                            <span>Manage Orders</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav ">
                            <i data-feather="dollar-sign"> </i>
                            <span>Payment</span>
                        </a>
                    </li>

                    <li class="sidebar-list">

                        <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/cms-home','cms-home') ? 'active':''}}" href="{{route('admin.cmshomepage') }}">
                            <i data-feather="file-minus"></i>
                            <span>CMS</span>
                        </a>

                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav ">
                            <i data-feather="mail"></i>
                            <span>Email Templates</span>
                        </a>
                    </li>

                        <li class="sidebar-list">

                            <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/notifications','notifications') ? 'active':''}}" href="{{route('admin.notifications_form') }}">
                                <i data-feather="mail"></i>
                                <span>Notifications</span>
                            </a>

                        </li>


                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/settings','settings') ? 'active':''}}" href="{{route('admin.setting-home-page') }}">
                            <i data-feather="settings"></i>
                            <span>Settings</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/db-backup','db-backup') ? 'active':''}}" href="{{route('admin.dbbackupform') }}">
                                <i data-feather="database"></i>
                                <span>DB Backup</span>
                            </a>
                    </li>

                    @endif


                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
