<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>Premicom</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/read.css" rel="stylesheet">
</head>
<body>
	<header>
      <div class="container-fluid">
        <div class="col-xs-9 header-container">
          <div class="pull-left">
            <div class="logo">
              <img src="#">
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
              <input placeholder="Cari komik"><div class="search-button"><i class="fas fa-search"></i></div>
            </div>
            <div class="login">
              <a onclick="" href="#">Login</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="content">
    	<div class="container-fixed clearfix">
    		<div class="col-md-12 col-top clearfix col-top-1" style="position:relative;">
    			<div id="chaplist" class="pull-left">
    				<select name="list-chapter" class="input-sm jump-menu" style="display: inline-block;">
    					<option value="#">Kembali ke menu Manga </option>
    					<option value="#">Chapter 1 </option>
    					<option value="#">Chapter 2 </option>
    					<option value="#">Chapter 3 </option>
    					<option value="#">Chapter 4 </option>
    					<option value="#">Chapter 5 </option>
    				</select>
    				<div id="infor" class="pull-left">
	               		<a href="#" class="btn btn-xs btn-default" style="padding:0px;margin-top: -10px;">
	                		<i class="fas fa-info" style="color: black; margin-top: 10px;"></i>
	                	</a>
	                </div>
    			</div>
    			<div class="pull-right" id="tombolain">
    				<ul class="user-btns">
    					<li href="#" id="subsc" class="btn"> Subscribe </li>
    					<li href="#" id="readlater" class="btn"> Read Later</li>
    					<li href="#" id="addfav" class="btn"> Add to Favourites</li>
    				</ul>
    			</div>
    		</div>
    	<img src="comic/e1.jpg">
    	<div class="space"></div>
    	<img src="comic/e2.jpg">
    	<div class="space"></div>
    	<img src="comic/e3.jpg">
    	<div class="space"></div>
    	</div>
    	<div id="discussion" class="container-fixed clearfix" style="text-align: left;">
        <div class="text"> Katakan Sesuatu</div>
        <div class="line"></div>
        <div class="commentcounter">3 Comments
          <i class="fab fa-discourse" style="font-size: 25px;"></i><a href="#" class="login" style="color: black">Masuk</a>
        </div>
        <div class="line"></div>
        <div class="share"> Bagikan </div>
        <div class="comment1">
          <img src="profile/becak.jpg" style="margin-top: 10px;margin-left: 55px;width: 50px;height: 50px; border-radius: 5px;">
          <div class="nameprofile" style="margin-left: 110px;margin-top: -55px;color: blue; font-family: roboto"> TukangBecak <div style="color: black;display: inline-block;">• 3 hari yang lalu</div></div>
          <div class="pesan" style="margin-left: 120px; margin-top: -5px;">yang begini nih emang mantep dah, ditunggu kelanjutannyaa ...</div>
          <div class="likes" style="margin-left: 110px; margin-top: 0px"><i class="far fa-thumbs-up"></i> 18<i class="far fa-thumbs-down" style="margin-left: 7px"></i> 7  •Balas  •Bagikan ›</div>
        </div>
        <hr>
        <div class="comment2">
          <img src="profile/tukangroti.jpg" style="margin-top: 10px;margin-left: 55px;width: 50px;height: 50px; border-radius: 5px;">
          <div class="nameprofile" style="margin-left: 110px;margin-top: -55px;color: blue; font-family: roboto"> TukangRoti22 <div style="color: black;display: inline-block;">• 5 hari yang lalu</div></div>
          <div class="pesan" style="margin-left: 120px; margin-top: -5px;">wih keren nih, masukin daftar favorit laahh!!</div>
          <div class="likes" style="margin-left: 110px; margin-top: 0px"><i class="far fa-thumbs-up"></i> 21<i class="far fa-thumbs-down" style="margin-left: 7px"></i> 4  •Balas  •Bagikan ›</div>
        </div>
        <hr>
        <div class="comment3">
          <img src="profile/odongodong.jpg" style="margin-top: 10px;margin-left: 55px;width: 50px;height: 50px; border-radius: 5px;">
          <div class="nameprofile" style="margin-left: 110px;margin-top: -55px;color: blue; font-family: roboto"> DongodongStanding <div style="color: black;display: inline-block;">• 6 hari yang lalu</div></div>
          <div class="pesan" style="margin-left: 120px; margin-top: -5px;">kalo ada op nya nanti di setel di odong odong saya bole?</div>
          <div class="likes" style="margin-left: 110px; margin-top: 0px"><i class="far fa-thumbs-up"></i> 29<i class="far fa-thumbs-down" style="margin-left: 7px"></i> 10  •Balas  •Bagikan ›</div>
        </div>
    	</div>
      <div class="space"></div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
	</script>
  	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>