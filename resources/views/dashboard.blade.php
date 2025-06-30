@extends('partials.main')

@section('title', 'Dashboard')

@section('content')
    <div class="row mb-3">
        <div class="col-12">
            <h3 class="font-weight-bold">Welcome Vina</h3>
            <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
        </div>
    </div>

    <div class="row">
        <!-- Kolom Kiri -->
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Projek Monitoring</p>
                    <div class="row">
                        <div class="col-md-6 mb-3 stretch-card transparent">
                            <div class="card card-tale">
                                <div class="card-body">
                                    <p class="mb-4">Jumlah Projek</p>
                                    <p class="fs-30 mb-2">123</p>
                                    <p>Projek</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 stretch-card transparent">
                            <div class="card card-tale">
                                <div class="card-body">
                                    <p class="mb-4">Projek Selesai</p>
                                    <p class="fs-30 mb-2">56</p>
                                    <p>Selesai</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Doughnut Chart -->
                    <canvas id="doughnutChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div class="col-md-7">
            <!-- Baris 1: Tugas Aktif dan Jam -->
            <div class="row">
                <!-- Card 1: Tugas Aktif -->
                <div class="col-md-6 mb-3 stretch-card">
                    <div class="card card-dark-blue">
                        <div class="card-body d-flex justify-content-between align-items-start">
                            <div>
                                <p class="font-weight-bold mb-2">Active Task</p>
                                <h3 class="font-weight-bold mb-4">120</h3>
                                <p class="text mb-2">20 Completed</p>
                            </div>
                            <div>
                                <i class="bi bi-card-list fs-1"style="font-size: 30px" ></i>
                                {{-- Jika tidak pakai MDI, bisa pakai FontAwesome: <i class="fas fa-clipboard fa-2x text-muted"></i>
                                --}}
                            </div>
                        </div>
                    </div>          </div>
                <!-- Card 2: Jam Saat Ini -->
                <div class="col-md-6 mb-3 stretch-card transparent">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="mb-2 font-weight-bold">Jam Saat Ini</p>
                            <h3 id="realTimeClock" class="fs-30 mb-2 font-weight-bold text-dark">00:00:00</h3>
                            <p class="text-muted">Waktu Real-Time</p>
                        </div>
                    </div>
                </div>      
            </div>
            <!-- Baris 2: Tabel Projek Aktif -->
            <div class="card stretch-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                    <p class="card-title">Kehadiran Karyawan</p>
                    <a href="#" class="text-info">View all</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jam Masuk</th>
                                    <th>Jam Keluar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Susanti</td>
                                    <td>07:00</td>
                                    <td>17:00</td>
                                </tr>
                                <tr>
                                    <td>Marym</td>
                                    <td>07:45</td>
                                    <td>17:17</td>
                                </tr>
                                <tr>
                                    <td>Tono</td>
                                    <td>08:00</td>
                                    <td>18:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Kolom Kiri -->
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Projek Monitoring</p>
                    <canvas id="attendanceChart" min-height="100%"></canvas>
                    <div class="d-flex justify-content-around mt-2">
                        <div class="text-center">
                            <div class="badge bg-primary text-white">WFO</div>
                            <p class="mb-0">8 orang</p>
                        </div>
                        <div class="text-center">
                            <div class="badge bg-success text-white">WFH/A</div>
                            <p class="mb-0">8 orang</p>
                        </div>
                        <div class="text-center">
                            <div class="badge bg-danger text-white">Tidak Hadir</div>
                            <p class="mb-0">5 orang</p>
                        </div>
                    </div>

                    <!-- Doughnut Chart -->
                </div>
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div class="col-md-7">
            <!-- Baris 1: Tugas Aktif dan Jam -->
            <!-- Baris 2: Tabel Projek Aktif -->
            <div class="card stretch-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-title">Kehadiran Karyawan</p>
                        <a href="#" class="text-info">View all</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jenis Izin/Cuti</th>
                                    <th>Durasi</th>
                                    <th>Bukti File</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Siti</td>
                                    <td>Sakit</td>
                                    <td>1 hari</td>
                                    <td><a href="">Surat Sakit</a></td>
                                </tr>
                                <tr>
                                    <td>Masta</td>
                                    <td>Cuti</td>
                                    <td>3 Hari</td>
                                    <td><a href="">Surat Cuti</a></td>
                                </tr>
                                <tr>
                                    <td>Topik</td>
                                    <td>Sakit</td>
                                    <td>2 Hari</td>
                                    <td><a href="">Surat Sakit</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
            <!-- Real-time Clock Script -->
            <script>
                function updateClock() {
                    const now = new Date();
                    const timeString = now.toLocaleTimeString('id-ID');
                    document.getElementById('realTimeClock').textContent = timeString;
                }
                setInterval(updateClock, 1000);
                updateClock();
            </script>

            <!-- Chart Doughnut -->
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
                                    backgroundColor: ['#2D336B', '#F97A00', '#FEBA17'],
                                    borderColor: '#fff',
                                    borderWidth: 2
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: true,
                                aspectRatio: 1.5,
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

    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

    <script>
        const ctxAttendance = document.getElementById('attendanceChart').getContext('2d');
        new Chart(ctxAttendance, {
            type: 'bar',
            data: {
                labels: ['WFO', 'WFH/A', 'Tidak Hadir'],
                datasets: [{
                    label: 'Jumlah',
                    data: [8, 8, 5], // Pastikan data sesuai
                    backgroundColor: ['#2D336B', '#00CEC9', '#FE6D73'],
                    borderRadius: 10,
                    barThickness: 30,
                }]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#2d3436',
                        titleColor: '#fff',
                        bodyColor: '#dfe6e9',
                        cornerRadius: 0,
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        min: 0,          // ⬅️ Inilah yang WAJIB
                        suggestedMax: 10, // Tambahan supaya ada ruang kanan
                        ticks: {
                            stepSize: 5,
                            font: {
                                size: 14
                            }
                        },
                        grid: {
                            drawBorder: false,
                            color: '#dfe6e9'
                        }
                    },
                    y: {
                        ticks: {
                            font: {
                                size: 14,
                                weight: '600'
                            }
                        },
                        grid: {
                            display: false
                        }
                    }
                },
                animation: {
                    duration: 800,
                    easing: 'easeOutBounce'
                }
            }
        });
    </script>




@endpush