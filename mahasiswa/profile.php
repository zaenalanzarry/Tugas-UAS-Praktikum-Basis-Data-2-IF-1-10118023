<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();

if(!isset($_SESSION['nim']))
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- Custom tabs (Charts with tabs)-->
            
              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-body">
                  <ul class="todo-list">
				  
				
				<div class="box-body table-responsive no-padding">
				<strong><h3> Biodata Personal </h3><strong>
				
				  <?php
							$sql='select * from data_mahasiswa where nim="'.$_SESSION['nim'].'"';
							$query = mysqli_query($koneksi,$sql);
							while($data = mysqli_fetch_array($query)){
								
				?>
				
				  <span class="box-title">&nbsp Untuk Edit Klik <a href="edit_mahasiswa.php?nim=<?php echo $data['nim']; ?>">Disini!</a></span>

				  
                  <table class="table table-hover">
                    <tr>
                      <th>NIM</th>
                      <td><?php echo $data['nim']; ?></td>
                    </tr>
                    <tr>
                      <th>Nama</th>
                      <td><?php echo $data['nama_mhs']; ?></td>
                    </tr>
                    <tr>
                      <th>Tempat Lahir</th>
                      <td><?php echo $data['tempat_lahir_mhs']; ?></td>
                    </tr>
                    <tr>
                      <th>Tanggal Lahir</th>
                      <td><?php echo $data['tanggal_lahir_mhs']; ?></td>
                    </tr>
					<tr>
                      <th>Jenis Kelamin</th>
                      <td><?php echo $data['jk_mhs']; ?></td>
                    </tr>
					<tr>
                      <th>Agama</th>
                      <td><?php echo $data['agama_mhs']; ?></td>
                    </tr>
					<tr>
                      <th>Email</th>
                      <td><?php echo $data['alamat_mhs']; ?></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
				
							<?php } ?>
							
				  		
				<div class="box-body table-responsive no-padding">
				<strong><h3> Biodata Akademik </h3><strong>
				<?php
							$sql='select * from data_mahasiswa,jurusan where data_mahasiswa.id_jurusan=jurusan.id_jurusan AND data_mahasiswa.nim="'.$_SESSION['nim'].'"';
							$query = mysqli_query($koneksi,$sql);
							while($data = mysqli_fetch_array($query)){
								
				?> 
                  <table class="table table-hover">
                    <tr>
                      <th>Program Studi</th>
                      <td><?php echo $data['nama_jurusan']; ?></td>
                    </tr>				
				    <tr>
                      <th>Jenjang</th>
                      <td><?php echo $data['jenjang']; ?></td>
                    </tr>
					<tr>
                      <th>Semester</th>
                      <td><?php echo $data['semester']; ?></td>
                    </tr>
							<?php } ?>
                  </table>
                </div><!-- /.box-body -->
				
				  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  

            </div><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
           
			</div><!-- /.content-wrapper -->
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
