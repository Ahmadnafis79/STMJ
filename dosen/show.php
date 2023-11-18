<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
</div>

<div class="row">
  <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Dosen</h6>

      </div>
      <div class="card-body">
        <a href="?page=dosen-add" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="../dosen/print.php" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-print"></i>
          Cetak
          FPDF</a>
        <a href="../dosen/print2.php" class="btn btn-sm btn-warning" target="_blank"><i class="fas fa-print"></i>
          Cetak
          window.print</a>
        <hr>

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover" id="data">
            <thead>
              <tr>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Fakultas</th>
                <th>Program Studi</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php
              include '../connection.php';
              $query = mysqli_query($con, 'SELECT * FROM dosen');
              while ($data = mysqli_fetch_array($query)) { ?>

                <tr>
                  <td><?php echo $data['nidn']; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['fakultas']; ?></td>
                  <td><?php echo $data['prodi']; ?></td>
                  <td><?php echo $data['email']; ?></td>
                  <td><?php echo $data['telepon']; ?></td>
                  <td>
                    <a class="btn btn-sm btn-primary my-1" href="?page=dosen-edit&id=<?php echo $data['id']; ?>"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-sm btn-danger my-1" href="?page=dosen-delete&id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>

              <?php $no++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>