@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Master Jenis Sampah</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Sampah</a></div>
                <div class="breadcrumb-item active"><a href="#">Master Jenis Sampah</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-8 col-md-9">
                                <h4>Tabel Master Jenis Sampah</h4>
                            </div>
                            <div class="col-4 col-md-3 text-right">
                                <a href="" class="btn btn-primary icon-left btn-icon">Tambah Data</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Sampah</th>
                                        <th>Harga</th>
                                        <th>Organik</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Dedaunan</td>
                                        <td>1000</td>
                                        <td>
                                            <div class="badge badge-success">Organik</div>
                                        </td>
                                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Kaca</td>
                                        <td>8000</td>
                                        <td>
                                            <div class="badge badge-danger">Tidak</div>
                                        </td>
                                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><i
                                                class="fas fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1 <span
                                                class="sr-only">(current)</span></a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
