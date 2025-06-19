@extends('partials.main')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome Vina</h3>
                    <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                            <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="mdi mdi-calendar"></i> Today ({{ now()->format('d M Y') }})
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                <a class="dropdown-item" href="#">January - March</a>
                                <a class="dropdown-item" href="#">March - June</a>
                                <a class="dropdown-item" href="#">June - August</a>
                                <a class="dropdown-item" href="#">August - November</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Projek Monitoring</p>

                    <!-- Tambahkan row di sini -->
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-md-6 mb-3 stretch-card transparent">
                            <div class="card card-tale">
                                <div class="card-body">
                                    <p class="mb-4">Jumlah Projek</p>
                                    <p class="fs-30 mb-2">123</p>
                                    <p>Projek</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-md-6 mb-3 stretch-card transparent">
                            <div class="card card-dark-blue">
                                <div class="card-body">
                                    <p class="mb-4">Projek Selesai</p>
                                    <p class="fs-30 mb-2">56</p>
                                    <p>selesai</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chart -->
                     <canvas id="doughnutChart"></canvas>

                </div>
            </div>
        </div>

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Projek Monitoring</p>

                    <!-- Tambahkan row di sini -->
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-md-6 mb-3 stretch-card transparent">
                            <div class="card card-light-danger">
                                <div class="card-body">
                                    <p class="mb-4">Tugas Aktif</p>
                                    <p class="fs-30 mb-2">23</p>
                                    <p>12 Selesai</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-md-6 mb-3 stretch-card transparent">
                            <div class="card card-dark-blue">
                                <div class="card-body">
                                    <p class="mb-4">Jam Saat Ini</p>
                                    <h3 id="realTimeClock" class="fs-30 mb-2 font-weight-bold text-white">00:00:00</h3>
                                    <p class="text-light">Waktu Real-Time</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Chart -->
                    <canvas id="scatterChart"></canvas>
                </div>
            </div>
        </div>
    </div>





    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Order Details</p>
                    <div class="d-flex flex-wrap mb-8">
                        <div class="mr-5 mt-3">
                            <p class="text-muted">Order value</p>
                            <h3 class="text-primary fs-30 font-weight-medium">$5000</h3>
                        </div>
                        <div class="mr-5 mt-3">
                            <p class="text-muted">Orders</p>
                            <h3 class="text-primary fs-30 font-weight-medium">200</h3>
                        </div>
                        <div class="mr-5 mt-3">
                            <p class="text-muted">Conversion</p>
                            <h3 class="text-primary fs-30 font-weight-medium">60%</h3>
                        </div>
                    </div>
                    <canvas id="order-chart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-title">Sales Report</p>
                        <a href="#" class="text-info">View all</a>
                    </div>
                    <div id="sales-legend" class="chartjs-legend mt-6 mb-2"></div>
                    <canvas id="sales-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function () {
            if ($("#doughnutChart").length) {
                const ctx = document.getElementById("doughnutChart").getContext('2d');
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Proyek A', 'Proyek B', 'Proyek C'],
                        datasets: [{
                            data: [183.14, 139.65, 89.95],
                            backgroundColor: ['#4BC0C0', '#FF6384', '#9966FF'],
                            borderColor: '#fff',
                            borderWidth: 2
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: true,  // Gunakan true agar rasio proporsional
                        aspectRatio: 1.5,            // Sesuaikan angka rasio sesuai kebutuhan
                        cutout: '70%',
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
            }
        });
    </script>
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/chart.js"></script>
@endpush