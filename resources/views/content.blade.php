@extends('index')
@section('content')
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
@endsection
