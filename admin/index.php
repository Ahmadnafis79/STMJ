<?php

if (isset($_SESSION['level']) != '') {
  include('../logincheck.php');
}
session_start();
include '../template/header.php';
?>

<body id="page-top">
  <div id="wrapper">
    <?php include 'sidebar.php'; ?>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <strong>Halo, </strong>
                  <?php if (isset($_SESSION['username']) != '') : echo $_SESSION['username'];
                  endif; ?>
                </span>
                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg" />
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../index.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>

        <div class="container-fluid">
          <?php
          include '../connection.php';
          error_reporting(0);
          switch ($_GET['page']) {
            case 'dashboard':
              $title = 'Dashboard';
              include 'dashboard.php';
              break;
            case 'unit-spesialis':
              $title = 'Unit Spesialis';
              include 'unit_spesialis.php';
              break;

            case 'mahasiswa-show':
              $title = 'Data Mahasiswa';
              include '../mahasiswa/show.php';
              break;
            case 'mahasiswa-add':
              $title = 'Input Data Mahasiswa';
              include '../mahasiswa/add.php';
              break;
            case 'mahasiswa-delete':
              include '../mahasiswa/delete.php';
              break;
            case 'mahasiswa-edit':
              $title = 'Edit Data Mahasiswa';
              include '../mahasiswa/edit.php';
              break;
            case 'mahasiswa-print':
              include '../mahasiswa/print.php';
              break;
            case 'mahasiswa-print2':
              include '../mahasiswa/print2.php';
              break;
            case 'mahasiswa-print2':
              include '../mahasiswa/print3.php';
              break;

            case 'dosen-show':
              $title = 'Data Dosen';
              include '../dosen/show.php';
              break;
            case 'dosen-add':
              $title = 'Input Data Dosen';
              include '../dosen/add.php';
              break;
            case 'dosen-delete':
              include '../dosen/delete.php';
              break;
            case 'dosen-edit':
              $title = 'Edit Data Dosen';
              include '../dosen/edit.php';
              break;
            case 'dosen-print':
              include '../dosen/print.php';
              break;
            case 'dosen-print2':
              include '../dosen/print2.php';
              break;
            case 'dosen-print2':
              include '../dosen/print3.php';
              break;


            case 'user-show':
              $title = 'Data User';
              include '../user/show.php';
              break;
            case 'user-add':
              $title = 'Input Data User';
              include '../user/add.php';
              break;
            case 'user-edit':
              $title = 'Edit Data User';
              include '../user/edit.php';
              break;
            case 'user-delete':
              include '../user/delete.php';
              break;

            case 'admin-logout':
              include 'logout.php';
              break;

            default:
              $title = 'Dashboard';
              include 'dashboard.php';
              break;
          }
          ?>
        </div>

        <?php include '../template/footer.php'; ?>

</body>

</html>