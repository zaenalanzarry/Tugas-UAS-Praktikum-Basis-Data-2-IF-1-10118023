<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();

if(!isset($_SESSION['nip']))
{
    header("location:../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<?php include 'component/head.php'; ?>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
<?php include 'component/header.php'; ?>
<?php include 'component/menu.php'; ?>
			 
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Update Data Dosen</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Update Data Dosen</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
        <!-- Main content -->
        <section class="content">
         
          <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Update Data Dosen</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="update_dosen.php" method="post">
				 <?php
							$nip = $_GET['nip'];
							$query_mysqli = mysqli_query($koneksi,"select * from data_dosen WHERE nip='$nip'")or die(mysqli_error($koneksi));
							while($data = mysqli_fetch_array($query_mysqli)){
								
				?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIP</label>
                      <input type="text" class="form-control" name="nip" value="<?php echo $data ['nip']; ?>" readonly >
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="nama_dosen" value="<?php echo $data ['nama_dosen']; ?>" >
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Tempat Lahir</label>
                      <input type="text" class="form-control" name="tempat_lahir_dosen" value="<?php echo $data ['tempat_lahir_dosen']; ?>"  >
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tanggal_lahir_dosen" value="<?php echo $data ['tanggal_lahir_dosen']; ?>"  >
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Alamat</label>
                      <input type="text" class="form-control" name="alamat_dosen" value="<?php echo $data ['alamat_dosen']; ?>"  >
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Kelamin</label>
                      <select name="jk_dosen" id="select" class="form-control">
					  <option value="<?php echo $data ['jk_dosen']; ?>"> <?php echo $data ['jk_dosen']; ?> </option>
					  <option value="L">Laki-Laki</option>
					  <option value="P">Perempuan</option>
					  </select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Agama</label>
                      <select name="agama_dosen" id="select" class="form-control">
					  <option value="<?php echo $data ['agama_dosen']; ?>"> <?php echo $data ['agama_dosen']; ?> </option>
					  <option value="Islam">Islam</option>
					  <option value="Kristen">Kristen</option>
					  <option value="Hindu">Hindu</option>
					  <option value="Budha">Budha</option>
					  <option value="Konghucu">Konghucu</option>
					  </select>
                    </div>

                  </div><!-- /.box-body -->
							<?php } ?>

                  <div class="box-footer" align="right">
                    <button type="update" name="update" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div>
          </div>
		</section>
	  
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Charts JavaScript -->
    <script src="../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="js/flot-data.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
