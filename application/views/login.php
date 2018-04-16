<?php include('header.php'); ?>
<body>
  <div class="login-box" id="login-box">
    <div class="form-container">
      <div class="form-container-content" style="text-align: center; padding: 15px 0 15px 0;">
        <a href="home"><img src="<?php echo base_url(); ?>resources/images/logo.png" style="width: 50%;"></a>
      </div>
    </div>
    <hr />
    <form method="post" action="<?php echo base_url(); ?>login/auth">
    <div class="form-container">
      <div class="form-container-head">
        Username
      </div>
      <div class="form-container-content">
        <input type="text" name="username" placeholder="Username">
      </div>
    </div>
    <div class="form-container">
      <div class="form-container-head">
        Password
      </div>
      <div class="form-container-content">
        <input type="password" name="password" placeholder="Password">
      </div>
    </div>
    <div class="form-container">
      <div class="form-container-content">
        <button type="submit">Login</button>
      </div>
    </div>
  </div>
  <?php include('javascript-loader.php'); ?>
</body>
<?php include('footer.php'); ?>
