    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Speed Up Technical Mechanic Jump</span>
        </div>
      </div>
    </footer>
    </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout dari aplikasi?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Pilih "Logout" untuk melanjutkan keluar dari aplikasi.
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">
                Cancel
              </button>
              <a class="btn btn-primary" href="../index.php">Logout</a>
            </div>
          </div>
        </div>
      </div>

      <?php include 'js.php'; ?>

      <script>
        $(document).ready(function() {
          $('[data-bs-toggle="tooltip"]').tooltip();
        });
        $(document).ready(function() {
          $('#viewUser').DataTable();
        });
        $(document).ready(function() {
          $('#viewMahasiswa').DataTable({
            "columnDefs": [{
              "targets": [4, 5, 6, 7],
              "orderable": false
            }]
          });
        });

        $("#jenisKelamin,#jurusan,#prodi,#level").select2({
          theme: 'bootstrap4',
          placeholder: "- Pilih -"
        });
      </script>

      </body>

      </html>