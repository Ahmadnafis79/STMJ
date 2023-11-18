<?php
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM dosen WHERE id=$id");

while ($data = mysqli_fetch_array($result)) {

    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
}
if (isset($_POST['submit'])) {
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $update = mysqli_query($con, "UPDATE dosen SET nidn='$nidn',nama='$nama',prodi='$prodi',email='$email',telepon='$telepon' WHERE id=$id");


    echo "<script>window.location.href = '?page=dosen-show';</script>";
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
                            <input name="nidn" type="text" class="form-control" id="nidn" value="<?php echo $nidn; ?>" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jurusan" class="col-sm-2 col-form-label">Program Studi</label>
                        <div class="col-sm-10">
                            <select name="prodi" id="prodi" class="form-control" name="prodi" required>
                                <option disabled>- Pilih -</option>
                                <option value="TI" <?php if ($prodi == "TI") echo 'selected'; ?>>Teknik Informatika</option>
                                <option value="SI" <?php if ($prodi == "SI") echo 'selected'; ?>>Sistem Informasi</option>
                            </select>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="telepon" name="telepon" value="<?php echo $telepon; ?>" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="offset-sm-2">
                            <button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fas fa-save"></i>
                                Simpan</button>
                            <a href="?page=dosen-show" class="btn btn-sm btn-danger"><i class="fas fa-chevron-left"></i>Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>