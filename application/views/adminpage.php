<!DOCTYPE html>
<html>
<head>
	<title> Profile Page</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="resources/css/adminpage.css" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
	<header>
      <div class="container-fluid">
        <div class="col-xs-9 header-container">
          <div class="pull-left">
            <!-- <div class="logo">
              <img src="#">
            </div> -->
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
              <a onclick="" href="#">Login</a>
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
    				<h4>Welcome, Satriowbw</h4>
    				<!-- put your images profile here -->
    				<img src="images/samplephoto.jpg">
    			</div>
    			<ul class="remove-dot list unstyled components">
    				<li class="active"><a href="#">HOME</a></li>
    				<li><a href="#">About</a></li>
   		 			<li><!-- Link with dropdown items-->
    					<a href="#homesubmenu" data-toggle="collapse" >Pages</a>
    					<ul class="remove-dot collapse list-unstyled" id="HomeSubmenu">
    						<li><a href="#">Page</a></li>
   							<li><a href="#">Page</a></li>
    						<li><a href="#">Page</a></li>
 						</ul>
 					</li>
    				<li><a href="#">Portofolio</a></li>
    				<li><a href="#">Contacts</a></li>
    			</ul>
    		</div>
    	</nav>
    	<div class="container">
    	<div class="row">
    		<div class="col-12 col-sm-8">
    			<div class="information-column container">
    				<div id="icon-information" class="row">
    					<div class="like col-sm">
    						gg
    					</div>
    					<div class="inbox col-sm">
    						gg
    					</div>
    					<div class="favourites col-sm">
    						gg
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="col-12 col-sm-4">
    			
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