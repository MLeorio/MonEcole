<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        Mon Ecole |
        @yield('title')
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('base/img/favicon.ico') }}">
    <!-- Google Fonts
  ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('base/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('base/css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('base/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/owl.transitions.css') }}">
    <!-- animate CSS
            ============================================ -->
    <link rel="stylesheet" href="{{ asset('base/css/animate.css') }}">
    <!-- normalize CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('base/css/normalize.css') }}">
    <!-- meanmenu icon CSS
                    ============================================ -->
    <link rel="stylesheet" href="{{ asset('base/css/meanmenu.min.css') }}">
    <!-- main CSS
                        ============================================ -->
    <link rel="stylesheet" href="{{ asset('base/css/main.css') }}">
    <!-- educate icon CSS
                            ============================================ -->
    <link rel="stylesheet" href="{{ asset('base/css/educate-custon-icon.css') }}">
    <!-- mCustomScrollbar CSS
                                ============================================ -->
    <link rel="stylesheet" href="{{ asset('base/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
                                    ============================================ -->
    <link rel="stylesheet" href="{{ asset('base/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
                                        ============================================ -->
    <link rel="stylesheet" href="{{ asset('base/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/calendar/fullcalendar.print.min.css') }}">

    <link rel="stylesheet" href="{{ asset('base/css/morrisjs/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('base/css/duallistbox/bootstrap-duallistbox.min.css') }}">

    <!-- style CSS
  ============================================ -->

    <link rel="stylesheet" href="{{ asset('base/css/data-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/data-table/bootstrap-editable.css') }}">


    <link rel="stylesheet" href="{{ asset('base/css/form/themesaller-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/select2/select2.min.css') }}">


    <link rel="stylesheet" href="{{ asset('base/css/form/all-type-forms.css') }}">

    <link rel="stylesheet" href="{{ asset('base/style.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/alerts.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/dropzone/dropzone.css') }}">


    <link rel="stylesheet" href="{{ asset('base/css/chosen/bootstrap-chosen.css') }}">

    <!-- responsive CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('base/css/responsive.css') }}">
    <!-- modernizr JS
  ============================================ -->
    <script src=""></script>
</head>

<body>
    <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser.
    Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->
    <!-- Start Header menu area -->
    <div class="left-sidebar-pro">
        @yield('menu')
    </div>
    <!-- End Header menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="">
                            <!-- Logo de l'ecole -->
                            <h1 class="main-logo" style="padding: 10px;">Mon &Eacute;cole</h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro
                                                header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12"></div>

                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                                <li class="nav-item">
                                                    <strong class="admin-name">
                                                        @yield('classe')
                                                    </strong>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="img/product/pro4.jpg" alt="" />
                                                        <span class="admin-name">
                                                            {{ Session::get('user')['prenom'] }}
                                                            {{ Session::get('user')['nom'] }}
                                                        </span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top
                                                        author-log dropdown-menu animated zoomIn">
                                                        <li>
                                                            <a href="">
                                                                <span class="edu-icon edu-user-rounded
                                                                    author-log-ic"></span>
                                                                Mon Profile
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('logout') }}">
                                                                <span class="edu-icon edu-locked author-log-ic"></span>
                                                                D&eacute;connexion
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                @yield('mobile-menu')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <hr>
                                        </div>
                                    </div>
                                    @yield('brand')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-copy-right">
                                <p style="font-size: 22px; font-family:'comic sans ms', sans-serif">
                                    Copyright <span style="font-family: arial, sans-serif;">&copy;</span>
                                    <script>
                                        document.write(new Date().getUTCFullYear())
                                    </script>. <br>
                                    <strong style="font-style: italic;">
                                        <a href="" style="color: lightblue">M.Leorio</a>
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- jquery
  ============================================ -->
        <script src="{{ asset('base/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{ asset('base/js/bootstrap.min.js') }}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{ asset('base/js/wow.min.js') }}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{ asset('base/js/jquery-price-slider.js') }}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{ asset('base/js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{ asset('base/js/owl.carousel.min.js') }}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{ asset('base/js/jquery.sticky.js') }}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{ asset('base/js/jquery.scrollUp.min.js') }}"></script>
        <!-- counterup JS
        ============================================ -->
        <script src="{{ asset('base/js/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('base/js/counterup/waypoints.min.js') }}"></script>
        <script src="{{ asset('base/js/counterup/counterup-active.js') }}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{ asset('base/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('base/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
        <!-- metisMenu JS
        ============================================ -->
        <script src="{{ asset('base/js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('base/js/metisMenu/metisMenu-active.js') }}"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{ asset('base/js/morrisjs/raphael-min.js') }}"></script>
        <script src="{{ asset('base/js/morrisjs/morris.js') }}"></script>
        <script src="{{ asset('base/js/morrisjs/morris-active.js') }}"></script>
        <!-- calendar JS
                ============================================ -->

        <script src="{{ asset('base/js/calendar/moment.min.js') }}"></script>
        <script src="{{ asset('base/js/calendar/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('base/js/calendar/fullcalendar-active.js') }}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{ asset('base/js/plugins.js') }}"></script>


        <script src="{{ asset('base/js/data-table/bootstrap-table.js') }}"></script>
        <script src="{{ asset('base/js/data-table/tableExport.js') }}"></script>
        <script src="{{ asset('base/js/data-table/data-table-active.js') }}"></script>
        <script src="{{ asset('base/js/data-table/bootstrap-table-editable.js') }}"></script>
        <script src="{{ asset('base/js/data-table/bootstrap-editable.js') }}"></script>
        <script src="{{ asset('base/js/data-table/bootstrap-table-resizable.js') }}"></script>
        <script src="{{ asset('base/js/data-table/colResizable-1.5.source.js') }}"></script>
        <script src="{{ asset('base/js/data-table/bootstrap-table-export.js') }}"></script>


        <script src="{{ asset('base/js/dropzone/dropzone.js') }}"></script>


        <!-- select2 JS
  ============================================ -->
        <script src="{{ asset('base/js/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('base/js/select2/select2-active.js') }}"></script>

        <script src="{{ asset('base/js/duallistbox/jquery.bootstrap-duallistbox.js') }}"></script>
        <script src="{{ asset('base/js/duallistbox/duallistbox.active.js') }}"></script>


        <script src="{{ asset('base/js/chosen/chosen.jquery.js') }}"></script>
        <script src="{{ asset('base/js/chosen/chosen-active.js') }}"></script>

        <!-- ichecks JS
  ============================================ -->
        <script src="{{ asset('base/js/icheck/icheck.min.js') }}"></script>
        <script src="{{ asset('base/js/icheck/icheck-active.js') }}"></script>

        <!-- main JS
            ============================================ -->
        <script src="{{ asset('base/js/main.js') }}"></script>
        <script src="{{ asset('base/js/tab.js') }}"></script>

        <!-- peity JS
		============================================ -->
        <script src="{{ asset('base/js/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('base/js/peity/peity-active.js') }}"></script>
</body>

</html>