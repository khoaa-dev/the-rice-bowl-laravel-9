<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-cutlery" style="
                padding: 10px 12px !important;
                border-radius: 50% !important;
                margin-right: 3px !important"></i>
                <span>The
                    Rice Bowl</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('public/front-end/images/' . Auth::user()->avatarUrl) }}" alt="..."
                    class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span style="font-style: italic !important; font-size: 16px !important;">Xin chào,</span>
                <h2 font-size: 16px !important;>{{Auth::user()->fullName}}</h2>
            </div>
        </div>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-home"></i> Thống kê<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('admin/home') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-book"></i> Thông tin nhà hàng <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('admin/information') }}">Thông tin</a></li>
                        </ul>
                    </li>

                    <li>
                        <a><i class="fa fa-life-ring"></i> Dịch vụ <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('service.index')}}">Danh sách dịch vụ</a></li>
                        </ul>
                    </li>

                    <li>
                        <a><i class="fa fa-cutlery"></i> Món ăn <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ URL::to('/admin/food-management') }}">Quản lý món ăn</a></li>
                        </ul>
                    </li>

                    <li>
                        <a><i class="fa fa-building-o"></i> Thực đơn <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ URL::to('/admin/menu-management') }}">Quản lý thực đơn</a></li>
                        </ul>
                    </li>

                    <li>
                        <a><i class=" fa fa-cube"></i> Đơn hàng <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('getListOrder') }}">Danh sách đơn hàng</a></li>
                        </ul>
                    </li>

                    <li>
                        <a><i class="fa fa-group"></i> Thành viên <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{URL::to('/admin/accounts')}}">Quản lý thành viên</a></li>
                        </ul>
                    </li>
                    <div style="display: none">
                        <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu" style="display: none">
                                <li><a href="{{ url('admin/form') }}" class="nav-link">Form</a></li>
                                <li><a href="{{ url('admin/form-advanced') }}" class="nav-link">Advanced
                                        Components</a>
                                </li>
                                <li><a href="{{ url('admin/form-validation') }}" class="nav-link">Form
                                        Validation</a></li>
                                <li><a href="{{ url('admin/form-wizards') }}" class="nav-link">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu" style="display: none">
                                <li><a href="{{ url('admin/icons') }}" class="nav-link">Icons</a></li>
                                <li><a href="{{ url('admin/glyphicons') }}" class="nav-link">Glyphicons</a></li>
                                <li><a href="{{ url('admin/invoice') }}" class="nav-link">Invoice</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ url('admin/tables') }}" class="nav-link">Tables</a></li>
                                <li><a href="{{ url('admin/tables-dynamic') }}" class="nav-link">Table Dynamic</a>
                                </li>
                            </ul>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="menu_section" style="display: none">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('admin/projects') }}" class="nav-link">Projects</a></li>
                            <li><a href="{{ url('admin/project-detail') }}" class="nav-link">Project Detail</a>
                            </li>
                            <li><a href="{{ url('admin/contacts') }}" class="nav-link">Contacts</a></li>
                            <li><a href="{{ url('admin/profile') }}" class="nav-link">Profile</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                                class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>