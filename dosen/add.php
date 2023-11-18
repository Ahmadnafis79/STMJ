<?php
if (isset($_POST['submit'])) {
  $nidn = $_POST['nidn'];
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];
  $email = $_POST['email'];
  $telepon = $_POST['telepon'];
  $insert = mysqli_query($con, "INSERT INTO dosen(nidn,nama,fakultas,prodi,email,telepon) VALUES('$nidn','$nama','$prodi','$email','$telepon')");

  if ($insert) {
    echo "<script>window.location.href = '?page=dosen-show';</script>";
  } else echo 'gagal';
  // echo "<script>window.location.href = '?page=dosen-show';</script>";
}
?>

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
        <form method="POST">
          <div class="row mb-3">
            <label for="nim" class="col-sm-2 col-form-label">NIDN</label>
            <div class="col-sm-10">
              <input name="nidn" type="text" class="form-control" id="nidn" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
            <div class="col-sm-10">
              <select name="prodi" id="prodi" class="form-control" name="prodi" required>
                <option value="" selected>- Pilih -</option>
                <option value="TI">Teknik Informatika</option>
                <option value="SI">Sistem Informasi</option>
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="telepon" name="telepon">
            </div>
          </div>

          <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email" name="email">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="offset-sm-2">
              <button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fas fa-save"></i>
                Simpan</button>
              <button type="reset" class="btn btn-sm btn-danger"><i class="fas fa-times"></i> Batal</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>