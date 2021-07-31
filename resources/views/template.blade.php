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
            {{--Navigasi--}}
            @include('partials.navbar');
            {{--Konten--}}
            {{-- @include('content');--}}
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
                    <div class="row">
                        <div class="col-xl">
                            <h3 class="card-title">Permasalah</h3>
                            <button type="button" class="btn btn-tambah btn-primary icon-btn"><i class="icon-btn fas fa-plus fa-lg"></i> Tambah Masalah</button>
                            <div class="card card-masalah">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Permasalahan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Kelembagaan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Kemasyarakatan</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    {{--Konten--}}
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Jenis</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Capaian</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>0001</td>
                                                    <td>Masalah</td>
                                                    <td>Juknis Rencana Tata Ruang</td>
                                                    <td><span class="badge badge-warning">Sedang Berjalan</span></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn-view"><i class="fas fa-binoculars fa-lg"></i></button>
                                                        <button type="button" class="btn-edit"><i class="fas fa-edit fa-lg"></i></button>
                                                        <button type="button" class="btn-del"><i class="fas fa-trash-alt fa-lg"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>0002</td>
                                                    <td>Masalah</td>
                                                    <td>Perda Rencana Tata Ruang</td>
                                                    <td><span class="badge badge-danger">Belum Dikerjakan</span></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>0003</td>
                                                    <td>Potensi</td>
                                                    <td>Pengembangan Enceng Gondok</td>
                                                    <td><span class="badge badge-success">Selesai</span></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%
                                                            </div>
                                                        </div>
                                                    </td>
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
            {{--Footer--}}
            @include('partials.footer');
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