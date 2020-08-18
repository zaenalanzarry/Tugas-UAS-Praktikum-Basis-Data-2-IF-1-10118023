<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();

if(!isset($_SESSION['username']))
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Update Data Mahasiswa</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Update Data Mahasiswa</li>
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
                  <h3 class="box-title">Update Data Mahasiswa</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="update_mahasiswa.php" method="post">
				 <?php
							$nim = $_GET['nim'];
							$query_mysqli = mysqli_query($koneksi,"select * from data_mahasiswa,jurusan WHERE data_mahasiswa.id_jurusan=jurusan.id_jurusan AND nim='$nim' ")or die(mysqli_error($koneksi));
							while($data = mysqli_fetch_array($query_mysqli)){
								
				?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIM</label>
                      <input type="text" class="form-control" name="nim" value="<?php echo $data['nim']; ?>">
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="nama_mhs" value="<?php echo $data['nama_mhs']; ?>">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Jurusan</label>
                      <select name="id_jurusan" id="select"  class="form-control">
						  <option value="<?php echo $data['id_jurusan']; ?>"><?php echo $data['nama_jurusan']; ?></option>
						 <?php 
															 $result = mysqli_query($koneksi, "select * from jurusan");  
															 $jsArray = "var prdName = new Array();\n";
															 while ($row = mysqli_fetch_array($result)) {  
															 echo '<option name="id_jurusan"  value="' . $row['id_jurusan'] . '">' . $row['nama_jurusan'] . '</option>'; 
															  }
						 ?>
						  </select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Jenjang</label>
                      <select name="jenjang" id="select"  class="form-control">
						  <option value="<?php echo $data['jenjang']; ?>"> <?php echo $data['jenjang']; ?> </option>
						  <option value="D3"> D1 </option>
						  <option value="S1"> S1 </option>
						  <option value="S2"> S2 </option>
						  </select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Semester</label>
                       <select name="semester" id="select"  class="form-control">
						  <option value="<?php echo $data['semester']; ?>"><?php echo $data['semester']; ?></option>
						  <option value="I"> I </option>
						  <option value="II"> II </option>
						  <option value="III"> III </option>
						  <option value="IV"> IV </option>
						  <option value="V"> V </option>
						  <option value="VI"> VI </option>
						  <option value="VII"> VII </option>
						  <option value="VIII"> VIII </option>
						  <option value="IX"> IX </option>
						  <option value="X"> X </option>
						  <option value="XI"> XI </option>
						  <option value="XII"> XII </option>
						  </select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Tempat Lahir</label>
                      <input type="text" class="form-control" name="tempat_lahir_mhs" value="<?php echo $data['tempat_lahir_mhs']; ?>">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tanggal_lahir_mhs" value="<?php echo $data['tanggal_lahir_mhs']; ?>">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Jenis Kelamin</label>
                      <input type="text" class="form-control" name="jk_mhs" value="<?php echo $data['jk_mhs']; ?>" Readonly>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Agama</label>
                      <input type="text" class="form-control" name="agama_mhs" value="<?php echo $data['agama_mhs']; ?>">
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
					  <small> (Sebagai password login anda)</small>
                      <input type="text" class="form-control" name="password" value="<?php echo $data['password']; ?>" >
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer" align="right">
                    <button type="update" name="update" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
							<?php } ?>

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
