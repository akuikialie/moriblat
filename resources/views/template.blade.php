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
                            <ul class="navbar-nav">
{{--                                </div>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#" class="nav-link">Projects</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#" class="nav-link">Tasks</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#" class="nav-link">Reports</a>--}}
{{--                                </li>--}}
                            </ul>
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
                    <div class="main-wrapper container">
                        <div class="row stats-row">
                            <div class="col-lg-4 col-md-12">
                                <div class="card card-transparent stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <h5 class="card-title">$3,089.67<span class="stats-change stats-change-danger">-8%</span></h5>
                                            <p class="stats-text">Total revenue for last  20 days</p>
                                        </div>
                                        <div class="stats-icon change-danger">
                                            <i class="material-icons">trending_down</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="card card-transparent stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <h5 class="card-title">168,047<span class="stats-change stats-change-success">+16%</span></h5>
                                            <p class="stats-text">Unique visitors in current period</p>
                                        </div>
                                        <div class="stats-icon change-success">
                                            <i class="material-icons">trending_up</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="card card-transparent stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <h5 class="card-title">47,350<span class="stats-change stats-change-success">+12%</span></h5>
                                            <p class="stats-text">Total investments in this month</p>
                                        </div>
                                        <div class="stats-icon change-success">
                                            <i class="material-icons">trending_up</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card savings-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Savings<span class="card-title-helper">30 Days</span></h5>
                                        <div class="savings-stats">
                                            <h5>$4,502.00</h5>
                                            <span>Total savings for last month</span>
                                        </div>
                                        <div id="sparkline-chart-1"></div>
                                    </div>
                                </div>
                                <div class="card top-products">
                                    <div class="card-body">
                                        <h5 class="card-title">Popular Products<span class="card-title-helper">Today</span></h5>
                                        <div class="top-products-list">
                                            <div class="product-item">
                                                <h5>Alpha - File Hosting Service</h5>
                                                <span>4,037 downloads</span>
                                                <i class="material-icons product-item-status product-item-success">arrow_upward</i>
                                            </div>
                                            <div class="product-item">
                                                <h5>Lime - Task Managment Dashboard</h5>
                                                <span>1,876 downloads</span>
                                                <i class="material-icons product-item-status product-item-success">arrow_upward</i>
                                            </div>
                                            <div class="product-item">
                                                <h5>Space - Meetup Hosting App</h5>
                                                <span>1,252 downloads</span>
                                                <i class="material-icons product-item-status product-item-danger">arrow_downward</i>
                                            </div>
                                            <div class="product-item">
                                                <h5>Meteor - Messaging App</h5>
                                                <span>938 downloads</span>
                                                <i class="material-icons product-item-status product-item-success">arrow_upward</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <ul class="nav nav-tabs card-header-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Visitors</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Reports</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Investments</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="visitors-stats">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="visitors-stats-info">
                                                        <p>Total visitors in the current period:</p>
                                                        <h5>77,871</h5>
                                                        <span>6-26 Apr</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="visitors-stats-info">
                                                        <p>Unique visitors in the current period and ratio:</p>
                                                        <h5>58,403</h5>
                                                        <span>6-26 Apr</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div id="chart-visitors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="alert alert-info no-m" role="alert">
                                        Data has been updated 35 minutes ago, go to the reports page to access data history.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Server Load<span class="card-title-helper">Optimal</span></h5>
                                        <div class="server-load row">
                                            <div class="server-stat col-sm-4">
                                                <p>167GB</p>
                                                <span>Usage</span>
                                            </div>
                                            <div class="server-stat col-sm-4">
                                                <p>320GB</p>
                                                <span>Space</span>
                                            </div>
                                            <div class="server-stat col-sm-4">
                                                <p>57.4%</p>
                                                <span>CPU</span>
                                            </div>
                                        </div>
                                        <div id="server-load-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card card-transactions">
                                    <div class="card-body">
                                        <h5 class="card-title">Transactions<a href="#" class="card-title-helper blockui-transactions"><i class="material-icons">refresh</i></a></h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Company</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>0776</td>
                                                        <td>Sale Management</td>
                                                        <td>$18, 560</td>
                                                        <td><span class="badge badge-success">Finished</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>0759</td>
                                                        <td>Dropbox</td>
                                                        <td>$40, 672</td>
                                                        <td><span class="badge badge-warning">Waiting</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>0741</td>
                                                        <td>Social Media</td>
                                                        <td>$13, 378</td>
                                                        <td><span class="badge badge-info">In Progress</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>0740</td>
                                                        <td>Envato Market</td>
                                                        <td>$17, 456</td>
                                                        <td><span class="badge badge-info">In Progress</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>0735</td>
                                                        <td>Graphic Design</td>
                                                        <td>$29, 999</td>
                                                        <td><span class="badge badge-secondary">Canceled</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="footer-text">2019 © stacks</span>
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
