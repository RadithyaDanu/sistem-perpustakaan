	<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tb_buku WHERE id_buku='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	
?>
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
                <h3 class="card-title">Edit data Buku</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="proses/buku-edit-proses.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">id buku</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="id_buku"  id="id_anggota" placeholder="no buku" value="<?php echo $r_tampil_anggota['id_buku']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="judul_buku" id="nama"  placeholder="Judul Buku" value="<?php echo $r_tampil_anggota['judul_buku']; ?>">
                    </div>
                  </div>
                  
				  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kategori</label>
					<div class="col-sm-10">
                      <input type="text" class="form-control" name="kategori" id="nama"  placeholder="Kategori" value="<?php echo $r_tampil_anggota['Kategori']; ?>">
                    </div>
				  </div>
				  
				  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Pengarang</label>
					<div class="col-sm-10">
                      <input type="text" class="form-control" name="pengarang" id="nama"  placeholder="Pengarang" value="<?php echo $r_tampil_anggota['pengarang']; ?>">
                    </div>
                  </div>
				  
				  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Penerbit</label>
					<div class="col-sm-10">
                      <input type="text" class="form-control" name="penerbit" id="nama"  placeholder="Penerbit" value="<?php echo $r_tampil_anggota['penerbit']; ?>">
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