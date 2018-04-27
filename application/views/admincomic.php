<?php include ('header.php'); ?>
  <body>
    <?php include ('admin_navbar.php'); ?>
      <div class="wrapper">
        <?php include ('sidebar.php'); ?>
        <div class="col-12 col-sm-10">
					<div class="container" style="padding-bottom: 30px;">
						<!-- Editable Here -->
            <div class="row">
            <div class="col-12 col-sm-7">
              <div class="row">
                <div class="col-12 col-sm-12">
                  <div class="container box-container">
                    <div class="box-head">
                      <div class="row">
                        Komik Rilisanmu <span class="pull-right"><a id="uploadSerial" href="#">Upload Serial Baru</a></span>
                      </div>
                    </div>
                    <div class="box-body">
                      <div class="row box-body-row">
                        <div class="container display_comics">
                          <div class="row">
                            <div class="comics_images" style="background-image: url('<?php echo base_url() ?>resources/images/dkv4.jpg')"></div>
                            <div class="comics_description">
                              <div class="comics_title">
                                <a href="<?php echo base_url(); ?>adminpage/comics_detail/1">Attack on Titan Volume 1</a>
                              </div>
                              <div class="comics_viewcount">
                                <span><i class="fas fa-eye"></i></span> <span>2010</span> | <span><i class="far fa-calendar"></i></span> <span>24 January 2018</span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="comics_images" style="background-image: url('<?php echo base_url() ?>resources/images/dkv4.jpg')"></div>
                            <div class="comics_description">
                              <div class="comics_title">
                                <a href="#">Attack on Titan Volume 1</a>
                              </div>
                              <div class="comics_viewcount">
                                <span><i class="fas fa-eye"></i></span> <span>2010</span> | <span><i class="far fa-calendar"></i></span> <span>24 January 2018</span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="comics_images" style="background-image: url('<?php echo base_url() ?>resources/images/dkv4.jpg')"></div>
                            <div class="comics_description">
                              <div class="comics_title">
                                <a href="#">Attack on Titan Volume 1</a>
                              </div>
                              <div class="comics_viewcount">
                                <span><i class="fas fa-eye"></i></span> <span>2010</span> | <span><i class="far fa-calendar"></i></span> <span>24 January 2018</span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="comics_images" style="background-image: url('<?php echo base_url() ?>resources/images/dkv4.jpg')"></div>
                            <div class="comics_description">
                              <div class="comics_title">
                                <a href="#">Attack on Titan Volume 1</a>
                              </div>
                              <div class="comics_viewcount">
                                <span><i class="fas fa-eye"></i></span> <span>2010</span> | <span><i class="far fa-calendar"></i></span> <span>24 January 2018</span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="comics_images" style="background-image: url('<?php echo base_url() ?>resources/images/dkv4.jpg')"></div>
                            <div class="comics_description">
                              <div class="comics_title">
                                <a href="#">Attack on Titan Volume 1</a>
                              </div>
                              <div class="comics_viewcount">
                                <span><i class="fas fa-eye"></i></span> <span>2010</span> | <span><i class="far fa-calendar"></i></span> <span>24 January 2018</span>
                              </div>
                            </div>
                          </div>
                          <!-- <div class="result">
                            <div class="row mt-3 result-bg">
                              <div class="col-4">
                                <div class="title">
                                  <img src="<?php echo base_url() ?>resources/images/dkv4.jpg">
                                </div>
                              </div>
                              <div class="col-8 container box">
                                <div class="row no-gutters">
                                  <div class="title col-12">
                                    <a href="#" onclick="changeable('comic-chapter', null, '`+data.FullTitle+`')">
                                      <h3>DKV 4</h3>
                                    </a>
                                  </div>
                                </div>
                                <hr/>
                                <div class="row">
                                  <div class="container col-12">
                                    `+data.Synopsis+`
                                  </div>
                                </div>
                               <div class="row">
                                  <div class="genre col-12">
                                    <div class="comic-genre">
                                      Genre : `+genre+`
                                    </div>
                                    <div class="r8m8">Rating : <i class="fas fa-star"></i> 9.83</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> -->
                        </div>
                      </div>
                    </div>
                    <div class="box-footer">
                      <div class="row">
                        <div class="col-2" style="text-align: left">
                          <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="col-8">
                          1 / 1
                        </div>
                        <div class="col-2" style="text-align: right">
                          <i class="fas fa-chevron-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-5">
              <div class="col-12 col-sm-12">
                <div class="container box-container">
                  <div class="box-head">
                    <div class="row">
                      Statistics
                    </div>
                  </div>
                  <div class="box-body">
                    <div class="row box-body-row">
                      <div class="form-container">
                        <div class="form-container-head">
                          Total Kunjungan Komik
                        </div>
                        <div class="form-container-content">
                          12414
                        </div>
                      </div>
                      <div class="form-container">
                        <div class="form-container-head">
                          Total Revenue
                        </div>
                        <div class="form-container-content">
                          Rp12.000.000
                        </div>
                      </div>
                      <div class="form-container">
                        <div class="form-container-head">
                          Kunjungan Komik Tertinggi
                        </div>
                        <div class="form-container-content">
                          Attack on Titan Vol. 1
                        </div>
                      </div>
                      <div class="form-container">
                        <div class="form-container-head">
                          Total Komik Terpublish
                        </div>
                        <div class="form-container-content">
                          20 Komik
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                    <div class="row">
                      <a href="<?php echo base_url() ?>adminpage/stats">Lihat Lebih Lengkap</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
				  </div>
				</div>
      </div>
      <div class="modal-overlay" style="display: none;">
        <div class="modal-container">
          <div class="modal-scrollable">
            <div class="modal-header">
                <div class="pull-left">
                  Buat Serial Baru
                </div>
                <div class="pull-right" id="close">
                    X
                </div>
            </div>
            <div class="modal-content">
              <form id="serialForm" method="post">
        		    <div class="row">
          		    <div class="col-md-6 contain-textarea-container">
          		      <div class="form-container">
          		        <div class="form-container-head">
          		          Judul Serial
          		        </div>
          		        <div class="form-container-content">
          		          <input placeholder="Harus kurang dari 50 karakter" name="title" maxlength="50">
          		        </div>
          		      </div>
          		      <div class="form-container contain-textarea-container">
          		        <div class="form-container-head">
          		          Sinopsis Cerita
          		        </div>
          		        <div class="form-container-content contain-textarea">
          		          <textarea placeholder="Maksimum 500 karakter" name="synopsis" maxlength="500"></textarea>
          		        </div>
          		      </div>
          					<div class="form-container">
          		        <div class="form-container-head">
          		          Genre 1
          		        </div>
          		        <div class="form-container-content">
          		          <select name="genre1">
          		            <option disabled selected>Pilih Salah Satu</option>
          								<option value="Aksi">Aksi</option>
          								<option value="Drama">Drama</option>
          								<option value="Fantasi">Fantasi</option>
          								<option value="Fiksi">Fiksi Ilmiah</option>
          								<option value="Komedi">Komedi</option>
          								<option value="Horor">Horor</option>
          								<option value="Misteri">Misteri</option>
          								<option value="Olahraga">Olahraga</option>
          								<option value="Parodi">Parodi</option>
          								<option value="Psikologi">Psikologi</option>
          								<option value="Religi">Religi</option>
          								<option value="Romansa">Romansa</option>
          								<option value="Sejarah">Sejarah</option>
          								<option value="Slice of Life">Slice of Life</option>
          								<option value="Superhero">Superhero</option>
          								<option value="Supernatural">Supernatural</option>
          								<option value="TipsTrick">Tips &amp; Trick</option>
          								<option value="Thriller">Thriller</option>
          		          </select>
          		        </div>
          		      </div>
          		      <div class="form-container">
          		        <div class="form-container-head">
          		          Genre 2
          		        </div>
          		        <div class="form-container-content">
          		          <select name="genre2">
          		            <option disabled selected>Pilih Salah Satu</option>
          								<option value="Aksi">Aksi</option>
          								<option value="Drama">Drama</option>
          								<option value="Fantasi">Fantasi</option>
          								<option value="Fiksi">Fiksi Ilmiah</option>
          								<option value="Komedi">Komedi</option>
          								<option value="Horor">Horor</option>
          								<option value="Misteri">Misteri</option>
          								<option value="Olahraga">Olahraga</option>
          								<option value="Parodi">Parodi</option>
          								<option value="Psikologi">Psikologi</option>
          								<option value="Religi">Religi</option>
          								<option value="Romansa">Romansa</option>
          								<option value="Sejarah">Sejarah</option>
          								<option value="Slice of Life">Slice of Life</option>
          								<option value="Superhero">Superhero</option>
          								<option value="Supernatural">Supernatural</option>
          								<option value="TipsTrick">Tips &amp; Trick</option>
          								<option value="Thriller">Thriller</option>
          		          </select>
          		        </div>
          		      </div>
          		    </div>
          		    <div class="col-md-6">
          					<div class="form-container">
          		        <div class="form-container-head">
          		          Upload Cover
          		        </div>
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
          		    </div>
          		  </div>
          		  <div class="row tos">
          		    <div class="col-12">
          		      <div class="form-container">
          		        <div class="checkboxFive">
          		          <input class="checkbox-type" id="checkBoxTos" name="tos_agreed" type="checkbox" value="1"> <label for="checkBoxTos"></label> Saya telah membaca dan menyetujui <a href="#">syarat dan ketentuan</a> pengguna
          		        </div>
          		      </div>
          		      <div class="form-container">
          		        <div class="checkboxFive">
          		          <input class="checkbox-type" id="checkBoxMature" name="mature_toggle" type="checkbox" value="Y"> <label for="checkBoxMature"></label> Karya ini mengandung konten dewasa dan pendampingan orang tua diperlukan (opsional)
          		        </div>
          		      </div>
          		      <div class="form-container">
          		        <button name="#" type="submit">Buat Serial Komik</button>
          		      </div>
          		    </div>
        		    </div>
        		  </form>
            </div>
          </div>
        </div>
      </div>
      <?php include('javascript-loader.php'); ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.js"></script>
      <script>
        $("#uploadSerial").on("click", function() {
          $(".modal-overlay").slideToggle();
          createUploader(".uploader", 1, false, "cover-comic");
        });

        $("#close").on("click", function() {
          $(".modal-overlay").slideToggle();
        });
      </script>
      <script>
        // $.getJSON("<?php echo base_url(); ?>resources/js/json/comics.json", function (val) {
        //   $.each(val, function(index, data) {
        //       var genre = "";
        //       $.each(data.Genre, function(index, gen) {
        //         genre += `<a href="#">`+gen+`</a> `;
        //       })
        //       $(".result").append(`
        //         <div class="row mt-3 result-bg">
        //           <div class="col-12 col-md-2">
        //             <div class="title">
        //               <img src="`+data.Cover+`">
        //             </div>
        //           </div>
        //           <div class="col-12 col-md-9 container box">
        //             <div class="row no-gutters">
        //               <div class="title col-12">
        //                 <a href="#" onclick="changeable('comic-chapter', null, '`+data.FullTitle+`')">
        //                 <h3>`+data.FullTitle+`</h3></a>
        //               </div>
        //             </div>
        //             <hr/>
        //             <div class="row">
        //               <div class="container col-12">
        //                 `+data.Synopsis+`
        //               </div>
        //             </div>
        //             <div class="row">
        //               <div class="genre col-12">
        //                 <div class="comic-genre">
        //                   Genre : `+genre+`
        //                 </div>
        //                 <div class="r8m8">Rating : <i class="fas fa-star"></i> 9.83</div>
        //               </div>
        //             </div>
        //           </div>
        //         </div>
        //       `);
        //     });
        //   });
          </script>
  </body>
</html>
