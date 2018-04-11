<!DOCTYPE html>
<html>
  <head>
    <title>Your comics</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  	<link href="<?php echo base_url(); ?>resources/css/adminpage.css" rel="stylesheet">
  	<link href="<?php echo base_url(); ?>resources/css/main.css" rel="stylesheet">
  	<script src="<?php echo base_url(); ?>resources/js/fontawesome.js"></script>
  	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  </head>
  <?php include ('navbar.php'); ?>
  <body>
    <div class="wrapper">
      <nav id="sidebar" class="mCustomScrollbar _mCS_1 mCS-autohide" style="overflow: visible;" >
        <div class="sidebar-inner-container">
          <div class="sidebar-header">
            <h4>Dummy123</h4>
            <!-- put your images profile here -->
            <img src="<?php echo base_url(); ?>resources/images/samplephoto.jpg">
          </div>
          <ul class="remove-dot list unstyled components">
            <li class="active"><a href="<?php echo base_url(); ?>adminpage"><i class="fas fa-home"></i> Beranda</a></li>
            <li><a href="<?php echo base_url(); ?>adminpage/comic"><i class="fas fa-book"></i> Komik</a></li>
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
    </div>
  </body>
</html>
