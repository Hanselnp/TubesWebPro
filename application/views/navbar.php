<header>
  <div class="container-fluid">
    <div class="col-xs-9 header-container">
      <div class="pull-left">
        <div class="logo">
          <a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>resources/images/logo.png"></a>
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
            <li class="nav-item">
              <a class="nav-link" href="#">Merchandise</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="pull-right">
        <div class="search">
          <form id="searches" action="search" method="GET">
            <?php
              if (isset($_GET['searchq'])) {
                $searchq = $_GET['searchq'];
              } else {
                $searchq = "";
              };
            ?>
            <input placeholder="Cari komik" value="<?php echo $searchq ?>" name="searchq"><button class="search-button" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <div class="login">
          <a onclick="" href="<?php echo base_url(); ?>login">Login</a>
        </div>
      </div>
    </div>
  </div>
</header>
