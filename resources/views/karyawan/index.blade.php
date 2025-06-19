@extends('partials.main')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin transparent">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                        <div class="card-body">
                            <p class="mb-4">Today's Bookings</p>
                            <p class="fs-30 mb-2">4006</p>
                            <p>10.00% (30 days)</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                        <div class="card-body">
                            <p class="mb-4">Total Bookings</p>
                            <p class="fs-30 mb-2">61344</p>
                            <p>22.00% (30 days)</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4">New Customers</p>
                            <p class="fs-30 mb-2">3404</p>
                            <p>5.00% (30 days)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DataTable -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Karyawan</h4>
                    <div class="mb-3">
                        <a href="#" class="btn btn-outline-primary">
                            <i class="bi bi-plus-circle"></i> Tambah Karyawan
                        </a>
                        </div>
                    <div class="table-responsive">
                        <table id="example" class="table table-hover" style="95%">
                            <thead>
                                <tr>
                                    <th>No Induk Pegawai</th>
                                    <th>Nama Lengkap</th>
                                    <th>Status Karyawan</th>
                                    <th>Tanggal Bergabung</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data rows here (sama seperti yang sudah kamu tulis) -->
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>ID123</td>
                                    <td>Budi Santoso</td>
                                    <td>Karyawan Tetap</td>
                                    <td>12 Mei 2025</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger btn-sm">
                                            <span class="bi bi-trash-fill"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-success btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            <span class="bi bi-eye-fill"></span>
                                        </a>
                                    </td>
                                    </tr>
                                <!-- dst -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <!-- DataTables Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- DataTables + Bootstrap 4 JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
            responsive: true
        });
    </script>
@endpush

