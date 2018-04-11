<?php include('header.php'); ?>
<body>
	<?php include('navbar.php'); ?>
	<div class="wrapper">
		<!-- sidebar header-->
		<!-- <div class="container-fluid"> -->
			<!-- <div class="row"> -->
				<div style="width: 100%;">
					<nav class="mCustomScrollbar _mCS_1 mCS-autohide" id="sidebar" style="overflow: visible;">
						<div class="sidebar-inner-container">
							<div class="sidebar-header">
							<h4>Dummy123</h4><!-- put your images profile here -->
							<img src="<?php echo base_url(); ?>resources/images/samplephoto.jpg"></div>
							<ul class="remove-dot list unstyled components">
								<li class="active">
									<a href="#"><i class="fas fa-home"></i> Beranda</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>adminpage/comic"><i class="fas fa-book"></i> Komik</a>
								</li>
								<li>
									<!-- Link with dropdown items-->
									<a data-toggle="collapse" href="#homesubmenu"><i class="fas fa-upload"></i> Unggah Komik</a>
									<ul class="remove-dot collapse list-unstyled" id="HomeSubmenu">
										<li>
											<a href="#">Page</a>
										</li>
										<li>
											<a href="#">Page</a>
										</li>
										<li>
											<a href="#">Page</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="fas fa-edit"></i> Update Profil</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-cog"></i> Pengaturan</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<div class="col-12 col-sm-10">
					<div class="container" style="padding-bottom: 30px;">
						<div class="row">
							<div class="col-12 col-sm-7">
								<div class="row">
									<div class="col-12 col-sm-12">
										<div class="container box-container">
											<div class="box-head">
												<div class="row">
													Stats
												</div>
											</div>
											<div class="box-body">
												<div class="row box-body-row">
													<div class="col-sm icons-container">
														<i class="far fa-thumbs-up"></i>
														<div class="counter">
															187
														</div>
													</div>
													<div class="col-sm icons-container">
														<i class="fas fa-inbox"></i>
														<div class="counter">
															32
														</div>
													</div>
													<div class="col-sm icons-container">
														<i class="far fa-heart"></i>
														<div class="counter">
															73
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12 col-sm-6">
										<div class="container box-container">
											<div class="box-head">
												<div class="row">
													Jumlah Pembaca Komik
												</div>
											</div>
											<div class="box-body">
												<div class="row box-body-row">
													<canvas id="myChart" width="400" height="200"></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="container box-container">
											<div class="box-head">
												<div class="row">
													Daftar Pesanan
												</div>
											</div>
											<div class="box-body">
												<div class="row box-body-row">
													<div class="row mt-2 mb-2">
														<div class="col-2 notification-clock">
															<i class="far fa-clock"></i>
														</div>
														<div class="col-10 notification-msg-container">
															<div class="row no-gutters notification-time">
																1 minutes
															</div>
															<div class="row no-gutters notification-msg">
																<a class="profile-comments" href="#">Satrio Wibowo</a> telah menyukai komik kamu!
															</div>
														</div>
													</div>
													<hr>
													<div class="row mt-2 mb-2">
														<div class="col-2 notification-clock">
															<i class="far fa-clock"></i>
														</div>
														<div class="col-10 notification-msg-container">
															<div class="row no-gutters notification-time">
																4 minutes
															</div>
															<div class="row no-gutters notification-msg">
																<a class="profile-comments" href="#">Bagus Satrio</a> telah berlangganan komik kamu!
															</div>
														</div>
													</div>
													<hr>
													<div class="row mt-2 mb-2">
														<div class="col-2 notification-clock">
															<i class="far fa-clock"></i>
														</div>
														<div class="col-10 notification-msg-container">
															<div class="row no-gutters notification-time">
																5 minutes
															</div>
															<div class="row no-gutters notification-msg">
																<a class="profile-comments" href="#">Satrio Wibowo</a> telah menyukai komik kamu!
															</div>
														</div>
													</div>
													<hr>
													<div class="row mt-2 mb-2">
														<div class="col-2 notification-clock">
															<i class="far fa-clock"></i>
														</div>
														<div class="col-10 notification-msg-container">
															<div class="row no-gutters notification-time">
																6 minutes
															</div>
															<div class="row no-gutters notification-msg">
																<a class="profile-comments" href="#">David Ferdinand</a> telah menyukai komik kamu!
															</div>
														</div>
													</div>
													<hr>
													<div class="row mt-2 mb-2">
														<div class="col-2 notification-clock">
															<i class="far fa-clock"></i>
														</div>
														<div class="col-10 notification-msg-container">
															<div class="row no-gutters notification-time">
																9 minutes
															</div>
															<div class="row no-gutters notification-msg">
																<a class="profile-comments" href="#">Hansel Nathanael</a> telah berlangganan komik kamu!
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="box-footer">
												<div class="row">
													<a href="#">See more</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-5">
								<div class="container box-container">
									<div class="box-head">
										<div class="row">
											Daftar Pesanan
										</div>
									</div>
									<div class="box-body">
										<div class="row box-body-row">
											<div class="form-container">
												<div class="form-container-head">
													Comic 1
												</div>
												<div class="form-container-content">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</div>
											</div>
										</div>
										<div class="row box-body-row">
											<div class="form-container">
												<div class="form-container-head">
													AA
												</div>
												<div class="form-container-content">
													BB
												</div>
											</div>
										</div>
										<div class="row box-body-row">
											<div class="form-container">
												<div class="form-container-head">
													AA
												</div>
												<div class="form-container-content">
													BB
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- </div> -->
		<!-- </div> -->
  </div>
	<!--JavaScript & Jquery Init-->
	<?php include ('javascript-loader.php'); ?>
</body>
<?php include('footer.php'); ?>
