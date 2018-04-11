<?php include('header.php'); ?>
<body>
	<?php include('navbar.php'); ?>
    <div class="comic-title-container">
      <div class="col-12">
        <div class="row">
          <div class="col-8 text-center mx-auto" style="background: rgba(0, 0, 0, 0.5); padding: 10px;">
            <div class="comic-title">
              This is the Title
            </div>
            <div class="comic-creator">
              Hideyoshi Tanaka
            </div>
            <div class="comic-genre">
              Genre :
              <a href="#">Ecchi</a>
              <a href="#">Yuri</a>
              <a href="#">Romance</a>
              <a href="#">Drama</a>
            </div>
          </div>
        </div>
      </div>
    </div>
		<div class="container comic-episodes-container">
      <div class="row">
        <div class="col-12 col-md-8" id="episodes">
        </div>
        <div class="col-12 col-md-4 comic-sidebar">
          <div class="rating">
						<i class="fas fa-star"></i> 9.85
					</div>
					<div class="short-desc">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
					</div>
					<div class="first-ep">
						<button>Read First Episode <span><i class="fas fa-angle-right"></i></span></button>
					</div>
        </div>
      </div>
    </div>

    <div class="container comics-recommendation">
      <div class="row comics-recommendation-head">
        Mungkin anda juga berminat membaca
      </div>
      <div class="row mt-1 mb-5">
        <div class="col-12 comics-recommendation-body">
          <div class="row">
            <div class="col-4">
							<div class="row">
								<div class="col-4">
									<img src="<?php echo base_url(); ?>resources/images/thumbnail.jpg"/>
								</div>
								<div class="col-8 pl-0">
									<div class="absolute-vertical-center comics-recommendation-title">
										This is another title <br />
										<small>This is another title</small>
									</div>
								</div>
							</div>
            </div>
            <div class="col-4">
							<div class="row">
								<div class="col-4">
									<img src="<?php echo base_url(); ?>resources/images/thumbnail.jpg"/>
								</div>
								<div class="col-8 pl-0">
									<div class="absolute-vertical-center comics-recommendation-title">
										This is another title <br />
										<small>This is another title</small>
									</div>
								</div>
							</div>
            </div>
            <div class="col-4">
							<div class="row">
								<div class="col-4">
									<img src="<?php echo base_url(); ?>resources/images/thumbnail.jpg"/>
								</div>
								<div class="col-8 pl-0">
									<div class="absolute-vertical-center comics-recommendation-title">
										This is another title <br />
										<small>This is another title</small>
									</div>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Javascript & Jquery Init -->
	<?php include ('javascript-loader.php'); ?>
	<script type="text/javascript">
		$.getJSON('<?php echo base_url(); ?>resources/js/json/comics.json', function(data) {
			$.each(data, function(index, value) {
				if (value.id == "<?php echo $_GET['id']; ?>") {
					var genre = "";
					$.each(value.Genre, function (index, gen) {
						genre += `<a href="#">`+gen+`</a>`;
					});
					$(".comic-title").html(value.FullTitle);
					$(".short-desc").html(value.Synopsis);
					$(".comic-genre").html(genre);
					$(".comic-title-container").css("background-image", "url("+value.Background+")");
					$.each(value.Episodes, function (index, ep) {
						$("#episodes").append(`
							<div class="comic-episodes">
		            <div class="row">
		              <div class="col-2 comic-episodes-thumb">
		                <img src="`+ep.Thumbnail+`"/>
		              </div>
		              <div class="col-6 comic-episodes-title">
		                <p><a href="read?id=`+index+`">`+ep.Title+`</a></p>
		              </div>
		              <div class="col-4 comic-episodes-timestamp">
		                <div class="row no-gutters">
		                  <div class="col-9">
		                    <p>Mar 18, 2018</p>
		                  </div>
		                  <div class="col-3">
		                    `+"#"+(index+1)+`
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
						`);
					})
				}
			});
		});
	</script>
</body>
</html>
