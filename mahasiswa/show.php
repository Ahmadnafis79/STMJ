<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
</div>

<div class="row">
  <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Mahasiswa</h6>

      </div>
      <div class="card-body">
        <a href="?page=mahasiswa-add" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="../mahasiswa/print.php" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-print"></i>
          Cetak
          FPDF</a>
        <a href="../mahasiswa/print2.php" class="btn btn-sm btn-warning" target="_blank"><i class="fas fa-print"></i>
          Cetak
          window.print</a>
        <hr>

        <div class="table-responsive mt-3">
          <table class="table table-bordered table-hover" id="viewMahasiswa" style="width: 100%">
            <thead>
              <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php
              include '../connection.php';
              $query = mysqli_query($con, 'SELECT * FROM mahasiswa');
              while ($data = mysqli_fetch_array($query)) { ?>

                <tr>
                  <td><?php echo $data['nim']; ?></td>
                  <td class="text-nowrap"><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['jurusan']; ?></td>
                  <td><?php echo $data['jenis_kelamin']; ?></td>
                  <td><?php echo $data['alamat']; ?></td>
                  <td><?php echo $data['telepon']; ?></td>
                  <td><?php echo $data['email']; ?></td>
                  <td>
                    <a class="btn text-primary" href="?page=mahasiswa-edit&id=<?php echo $data['id']; ?>"><i class="fas fa-edit"></i>
                    </a>
                    <a class="btn text-danger" href="?page=mahasiswa-delete&id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fas fa-trash"></i>
                    </a>
                    <a class="btn text-success" href="../mahasiswa/print3.php?id=<?php echo $data['id']; ?>" target="_blank"><i class="fas fa-print"></i>
                    </a>
                  </td>
                </tr>

              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>