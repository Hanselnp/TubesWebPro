<!DOCTYPE html>
<html>
<head>
	<title> Profile Page</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="../resources/css/adminpage.css" rel="stylesheet">
	<link href="../resources/css/main.css" rel="stylesheet">
	<script src="../resources/js/fontawesome.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
	<header>
      <div class="container-fluid">
        <div class="col-xs-9 header-container">
          <div class="pull-left">
						<div class="logo">
		          <a href="../home"><img src="../resources/images/logo.png"></a>
		        </div>
            <div class="menu">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Rilisan Harian</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Genre</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Beli Komik</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="pull-right">
            <div class="search">
							<form id="searches" method="POST">
	              <input placeholder="Cari komik"><button class="search-button" type="submit"><i class="fas fa-search"></i></button>
							</form>
            </div>
            <div class="login">
              <a onclick="" href="#">Dummy123</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="wrapper">
    	<!-- sidebar header-->
    	<nav id="sidebar" class="mCustomScrollbar _mCS_1 mCS-autohide" style="overflow: visible;">
    		<div class="sidebar-inner-container">
    			<div class="sidebar-header">
    				<h4>Dummy123</h4>
    				<!-- put your images profile here -->
    				<img src="../resources/images/samplephoto.jpg">
    			</div>
    			<ul class="remove-dot list unstyled components">
    				<li class="active"><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
    				<li><a href="#"><i class="fas fa-book"></i> Komik</a></li>
   		 			<li><!-- Link with dropdown items-->
    					<a href="#homesubmenu" data-toggle="collapse" ><i class="fas fa-upload"></i> Unggah Komik</a>
    					<ul class="remove-dot collapse list-unstyled" id="HomeSubmenu">
    						<li><a href="#">Page</a></li>
   							<li><a href="#">Page</a></li>
    						<li><a href="#">Page</a></li>
 						</ul>
 					</li>
    				<li><a href="#"><i class="fas fa-edit"></i> Update Profil</a></li>
    				<li><a href="#"><i class="fas fa-cog"></i> Pengaturan</a></li>
    			</ul>
    		</div>
    	</nav>
    	<div class="container">
    	<div class="row">
    		<div class="col-12 col-sm-8">
    			<div class="information-column container">
    				<div id="icon-information" class="row">
    					<div class="like col-sm">
                            <div class="like-infor">
    					       <i id="like" class="far fa-thumbs-up"></i>
                               <div class="space"></div>
                               <div class="like-counter">187</div>
                            </div>
    					</div>
    					<div class="inbox col-sm">
                            <div class="inbox-infor">
                                <i id="inbox" class="fas fa-inbox"></i>
                                <div class="space"></div>
                                <div class="inbox-counter">32</div>
                            </div>
    					</div>
    					<div class="favourites col-sm">
    						<div class="fav-infor">
                                <i id="fav" class="far fa-heart"></i>
                                <div class="space"></div>
                                <div class="fav-counter">73</div>
                            </div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="col-12 col-sm-4">
    			<div class="notification-column container">
                    <div class="notification-box">
                        <div class="notification-title">
                            <div class="notif-text">Notification</div>
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
                            <div class="notif-text"><a class="readmore" href="#">Show More >></a></div>
                        </div>
                    </div>
                </div>
    		</div>
    	</div>
    </div>
    </div>
    <!--JavaScript & Jquery Init-->
    <script>
	</script>
    </div>
</body>
</html>
