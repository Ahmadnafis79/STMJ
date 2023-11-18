<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }

    table {
        border-collapse: collapse;
        border-color: black;
    }
</style>
<h2 align="center">Laporan Data Dosen</h2>
<div class="table-responsive mt-3">
    <table border="1" width="100%" align="center" cellpadding="8">
        <thead>
            <tr>
                <th width="10%">NIDN</th>
                <th width="50%">Nama</th>
                <th width="15%">Program Studi</th>
                <th width="10%">Telepon</th>
                <th width="10%">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../connection.php';
            $query = mysqli_query($con, 'SELECT * FROM dosen');
            while ($data = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td align="center"><?php echo $data['nidn']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td align="center"><?php echo $data['prodi']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td align="center"><?php echo $data['telepon']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<script>
    window.print();
</script>