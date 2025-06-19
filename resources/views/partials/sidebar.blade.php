<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
      <a class="nav-link" href="{{ url('/') }}">
        <i class="bi bi-grid-fill menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item {{ request()->is('data_perusahaan*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('data_perusahaan.index') }}">
        <i class="bi bi-buildings menu-icon"></i>
        <span class="menu-title">Data Perusahaan</span>
      </a>
    </li>

    <li class="nav-item {{ request()->is('karyawan*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('karyawan.index') }}">
        <i class="bi bi-people-fill menu-icon"></i>
        <span class="menu-title">Karyawan</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic"
        aria-expanded="{{ request()->is('penggajian*') ? 'true' : 'false' }}" aria-controls="ui-basic">
        <i class="bi bi-cash-stack menu-icon"></i>
        <span class="menu-title" style="margin-left: -5px;">Penggajian</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ request()->is('penggajian*') ? 'show' : '' }}" id="ui-basic">
        <ul class="nav flex-column sub-menu" style="list-style: none; padding-left: 20px; margin-left: -10px;">
          <li class="nav-item {{ request()->is('penggajian/periode') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('penggajian.periode') }}" style="padding-left: 15px;">
              <i class="" style="margin-right: 10px;"></i> Riwayat Periode
            </a>
          </li>
          <li class="nav-item {{ request()->is('penggajian/komponen') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('penggajian.komponen') }}" style="padding-left: 15px;">
              <i class="" style="margin-right: 10px;"></i> Komponen Gaji
            </a>
          </li>
          <li class="nav-item {{ request()->is('penggajian/strukturGaji') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('penggajian.strukturGaji') }}" style="padding-left: 15px;">
              <i class="" style="margin-right: 10px;"></i> Struktur Gaji
            </a>
          </li>
          <li class="nav-item {{ request()->is('penggajian/riwayatSlip') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('penggajian.riwayatSlip') }}" style="padding-left: 15px;">
              <i class="" style="margin-right: 10px;"></i> Riwayat Slip Gaji
            </a>
          </li>
          <li class="nav-item {{ request()->is('penggajian/insentif') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('penggajian.insentif') }}" style="padding-left: 15px;">
              <i class="" style="margin-right: 10px;"></i> Insentif
            </a>
          </li>
          <li class="nav-item {{ request()->is('penggajian/tarifUmum') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('penggajian.tarifUmum') }}" style="padding-left: 15px;">
              <i class="" style="margin-right: 10px;"></i> Tarif Umum
            </a>
          </li>
          <li class="nav-item {{ request()->is('penggajian/riwayatPajak') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('penggajian.riwayatPajak') }}" style="padding-left: 15px;">
              <i class="" style="margin-right: 10px;"></i> Riwayat Pajak Karyawan
            </a>
          </li>
        </ul>
      </div>
      </li>
    
    <li class="nav-item {{ request()->is('pinjaman*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('pinjaman.index') }}">
        <i class="bi bi-credit-card-fill menu-icon"></i>
        <span class="menu-title">Pinjaman</span>
      </a>
    </li>

    <li class="nav-item {{ request()->is('cuti_izin*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('cuti_izin.index') }}">
        <i class="bi bi-calendar-check menu-icon"></i>
        <span class="menu-title">Cuti dan Izin</span>
      </a>
    </li>

    <li class="nav-item {{ request()->is('kebijakan*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('kebijakan.index') }}">
        <i class="bi bi-file-earmark-text-fill menu-icon"></i>
        <span class="menu-title">Kebijakan dan SOP</span>
      </a>
    </li>
  </ul>
</nav>



<style>
  /* Hover Effect */
  .nav-link:hover {
    font-weight: bold;
    background-color: #9f9f9f;
    margin-left: -5px;
    padding-left: 30px !important;
  }

  /* Active State */
  .nav-item.active>.nav-link,
  .nav-link.active {
    font-weight: bold;
    color: #9f9f9f !important;
    background-color: rgba(42, 125, 209, 0.1);
    margin-left: -8px;
    padding-left: 28px !important;
  }

  /* Sub-menu alignment */
  .sub-menu {
    margin-left: -10px;
  }

  /* Icon spacing */
  .bi {
    min-width: 20px;
    text-align: center;
  }
</style>