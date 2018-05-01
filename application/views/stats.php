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
                      Statistik
                    </div>
                  </div>
                  <div class="box-body">
                    <div class="row box-body-row">
                      <div class="form-container">
                        <div class="form-container-head">
                          Jumlah Pembaca Komik
                        </div>
                        <div class="form-container-content">
                          <canvas id="myChart" height="100"></canvas>
                        </div>
                      </div>
                      <div class="form-container">
                        <div class="form-container-head">
                          Jumlah Keuntungan dari Iklan
                        </div>
                        <div class="form-container-content">
                          <canvas id="revenue" height="100"></canvas>
                        </div>
                      </div>
                      <div class="form-container">
                        <div class="form-container-head">
                          Jumlah Iklan Ditampilkan
                        </div>
                        <div class="form-container-content">
                          <canvas id="ads" height="100"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="container box-container">
                  <div class="box-head">
                    <div class="row">
                      Komentar
                    </div>
                  </div>
                  <div class="box-body">
                    <div class="row box-body-row">
                      <div class="form-container">
                        <div class="box-body-row">
													<div class="row mt-2 mb-2">
														<div class="col-12 notification-msg-container">
															<div class="row no-gutters notification-msg">
																<a class="profile-comments" href="#">Satrio Wibowo</a> <text>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</text>
															</div>
														</div>
													</div>
                          <div class="row mt-2 mb-2">
														<div class="col-12 notification-msg-container">
															<div class="row no-gutters notification-msg">
																<a class="profile-comments" href="#">Satrio Wibowo</a>
                                <text>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</text>
															</div>
														</div>
													</div>
                          <div class="row mt-2 mb-2">
														<div class="col-12 notification-msg-container">
															<div class="row no-gutters notification-msg">
																<a class="profile-comments" href="#">Satrio Wibowo</a>
                                <text>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</text>
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
      </div>
      <?php include('javascript-loader.php'); ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.js"></script>
      <script type="text/javascript">
        createComicPageUploader(".uploader", 1, 1); //Upload New Episode -- Upload Komik
      </script>
      <script>
    	var ctx = document.getElementById("ads").getContext('2d');
    	var myChart = new Chart(ctx, {
    	    type: 'line',
    	    data: {
    	        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    	        datasets: [{
    	          label: '# of Votes',
    	          data: [12, 19, 3, 5, 2, 3],
    	          // backgroundColor: [
    	          //     'rgba(54, 162, 235, 0.2)'
    	          // ],
    	          borderColor: [
    	              'rgba(255,99,132,1)'
    	          ],
    	          fill: false,
    	          borderWidth: 2
    	        }, {
    	          label: '# of Votes 2',
    	          data: [13, 11, 11, 6, 33, 123],
    	          // backgroundColor: [
    	          //     'rgba(255, 159, 64, 0.2)'
    	          // ],
    	          borderColor: [
    	              'rgba(75, 192, 192, 1)',
    	          ],
    	          fill: false,
    	          borderWidth: 2
    	        }],
    	    },
    	    options: {
    	        scales: {
    	            yAxes: [{
    	                ticks: {
    	                    beginAtZero:true
    	                }
    	            }]
    	        }
    	    }
    	});
    	</script>
      <script>
      var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    	var revenue = document.getElementById("revenue").getContext('2d');
    	var revenueChart = new Chart(revenue, {
    	    type: 'line',
    	    data: {
    	        labels: months,
    	        datasets: [{
    	          label: '# of Votes',
    	          data: [12, 19, 3, 5, 2, 3],
    	          // backgroundColor: [
    	          //     'rgba(54, 162, 235, 0.2)'
    	          // ],
    	          borderColor: [
    	              'rgba(255,99,132,1)'
    	          ],
    	          fill: false,
    	          borderWidth: 2
    	        }, {
    	          label: '# of Votes 2',
    	          data: [13, 11, 11, 6, 33, 123],
    	          // backgroundColor: [
    	          //     'rgba(255, 159, 64, 0.2)'
    	          // ],
    	          borderColor: [
    	              'rgba(75, 192, 192, 1)',
    	          ],
    	          fill: false,
    	          borderWidth: 2
    	        }],
    	    },
    	    options: {
    	        scales: {
    	            yAxes: [{
    	                ticks: {
    	                    beginAtZero:true
    	                }
    	            }]
    	        }
    	    }
    	});
    	</script>
      <script>
    	var ads = document.getElementById("ads").getContext('2d');
    	var adsChart = new Chart(ads, {
    	    type: 'line',
    	    data: {
    	        labels: months,
    	        datasets: [{
    	          label: '# of Votes',
    	          data: [12, 19, 3, 5, 2, 3],
    	          // backgroundColor: [
    	          //     'rgba(54, 162, 235, 0.2)'
    	          // ],
    	          borderColor: [
    	              'rgba(255,99,132,1)'
    	          ],
    	          fill: false,
    	          borderWidth: 2
    	        }, {
    	          label: '# of Votes 2',
    	          data: [13, 11, 11, 6, 33, 123],
    	          // backgroundColor: [
    	          //     'rgba(255, 159, 64, 0.2)'
    	          // ],
    	          borderColor: [
    	              'rgba(75, 192, 192, 1)',
    	          ],
    	          fill: false,
    	          borderWidth: 2
    	        }],
    	    },
    	    options: {
    	        scales: {
    	            yAxes: [{
    	                ticks: {
    	                    beginAtZero:true
    	                }
    	            }]
    	        }
    	    }
    	});
    	</script>
      <script>
    	var hitCount = document.getElementById("myChart").getContext('2d');
    	var hitCountChart = new Chart(hitCount, {
    	    type: 'line',
    	    data: {
    	        labels: months,
    	        datasets: [{
    	          label: '# of Votes',
    	          data: [12, 19, 3, 5, 2, 3],
    	          // backgroundColor: [
    	          //     'rgba(54, 162, 235, 0.2)'
    	          // ],
    	          borderColor: [
    	              'rgba(255,99,132,1)'
    	          ],
    	          fill: false,
    	          borderWidth: 2
    	        }, {
    	          label: '# of Votes 2',
    	          data: [13, 11, 11, 6, 33, 123],
    	          // backgroundColor: [
    	          //     'rgba(255, 159, 64, 0.2)'
    	          // ],
    	          borderColor: [
    	              'rgba(75, 192, 192, 1)',
    	          ],
    	          fill: false,
    	          borderWidth: 2
    	        }],
    	    },
    	    options: {
    	        scales: {
    	            yAxes: [{
    	                ticks: {
    	                    beginAtZero:true
    	                }
    	            }]
    	        }
    	    }
    	});
    	</script>
  </body>
</html>
