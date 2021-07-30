<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>Sistem Monev Danau Rawa Pening 1.0</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">


        <!-- Theme Styles -->
        <link href="{{ asset('assets/css/connect.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/admin2.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/dark_theme.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
        <![endif]-->
    </head>
    <body>
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div>
        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="page-container">
                <div class="page-header">
                    <nav class="navbar navbar-expand container">
                        <div class="logo-box"><a href="#" class="logo-text">Moriblat</a></div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="navbar-nav">
                            <li class="nav-item small-screens-sidebar-link">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                            </li>
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('assets/images/avatars/profile-image-1.png') }}" alt="profile image">
                                    <span>SuperAdmin</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Calendar<span class="badge badge-pill badge-info float-right">2</span></a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Log out</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">mail</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
                            </li>
                        </ul>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav"></ul>
                        </div>
                        <div class="navbar-search">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="search" id="nav-search" placeholder="Search...">
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="horizontal-bar">
                    <div class="logo-box"><a href="#" class="logo-text">Connect</a></div>
                    <a href="#" class="hide-horizontal-bar"><i class="material-icons">close</i></a>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="horizontal-bar-menu">
                                    <ul>
                                        <li><a href="index.html" class="active">Dashboard</a></li>
                                        <li>
                                            <a href="#">Lembaga<i class="material-icons"></i></a>
                                        </li>
                                        <li>
                                            <a href="#">Masyarakat<i class="material-icons"></i></a>
                                        </li>
                                        <li><a href="#">kajian<i class="material-icons">keyboard_arrow_down</i></a>
                                            <ul>
                                                <li>
                                                    <a href="styles-typography.html">Permasalahan</a>
                                                </li>
                                                <li>
                                                    <a href="styles-code.html">Program</a>
                                                </li>
                                                <li>
                                                    <a href="styles-tables.html">Kegiatan</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Monev<i class="material-icons">keyboard_arrow_down</i></a>
                                            <ul>
                                                <li>
                                                    <a href="ui-alerts.html">Pemantauan</a>
                                                </li>
                                                <li>
                                                    <a href="ui-badge.html">Evaluasi</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Kondisi Fisik<i class="material-icons">keyboard_arrow_down</i></a>
                                            <ul>
                                                <li>
                                                    <a href="extended-select2.html">Batimetri</a>
                                                </li>
                                                <li>
                                                    <a href="extended-datatables.html">Foto Udara</a>
                                                </li>
                                                <li>
                                                    <a href="extended-blockui.html">Sedimentasi</a>
                                                </li>
                                                <li>
                                                    <a href="extended-session.html">Data Spasial Lain</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-content">
                    <div class="page-info container">
                        <div class="row">
                            <div class="col">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
{{--                Footer--}}
                <div class="page-footer fixed-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="footer-text">2021 © The Innovation Digital of Geoscience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascripts -->
        <script src="{{ asset('assets/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/blockui/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/plugins/flot/jquery.flot.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/flot/jquery.flot.symbol.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('assets/js/connect.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    </body>
</html>
