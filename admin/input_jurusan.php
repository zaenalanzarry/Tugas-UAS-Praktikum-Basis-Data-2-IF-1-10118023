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
                        <h3 class="text-themecolor m-b-0 m-t-0">Input Data Jurusan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Input Data Jurusan</li>
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
                  <h3 class="box-title">Input Data Jurusan</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="simpan_jurusan.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
					<?php										
									$query = "SELECT max(id_jurusan) as maxKode FROM jurusan";
									$hasil = mysqli_query($koneksi,$query);
									$data = mysqli_fetch_array($hasil);
									$kodeAkun = $data['maxKode'];

									$noUrut = (int) substr($kodeAkun, 2, 3);

									// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
									$noUrut++;
									
									$char = "J";
									$kodeAkun = $char . sprintf("%02s", $noUrut);
									
				 ?>
                      <label for="exampleInputEmail1">Kode Jurusan</label>
                      <input type="text" class="form-control" name="id_jurusan" value="<?php echo $kodeAkun; ?>" readonly>
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Nama Jurusan</label>
                      <input type="text" class="form-control" name="nama_jurusan">
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Pilih Fakultas</label>
                      <select name="id_fakultas" id="select"  class="form-control">
						  <option disabled selected> Pilih </option>
						 <?php 
															 $result = mysqli_query($koneksi, "select * from fakultas");  
															 $jsArray = "var prdName = new Array();\n";
															 while ($row = mysqli_fetch_array($result)) {  
															 echo '<option name="id_fakultas"  value="' . $row['id_fakultas'] . '">' . $row['nama_fakultas'] . '</option>'; 
															  }
						 ?>
						  </select>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer" align="right">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
