<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->

<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="description" content="Metro Admin Template.">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword"
        content="Metro, Metro UI, dashfiles, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{asset('dashfiles/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashfiles/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('dashfiles/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('dashfiles/css/style-responsive.css')}}" rel="stylesheet">
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext'
        rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
    <!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner bg-light">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse"
                    data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>


                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">

                       
                        <!-- start: User Dropdown -->
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i>
                                {{Session :: get('admin_name')}}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                <li><a href="{{URL :: to('/logout')}}"><i class="halflings-icon off"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Contact Us</a></li>
                        <!-- end: User Dropdown -->
                    </ul>
                    <ul class = "nav pull-left">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Products</a></li>
                    </ul>
                </div>
                <!-- end: Header Menu -->

            </div>
        </div>
    </div>
    <!-- start: Header -->

    <div class="container-fluid-full">
        <div class="row-fluid">

            <!-- start: Main Menu -->
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li><a href="{{URL :: to('/dashboard')}}"><i class="icon-bar-chart"></i><span
                                    class="hidden-tablet">
                                    Dashboard</span></a></li>
                        <li><a href="{{URL :: to('/all-announcement')}}"><i class="icon-bullhorn"></i><span
                                    class="hidden-tablet">
                                    All Announcements</span></a></li>
                        <li><a href="{{URL :: to('/add-announcement')}}"><i class="icon-bullhorn"></i><span
                                    class="hidden-tablet">Add Announcement</span></a>
                        </li>
                        <li><a href="{{URL :: to('/all-category')}}"><i class="icon-envelope"></i><span
                                    class="hidden-tablet">
                                    All Category</span></a></li>
                        <li><a href="{{URL :: to('/add-category')}}"><i class="icon-tasks"></i><span
                                    class="hidden-tablet">Add Category</span></a>
                        </li>

                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet">Products</span>
                            </a>
                            <ul>
                                <li><a class="submenu" href="{{URL :: to('/add-product')}}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet">Add product</span></a>
                                </li>
                                <li><a class="submenu" href="{{URL :: to('/all-products')}}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet">All
                                            products</span></a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

            <!-- start: Content -->
            <div id="content" class="span10">
                @yield('content');
            </div>
        </div>
        <!--/#content.span10-->
    </div>
    <!--/fluid-row-->

    

    <div class="clearfix"></div>

  

    <!-- start: JavaScript-->

    <script src="{{asset('dashfiles/js/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery-migrate-1.0.0.min.js')}}"></script>

    <script src="{{asset('dashfiles/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

    <script src="{{asset('dashfiles/js/jquery.ui.touch-punch.js')}}"></script>

    <script src="{{asset('dashfiles/js/modernizr.js')}}"></script>

    <script src="{{asset('dashfiles/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('dashfiles/js/jquery.cookie.js')}}"></script>

    <script src="{{asset('dashfiles/js/fullcalendar.min.js')}}"></script>

    <script src="{{asset('dashfiles/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{asset('dashfiles/js/excanvas.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.flot.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.flot.resize.min.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.chosen.min.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.uniform.min.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.cleditor.min.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.noty.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.elfinder.min.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.raty.min.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.iphone.toggle.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.uploadify-3.1.min.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.gritter.min.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.imagesloaded.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.masonry.min.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.knob.modified.js')}}"></script>
    <script src="{{asset('dashfiles/js/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('dashfiles/js/counter.js')}}"></script>
    <script src="{{asset('dashfiles/js/retina.js')}}"></script>
    <script src="{{asset('dashfiles/js/custom.js')}}"></script>
    <!-- end: JavaScript-->

</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->

</html>