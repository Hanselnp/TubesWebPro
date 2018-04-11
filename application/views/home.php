<?php include ('header.php'); ?>
<body>
	<?php include ('navbar.php'); ?>
	<div id="changeable">
		<div class="slider" style="background: url('<?php echo base_url(); ?>resources/images/aot-wallpaper.jpg');">
		  <div class="container-fluid">
		    <div class="col-12 col-md-10 mx-auto">
		      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		        <div class="carousel-inner">
		          <div class="carousel-item active">
		            <img class="d-block w-100" src="<?php echo base_url(); ?>resources/images/aot-slider.png" alt="First slide">
		          </div>
		          <!-- <div class="carousel-item">
		            <img class="d-block w-100" src="https://signage.uiowa.edu/sites/signage.uiowa.edu/files/slides/1920x800.jpg" alt="Second slide">
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="https://signage.uiowa.edu/sites/signage.uiowa.edu/files/slides/1920x800.jpg" alt="Third slide">
		          </div> -->
		        </div>
		        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		          <span class="sr-only">Previous</span>
		        </a>
		        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		          <span class="carousel-control-next-icon" aria-hidden="true"></span>
		          <span class="sr-only">Next</span>
		        </a>
		      </div>
		   	</div>
		 	</div>
		</div>
		<div class="container-fluid" id="releases">
		  <div class="col-12 col-md-10 mx-auto pt-3 pb-3">
		    <div class="container-head">
		      Rilisan Komik
		    </div>
		    <div class="container-content mt-1" id="releases-json">

		    </div>
		  </div>
		</div>
		<div class="container-fluid" id="popular">
		  <div class="col-12 col-md-10 mx-auto pt-3 pb-3">
		    <div class="container-head">
		      Komik Terpopuler Berdasarkan Genre
		    </div>
		    <div class="row">
		      <div class="col-12">
		        <div class="row no-gutters" id="first-row">
		          <div class="col square square-begin">
		            <div class="square-title">
		              Slice of Life
		            </div>
		            <div class="square-desc">
		              Gambaran Potongan Kehidupan
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		    <div class="row">
		      <div class="col-12">
		        <div class="row no-gutters" id="second-row">
		          <div class="col square square-begin second-begin">
		            <div class="square-title">
		              Thriller
		            </div>
		            <div class="square-desc">
		              Kisah menegangkan yang membuatmu merinding!
		            </div>
		          </div>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="container-fluid" id="attrib">
		  <div class="col">
		    <a href="#">About Us</a> • <a href="#">Terms of Services</a> • <a href="#">F.A.Q.</a> • <a href="#">Contact Us</a>
		  </div>
		  <div class="col">
		    &copy; Premicom 2018
		  </div>
		</div>
	</div>
  <!-- Javascript & Jquery Init -->
	<?php include ('javascript-loader.php'); ?>
	<script>
		$(function() {
			$.getJSON('<?php echo base_url(); ?>resources/js/json/comics.json', function(data) {
				var i = 0;
				var j = 0;
				$.each(data, function (index, value) {
					if ($.inArray("SliceOfLife", value.Genre) != -1 && i < 4) {
						i++;
						var extra;
						if (i == 4) {
							extra = "extra";
						} else {
							extra = "";
						}

						if (value.Synopsis.length >= 75) {
							var syn = value.Synopsis.substring(0, 72)+"...";
						} else {
							var syn = value.Synopsis;
						}
						$("#first-row").append(`
							<div class="col-12 col-md square `+ extra +`" id="`+$.trim(value.FullTitle)+`">
							<text>
								<p style="width:50%;">`+value.FullTitle+`</p>
								<p class="hideable">
									--- <br />
									<small>`+syn+`</small>
								</p>
							</text>
							<img src="`+value.Thumbnail+`">
							</div>
						`);
					}

					if ($.inArray("Thriller", value.Genre) != -1 && j < 4) {
						j++;
						var extra;
						if (j == 4) {
							extra = "extra"
						} else {
							extra = "";
						}

						if (value.Synopsis.length >= 75) {
							var syn = value.Synopsis.substring(0, 72)+"...";
						} else {
							var syn = value.Synopsis;
						}
						$("#second-row").append(`
							<div class="col-12 col-md square `+ extra +`" id="`+$.trim(value.FullTitle)+`">
								<text>
									<p style="width:50%;">`+value.FullTitle+`</p>
									<p class="hideable">
										--- <br />
										<small>`+syn+`</small>
									</p>
								</text>
								<img src="`+value.Thumbnail+`">
							</div>
						`)
					}
				});
				while (i < 4) {
					i++;
					$("#first-row").append(`
						<div class="col-12 col-md square square-begin"></div>
					`);
				}

				while (j < 4) {
					j++;
					$("#second-row").append(`
						<div class="col-12 col-md square square-begin"></div>
					`)
				}
			});

			$.getJSON('<?php echo base_url(); ?>resources/js/json/comics.json', function(data) {
				$.each(data, function(index, value) {
					if (index <= 4) {
						$("#releases-json").append(`
							<div class="releases-container col-12 col-md-2">
								<div class="row">
									<div class="releases-image">
										<img src="`+value.Cover+`"/>
									</div>
								</div>
									<div class="releases-head mt-2 mb-2">
										<div class="releases-head-title">
											<a href="chapters?id=`+value.id+`" onclick="">`+value.FullTitle+`</a>
										</div>
									</div>
							</div>
						`);
					}
				});
				$("#releases-json").append(`
					<div class="releases-container col-12 col-md-2 sm-absolute-vertical-center nobg text-center">
						<i class="fas fa-arrow-circle-right"></i> <br />
						See more
					</div>
					`);
			});
		});
	</script>
	<script>
		$("#changeable").on("mouseenter", ".square", function(val) {
			$(this).each(function(i, value) {
				$(this).find("img").hide();
				$(this).find(".hideable").show();
			});
		});

		$("#changeable").on("mouseleave", ".square", function(val) {
			$(this).each(function(i, value) {
				$(this).find("img").show();
				$(this).find(".hideable").hide();
			});
		});

		// function read(name, e) {
		// 	e.preventDefault();
		// 	$.ajax({
		// 		type: "GET",
		// 		url: "pageprocessor/redir_page?content=read",
		// 		success: function(response) {
		// 			//$("#changeable").html(response);
		// 		}
		// 	});
		// }

		//changeable("dashboard");
	</script>
</body>
<?php include ('footer.php'); ?>
