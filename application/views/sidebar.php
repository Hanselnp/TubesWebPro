  <nav id="sidebar" class="mCustomScrollbar _mCS_1 mCS-autohide" style="overflow: visible;" >
    <div class="sidebar-inner-container">
      <div class="sidebar-header">
        <h4>Dummy123</h4>
        <!-- put your images profile here -->
        <img src="<?php echo base_url(); ?>resources/images/samplephoto.jpg">
      </div>
      <ul class="remove-dot list unstyled components">
        <li class="active"><a href="<?php echo base_url(); ?>adminpage"><i class="fas fa-home"></i> Beranda</a></li>
        <li><a href="<?php echo base_url(); ?>adminpage/comics"><i class="fas fa-book"></i> Comics</a></li>
        <li>                                                          
          <a href="<?php echo base_url(); ?>adminpage/upload_comic" ><i class="fas fa-upload"></i> Upload Comic</a>
          <ul class="remove-dot collapse list-unstyled" id="HomeSubmenu">
            <li><a href="#">Page</a></li>
            <li><a href="#">Page</a></li>
            <li><a href="#">Page</a></li>
        </ul>
      </li>
        <li><a href="<?php echo base_url(); ?>adminpage/update_profile"><i class="fas fa-edit"></i> Update Profile</a></li>
        <li><a href="<?php echo base_url(); ?>adminpage/settings"><i class="fas fa-cog"></i> Settings</a></li>
      </ul>
    </div>
  </nav>
