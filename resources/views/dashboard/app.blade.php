<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->


    <title>Siaf Kiaf</title>
    <!-- Custom CSS -->

    <link href="{{asset('final/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->

    <link href="{{asset('assets/dashboard/css/style-rtl.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('final/dist/css/style.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    @yield('cssHeader')

</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                    <i class="ti-menu ti-close"></i>
                </a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                            <!-- dark Logo text -->
                            <img  class="dark-logo" />
                        <!-- Light Logo text -->
                            <img  class="light-logo"/>
                        </span>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                            <i class="sl-icon-menu font-20"></i>
                        </a>
                    </li>
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->


                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <img src="{{asset('final/assets/images/users/3.jpg')}}" alt="user" class="rounded-circle" width="31">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                            <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                <div class="">
                                    <img src="{{asset('final/assets/images/users/3.jpg')}}" alt="user" class="img-circle" width="60">
                                </div>
                                <div class="m-l-10">
                                    <h4 class="m-b-0">{{Auth::user()->name}}</h4>
                                    <p class=" m-b-0">{{Auth::user()->email}}</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="{{url('/')}}">
                                <i class="ti-user m-r-5 m-l-5"></i>زيارة الموقع</a>

                            <div class="dropdown-divider"></div>
                            <a  class="dropdown-item"  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                                <i class="fa fa-power-off m-r-5 m-l-5"></i> تسجيل خروج
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            </a>
                            <div class="dropdown-divider"></div>
                            <div class="p-l-30 p-10">
                                <a href="{{route('user.edit',\Illuminate\Support\Facades\Auth::id())}}" class="btn btn-sm btn-success btn-rounded">صفحتي الشخصية</a>
                            </div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li>
                        <!-- User Profile-->
                        <div class="user-profile dropdown m-t-20">
                            <div class="user-pic">
                                <a href="{{route('user.edit',\Illuminate\Support\Facades\Auth::id())}}">
                                    <img src="{{asset('final/assets/images/users/3.jpg')}}" alt="users" class="rounded-circle img-fluid" />
                                </a>
                            </div>
                            <div class="user-content hide-menu m-t-10">
                                <h5 class="m-b-10 user-name font-medium">{{Auth::user()->name}}</h5>
                                <a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class="ti-settings"></i>
                                </a>
{{--                                <a href="javascript:void(0)" title="Logout" class="btn btn-circle btn-sm">--}}
{{--                                    <i class="ti-power-off"></i>--}}
{{--                                </a>--}}
                                <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">
                                    <a class="dropdown-item" href="{{route('user.edit',\Illuminate\Support\Facades\Auth::id())}}">
                                        <i class="ti-user m-r-5 m-l-5"></i> صفحتي الشخصية </a>

{{--                                    <a class="dropdown-item" href="javascript:void(0)">--}}
{{--                                        <i class="ti-email m-r-5 m-l-5"></i> Inbox</a>--}}
                                    <div class="dropdown-divider"></div>
                                    <a  class="dropdown-item"  href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" title="" >
                                        <i class="ti-power-off"></i>تسجيل خروج
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End User Profile-->
                    </li>
                    <!-- User Profile-->
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-Car-Wheel"></i>
                            <span class="hide-menu">لوحة التحكم </span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="{{url('dashboard/main')}}" class="sidebar-link">
                                    <i class="icon-Record"></i>
                                    <span class="hide-menu"> الرئيسية </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::user()->role_id==1)

                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="{{route('admin.index')}}" aria-expanded="false">
                                <i class="ti-home"></i>
                                الشاليهات
                            </a>

                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="{{route('user.index')}}" aria-expanded="false">
                                <i class="ti-user"></i>
                                المستخدمين
                            </a>

                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="{{route('admin.message')}}" aria-expanded="false">
                                <i class="ti-email"></i>
                                الرسائل
                            </a>
                        </li>
                    @elseif (\Illuminate\Support\Facades\Auth::user()->role_id==2)
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="{{route('owner.index')}}" aria-expanded="false">
                                <i class="ti-home"></i>
                                الشاليهات
                            </a>

                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="{{route('offer.index')}}" aria-expanded="false">
                                <i class="ti-home"></i>
                                العروض
                            </a>

                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="{{route('reservation.index')}}" aria-expanded="false">
                                <i class="ti-home"></i>
                               الشاليهات المحجوزة
                            </a>

                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="{{url('/reservations')}}" aria-expanded="false">
                                <i class="ti-home"></i>
                                الشاليهات التي تم طلبها
                            </a>

                        </li>
                    @else
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="{{route('tenant.index')}}" aria-expanded="false">
                                <i class="ti-home"></i>
                                الشاليهات التي حجزتها
                            </a>

                        </li>
                    @endif
                    <li class="sidebar-item">
                        <a class="sidebar-link  waves-effect waves-dark" href="{{url('/')}}" aria-expanded="false">
                            <i class="ti-back-right"></i>
                            الرجوع للصفحة الرئيسية
                        </a>

                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Welcome back  -->
            <!-- ============================================================== -->

            <div class="row">
                    @include('sweetalert::alert')
                    @yield('content2')
            </div>


        </div>
        <!-- ============================================================== -->
        <!-- Trade history / Exchange -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    جميع الحقوق محفوظة &copy;  <script>document.write(new Date().getFullYear());</script>| لصَيّف كَيّف   <i class="fa fa-heart" aria-hidden="true"></i> برمجة <a>هدير المصري </a>

                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->
<aside class="customizer">
    <a href="javascript:void(0)" class="service-panel-toggle">
        <i class="fa fa-spin fa-cog"></i>
    </a>
    <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab4" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                   aria-selected="true">
                    <i class="mdi mdi-wrench font-20"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab4" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false">
                    <i class="mdi mdi-message-reply font-20"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab4" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
                   aria-selected="false">
                    <i class="mdi mdi-star-circle font-20"></i>
                </a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent4">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab4">
                <div class="p-15 border-bottom">
                    <!-- Sidebar -->
                    <h5 class="font-medium m-b-10 m-t-10">Layout Settings</h5>
                    <div class="custom-control custom-checkbox m-t-10">
                        <input type="checkbox" class="custom-control-input" name="theme-view" id="theme-view">
                        <label class="custom-control-label" for="theme-view">Dark Theme</label>
                    </div>
                    <div class="custom-control custom-checkbox m-t-10">
                        <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
                        <label class="custom-control-label" for="collapssidebar">Collapse Sidebar</label>
                    </div>
                    <div class="custom-control custom-checkbox m-t-10">
                        <input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
                        <label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
                    </div>
                    <div class="custom-control custom-checkbox m-t-10">
                        <input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
                        <label class="custom-control-label" for="header-position">Fixed Header</label>
                    </div>
                    <div class="custom-control custom-checkbox m-t-10">
                        <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                        <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-medium m-b-10 m-t-10">Logo Backgrounds</h5>
                    <ul class="theme-color">
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a>
                        </li>
                    </ul>
                    <!-- Logo BG -->
                </div>
                <div class="p-15 border-bottom">
                    <!-- Navbar BG -->
                    <h5 class="font-medium m-b-10 m-t-10">Navbar Backgrounds</h5>
                    <ul class="theme-color">
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a>
                        </li>
                    </ul>
                    <!-- Navbar BG -->
                </div>
                <div class="p-15 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-medium m-b-10 m-t-10">Sidebar Backgrounds</h5>
                    <ul class="theme-color">
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a>
                        </li>
                        <li class="theme-item">
                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a>
                        </li>
                    </ul>
                    <!-- Logo BG -->
                </div>
            </div>
            <!-- End Tab 1 -->
            <!-- Tab 2 -->

            <!-- End Tab 2 -->
            <!-- Tab 3 -->

            <!-- End Tab 3 -->
        </div>
    </div>
</aside>
<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('final/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('final/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('final/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- apps -->
<script src="{{asset('final/dist/js/app.min.js')}}"></script>
<!-- Theme settings -->
<script src="{{asset('final/dist/js/app.init.js')}}"></script>
<script src="{{asset('final/dist/js/app-style-switcher.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('final/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('final/assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('final/dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('final/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('final/dist/js/custom.min.js')}}"></script>
<!--This page JavaScript -->
<!--c3 JavaScript -->
<script src="{{asset('final/assets/extra-libs/c3/d3.min.js')}}"></script>
<script src="{{asset('final/assets/extra-libs/c3/c3.min.js')}}"></script>
<script src="{{asset('final/dist/js/pages/dashboards/dashboard3.js')}}"></script>
@yield('jsFooter')

</body>

</html>