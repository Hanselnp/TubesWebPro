<?php include('header.php'); ?>
<body>
	<?php include('navbar.php'); ?>
	<div class="wrapper">
		<!-- sidebar header-->
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
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8">
					<div class="information-column container">
						<div class="row icons">
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
				<div class="col-12 col-sm-4">
					<div class="notification-column container">
						<div class="row">
							<div class="notification-box">
								<div class="notification-title">
									<div class="notif-text">
										Notification
									</div>
								</div>
								<div class="container">
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
								<div class="readmore-title">
									<div class="notif-text">
										<a class="readmore" href="#">Show More &gt;&gt;</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
    <!--JavaScript & Jquery Init-->
    <?php include ('javascript-loader.php'); ?>
    </div>
</body>
<?php include('footer.php'); ?>
