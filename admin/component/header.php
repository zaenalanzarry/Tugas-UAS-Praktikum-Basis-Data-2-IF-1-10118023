        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">

                        <span>
                            <!-- dark Logo text -->
                            <p><b>Dashboard</b></p>
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
				<?php
							$sql='select username from admin where username="'.$_SESSION['username'].'"';
							$query = mysqli_query($koneksi,$sql);
							while($data = mysqli_fetch_array($query)){
								
				?>
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
					
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.png" alt="user" class="profile-pic m-r-5" />
							<b><?php echo $data ['username']; ?></b>
							</a>
						</li>
							<?php } ?>
						<li class="nav-item dropdown" align="right">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="logout.php">Logout</a>
						</li>
                    </ul>
                </div>
            </nav>
        </header>