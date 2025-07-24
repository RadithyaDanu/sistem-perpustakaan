	<section class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="proses/anggota-input-proses.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="id_anggota" class="col-sm-2 col-form-label">No Anggota</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="id_anggota"  id="id_anggota" placeholder="no Anggota">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Anggota</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama"  placeholder="nama Anggota">
                    </div>
                  </div>
                  				  <div class="form-group row">
                    <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div>
						<div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="jenis_kelamin" value="Pria" checked="">
                          <label for="customRadio1" class="custom-control-label">Pria</label>
                        </div>
						<div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="jenis_kelamin" value="Wanita">
                          <label for="customRadio2" class="custom-control-label">Wanita</label>
                        </div>
                    </div>
				  </div>
				  
				  <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10">
                      <textarea class="form-control" rows="3" placeholder="Enter ..." name="alamat"></textarea>
                    </div>
                  </div>
				  
                </div>
                 <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="pinter.unpam.ac.id">PINTER Unpam</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>