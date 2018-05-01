<?php include ('header.php'); ?>
  <body>
    <?php include ('admin_navbar.php'); ?>
      <div class="wrapper">
        <?php include ('sidebar.php'); ?>
        <div class="col-12 col-sm-10">
					<div class="container" style="padding-bottom: 30px;">
						<!-- Editable Here -->
            <div class="row">
              <div class="col-12 col-md-8">
                <div class="container box-container">
                  <div class="box-head">
                    <div class="row">
                      Upload Episode Baru
                    </div>
                  </div>
                  <div class="box-body">
                    <form id="uploadNewEpisode" method="post">
                      <div class="row box-body-row">
                          <div class="form-container">
                            <div class="form-container-head">
                              Judul Episode
                            </div>
                		        <div class="form-container-content">
                							<input type="text" name="title" placeholder="Judul Episode">
                		        </div>
                          </div>
                          <input type="hidden" name="id" value="<?php  echo $id; ?>">
                          <input type="hidden" name="epNum" value="<?php  echo $epNum; ?>">
                          <div class="form-container">
                		        <div class="form-container-content">
                							<div class="uploader">
                									<div class='dz-default dz-message up-message-center no-full'>
                											<div>
                													<i class='fas fa-upload'></i> <br />
                                          <br />
                													Tarik file atau klik untuk mengupload komik.<br />
                													Cover yang diupload harus memiliki rasio 3:2 (landscape) dan berukuran masing-masing dibawah 1MB
                											</div>
                									</div>
                							</div>
                		        </div>
                		      </div>
                          <div class="form-container">
                		        <button type="submit" name="button">Upload Episode Baru</button>
                		      </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="container box-container">
                  <div class="box-head">
                    <div class="row">
                      Edit Komik
                    </div>
                  </div>
                  <div class="box-body">
                    <div class="row box-body-row">
                      <div class="form-container">
                        <div class="form-container-head">
                          Judul Serial
                        </div>
                        <div class="form-container-content">
                          Judul Komiknya Bakalan Disini
                        </div>
                      </div>
                      <div class="form-container">
                        <div class="form-container-head">
                          Episode Terpublish
                        </div>
                        <div class="form-container-content">
                          1
                        </div>
                      </div>
                      <div class="form-container">
                        <div class="form-container-head">
                          Sinopsis
                        </div>
                        <div class="form-container-content">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                      </div>
                      <div class="form-container modal-episodes">
                        <div class="form-container-head">
                          Episode
                        </div>
                        <div class="form-container-content comic_episodes">
                          <div class="row">
                            <div class="col-12">
                              <img class="episodes-thumbnails" src="<?php echo base_url() ?>resources/images/Bastard.jpg"/> <b>#1</b> Kabarmu dan dia
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <img class="episodes-thumbnails" src="<?php echo base_url() ?>resources/images/Bastard.jpg"/> <b>#1</b> Kabarmu dan dia
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <img class="episodes-thumbnails" src="<?php echo base_url() ?>resources/images/Bastard.jpg"/> <b>#1</b> Kabarmu dan dia
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <img class="episodes-thumbnails" src="<?php echo base_url() ?>resources/images/Bastard.jpg"/> <b>#1</b> Kabarmu dan dia
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include('javascript-loader.php'); ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.js"></script>
      <script type="text/javascript">
        createComicPageUploader(".uploader"); //Upload New Episode -- Upload Komik
      </script>
      <script>
        $("#uploadNewEpisode").on("submit", function(e) {
          e.preventDefault();
          console.log("Image Submitted");
          var ProcessingDropzone = Dropzone.forElement(".uploader");
          ProcessingDropzone.processQueue();
        })
      </script>
      <script>
        function saveEpisodesToDatabase() {
          comicUploads = concatData(comicUploads);
          var form = $("#uploadNewEpisode").serializeArray();
          form.push({name: "pages", value: JSON.stringify(comicUploads)});
          comicUploads = [];
          $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>UploadComic/newEpisode",
            data: $.param(form),
            dataType: "json",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          }).always(function(response) {
            window.location.replace("<?php echo base_url(); ?>adminpage/comics");
          });
        }
      </script>
  </body>
</html>
