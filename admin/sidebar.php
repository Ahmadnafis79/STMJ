
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
    <img src="../img/STMJ.png" alt="Logo UT" width="100px" class="mb-2">
    </div>
    <!-- <div class="sidebar-brand-text mx-3 text-left small">
      STMJ
    </div> -->
  </a>

  <hr class="sidebar-divider my-0" />

  <li class="nav-item active">
    <a class="nav-link" href="?page=dashboard">
      <i class="fas fa-fw fa-home"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <!-- <li class="nav-item active">
    <a class="nav-link" href="?page=unit-spesialis">
      <i class="fas fa-fw fa-home"></i>
      <span>Unit Spesialis</span>
    </a>
  </li> -->


  <?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

  if ($_SESSION['level'] === 'UT') {
    echo '
    <li class="nav-item active">
    <a class="nav-link" href="?page=unit-spesialis">
      <i class="fas fa-fw fa-home"></i>
      <span>Unit Spesialis</span>
    </a>
  </li>
    ';
  }
  ?>
  <?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
  if (isset($_SESSION['level']) === 'Administrator') {
    echo '

    ';
  }
  ?>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataMahasiswa" aria-expanded="true" aria-controls="dataMahasiswa">
      <i class="fas fa-fw fa-user-graduate"></i>
      <span>Unit Spesialis</span>
    </a>
    <div id="dataMahasiswa" class="collapse" aria-labelledby="dataMahasiswa" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="?page=mahasiswa-show">Data Mahasiswa</a>
        <a class="collapse-item" href="?page=mahasiswa-add">Input Data</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataDosen" aria-expanded="true" aria-controls="collapsedataDosenTwo">
      <i class="fas fa-fw fa-user-tie"></i>
      <span>Dosen</span>
    </a>
    <div id="dataDosen" class="collapse" aria-labelledby="dataDosen" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="?page=dosen-show">Data Dosen</a>
        <a class="collapse-item" href="?page=dosen-add">Input Data</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataUser" aria-expanded="true" aria-controls="collapsedataDosenTwo">
      <i class="fas fa-fw fa-user-tie"></i>
      <span>User</span>
    </a>
    <div id="dataUser" class="collapse" aria-labelledby="dataUser" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="?page=user-show">Data User</a>
        <a class="collapse-item" href="?page=user-add">Input User</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan" aria-expanded="true" aria-controls="laporan">
      <i class="fas fa-fw fa-file"></i>
      <span>Laporan</span>
    </a>
    <div id="laporan" class="collapse" aria-labelledby="laporan" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" target="_blank" href="../mahasiswa/print2.php">Data Mahasiswa</a>
        <a class="collapse-item" target="_blank" href="../dosen/print2.php">Data Dosen</a>
      </div>
    </div>
  </li>

  <?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
  if (isset($_SESSION['level']) === 'administrator') {
    echo '
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user" aria-expanded="true"
        aria-controls="user">
        <i class="fas fa-fw fa-user"></i>
        <span>User</span>
      </a>
      <div id="user" class="collapse" aria-labelledby="user" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="?page=user-show">Data User</a>
          <a class="collapse-item" href="?page=user-add">Input User</a>
        </div>
      </div>
    </li>
    ';
  }
  ?>

  <hr class="sidebar-divider d-none d-md-block" />
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>