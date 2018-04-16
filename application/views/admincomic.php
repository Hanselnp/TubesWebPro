<?php include ('header.php'); ?>
  <body>
    <?php include ('navbar.php'); ?>
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
                        <h2>Komik buatan anda</h2>
                      </div>
                    </div>
                    <div class="box-body">
                      <div class="row box-body-row">
                        <!-- insert gambar here -->
                        <div class="container outer">
                          <div class="result col-8">

                          </div>
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
                          bla
                        </div>
                      </div>
                      <div class="box-body">
                        <div class="row box-body-row">
                          <!-- insert gambar here -->ini gatau mau taro apa...
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
      <script>
        $.getJSON("<?php echo base_url(); ?>resources/js/json/comics.json", function (val) {
          $.each(val, function(index, data) {
              var genre = "";
              $.each(data.Genre, function(index, gen) {
                genre += `<a href="#">`+gen+`</a> `;
              })
              $(".result").append(`
                <div class="row mt-3 result-bg">
                  <div class="col-12 col-md-2">
                    <div class="title">
                      <img src="`+data.Cover+`">
                    </div>
                  </div>
                  <div class="col-12 col-md-9 container box">
                    <div class="row no-gutters">
                      <div class="title col-12">
                        <a href="#" onclick="changeable('comic-chapter', null, '`+data.FullTitle+`')">
                        <h3>`+data.FullTitle+`</h3></a>
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
              `);
            });
          });
          </script>
      <?php include ('javascript-loader.php'); ?>
  </body>
</html>
