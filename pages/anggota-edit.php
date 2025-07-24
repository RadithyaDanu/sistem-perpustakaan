	<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
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
                <h3 class="card-title">Input data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="proses/anggota-edit-proses.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No Anggota</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="id_anggota"  id="id_anggota" 
					  placeholder="no Anggota" value="<?php echo $r_tampil_anggota['idanggota']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Anggota</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama"  
					  placeholder="nama Anggota" value="<?php echo $r_tampil_anggota['nama']; ?>">
                    </div>
                  </div>
                  
				  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-10">
					<?php
					if($r_tampil_anggota['jeniskelamin']=="Pria"){?>
						<div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="jenis_kelamin" value="Pria" checked="">
                          <label for="customRadio1" class="custom-control-label">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="jenis_kelamin" value="Wanita">
                          <label for="customRadio2" class="custom-control-label">Perempuan</label>
                        </div>
					<?php }else{?>
						<div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="jenis_kelamin" value="Pria">
                          <label for="customRadio1" class="custom-control-label">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="jenis_kelamin" value="Wanita" checked="">
                          <label for="customRadio2" class="custom-control-label">Perempuan</label>
                        </div>
					<?php }?>
                    </div>
				  </div>
				  
				  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10">
                      <textarea class="form-control" rows="3" placeholder="Enter ..." name="alamat">
					  <?php echo $r_tampil_anggota['alamat']; ?></textarea>
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