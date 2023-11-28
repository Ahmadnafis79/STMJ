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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<style>
        .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custom-checkbox {
            display: none;
        }

        .custom-checkbox-label {
            background-color: #ddd;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 8px 16px;
            cursor: pointer;
            position: relative;
        }

        .custom-checkbox:checked + .custom-checkbox-label {
            background-color: #28a745;
            color: #fff;
        }

        .custom-checkbox-label .fas {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .custom-checkbox:checked + .custom-checkbox-label .fas {
            display: inline-block;
        }

        .custom-checkbox:not(:checked) + .custom-checkbox-label .far {
            display: inline-block;
        }
    </style>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
</div>
<div class="row">
  <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header">
        <!-- <h6 class="m-0 font-weight-bold text-primary">Dosen</h6> -->
        <form method="POST">
          <div class="row mb-3">
            <label for="level" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <select name="level" id="level" class="form-control" name="level" required>
                <option value="-" selected disabled>- Pilih -</option>
                <option value="UT">AGUS SUPRIYANTO</option>
                <option value="UTSchool">UTSchool</option>
                <option value="Customer">Customer</option>
                <option value="Admin">Admin</option>
              </select>
            </div>
            </div>
            </form>

      </div>
      <div class="card-body">
        <form method="POST">
        <table class="table table-bordered" align="center">
        <thead>
            <tr>
            <th scope="col" align="center">No</th>
            <th scope="col">Kompetensi</th>
            <th scope="col">Sub Kompetensi</th>
            <th scope="col">Fungsi</th>
            <th scope="col">Cara Kerja</th>
            <th scope="col">Posisi / Lokasi</th>
            <th scope="col">Potensi Rusak</th>
            <th scope="col">Akibatnya</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="4">1</td>
                <td rowspan="4">Exhaust System</td>
                <!-- Air Cleaner -->
                <td>Air Cleaner</td>
                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aircleaner1">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aircleaner1">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aircleaner2">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aircleaner2">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aircleaner3">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aircleaner3">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aircleaner4">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aircleaner4">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aircleaner5">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aircleaner5">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>
            </tr>

            <!-- Turbocharger  -->
            <tr>
                <td>Turbocharger</td>
                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="turbocharger1">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="turbocharger1">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="turbocharger2">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="turbocharger2">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="turbocharger3">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="turbocharger3">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="turbocharger4">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="turbocharger4">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="turbocharger5">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="turbocharger5">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>
            </tr>

            <!-- After Cooler -->
            <tr>
                <td>After Cooler</td>
                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aftercooler1">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aftercooler1">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aftercooler2">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aftercooler2">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aftercooler3">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aftercooler3">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aftercooler4">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aftercooler4">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aftercooler5">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aftercooler5">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>
            </tr>

            <!-- EGR System -->
            <tr>
                <td>EGR System</td>
                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="egrsystem1">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="egrsystem1">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="egrsystem2">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="egrsystem2">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="egrsystem3">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="egrsystem3">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="egrsystem4">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="egrsystem4">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="egrsystem5">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="egrsystem5">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>
            </tr>


            <tr>
                <td rowspan="4">1</td>
                <td rowspan="4">Exhaust System</td>
                <!-- Air Cleaner -->
                <td>Air Cleaner</td>
                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aircleaner1">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aircleaner1">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aircleaner2">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aircleaner2">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aircleaner3">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aircleaner3">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aircleaner4">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aircleaner4">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aircleaner5">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aircleaner5">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>
            </tr>

            <!-- Turbocharger  -->
            <tr>
                <td>Turbocharger</td>
                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="turbocharger1">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="turbocharger1">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="turbocharger2">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="turbocharger2">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="turbocharger3">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="turbocharger3">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="turbocharger4">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="turbocharger4">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="turbocharger5">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="turbocharger5">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>
            </tr>

            <!-- After Cooler -->
            <tr>
                <td>After Cooler</td>
                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aftercooler1">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aftercooler1">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aftercooler2">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aftercooler2">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aftercooler3">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aftercooler3">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aftercooler4">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aftercooler4">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="aftercooler5">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="aftercooler5">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>
            </tr>

            <!-- EGR System -->
            <tr>
                <td>EGR System</td>
                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="egrsystem1">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="egrsystem1">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="egrsystem2">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="egrsystem2">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="egrsystem3">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="egrsystem3">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="egrsystem4">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="egrsystem4">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>

                <td>
                    <div class="checkbox-container">
                        <input type="checkbox" class="custom-checkbox" id="egrsystem5">
                        <label class="btn btn-outline-primary custom-checkbox-label" for="egrsystem5">
                            <i class="fas fa-check"></i>
                            <i class="far fa-square"></i>
                        </label>
                    </div>
                </td>
            </tr>

            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
        </table>          <hr>
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>