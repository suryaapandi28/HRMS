@extends('partials.main')
@section('title', 'Tambah Karyawan')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="col-12 mb-3 p-3 rounded" style="background-color: #2f0d79; color: aliceblue;">Informasi Karyawan</h4>
                <form class="forms-sample row">
                    <!-- Informasi Karyawan -->
                    <div class="form-group col-lg-6">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama lengkap">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Status Karyawan</label>
                        <select class="form-control">
                            <option selected disabled>Pilih Status</option>
                            <option>Aktif</option>
                            <option>Cuti</option>
                            <option>Resign</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>NIK</label>
                        <input type="text" class="form-control" placeholder="Masukkan NIK">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Lokasi Kantor</label>
                        <input type="text" class="form-control" placeholder="Masukkan Lokasi">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Tempat Tanggal Lahir</label>
                        <input type="text" class="form-control" placeholder="Contoh: Jakarta, 01-01-2000">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>No NPWP</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Jenis Kelamin</label>
                        <select class="form-control">
                            <option selected disabled>Pilih Jenis Kelamin</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>No BPJS Kesehatan</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Status Pernikahan</label>
                        <select class="form-control">
                            <option selected disabled>Pilih Status</option>
                            <option>Belum Menikah</option>
                            <option>Menikah</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>No BPJS Ketenagakerjaan</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Alamat Lengkap</label>
                        <textarea class="form-control" rows="2"></textarea>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="contoh@email.com">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>No Telepon</label>
                        <input type="text" class="form-control" placeholder="08xxxxxxxxxx">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" placeholder="Jabatan">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Divisi</label>
                        <input type="text" class="form-control" placeholder="Divisi">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Tanggal Bergabung</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Nomor Bank</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>No Rekening</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Nama Pemilik Rekening</label>
                        <input type="text" class="form-control">
                    </div>

                    <!-- Upload Dokumen -->
                    <h4 class="col-12 mb-3 p-3 rounded" style="background-color: #2f0d79; color: aliceblue;">Upload Dokumen</h4>
                    <div class="form-group col-lg-6">
                        <label>Upload KTP</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Upload CV</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Upload Ijazah Pendidikan Terakhir</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Upload Sertifikat Keahlian</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Upload NPWP</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Upload BPJS Kesehatan</label>
                        <input type="file" class="form-control">
                    </div>

                    <div class="col-12 mb-4">
                        <h4 class="col-12 mb-3 p-3 rounded" style="background-color: #2f0d79; color: aliceblue;">Rincian Gaji</h4>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Gaji Pokok</label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Tunjangan Transportasi</label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Tunjangan Makan</label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Tunjangan Kesehatan</label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Tunjangan Keluarga</label>
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="#" class="btn btn-light">Batal</a>  
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection