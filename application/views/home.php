<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>Premicom</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="resources/css/main.css" rel="stylesheet">
	<link href="resources/css/src.css" rel="stylesheet">
	<link href="resources/css/read.css" rel="stylesheet">
</head>
<body>
    <header>
      <div class="container-fluid">
        <div class="col-xs-9 header-container">
          <div class="pull-left">
            <div class="logo">
              <a href=""><img src="resources/images/logo.png"></a>
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
              </ul>
            </div>
          </div>
          <div class="pull-right">
            <div class="search">
							<form id="searches" method="POST">
	              <input placeholder="Cari komik"><button class="search-button" type="submit"><i class="fas fa-search"></i></button>
							</form>
            </div>
            <div class="login">
              <a onclick="" href="#">Login</a>
            </div>
          </div>
        </div>
      </div>
    </header>
		<div id="changeable"></div>
  <!-- Javascript & Jquery Init -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
	</script>
	<script src="resources/js/fontawesome.js">
	</script>
	<script>
		$("#searches").on("submit", function(e) {
			e.preventDefault();
			changeable("search", $("#searches input").val());
		});

		function changeable(pageName, searchThis, data) {
			$.ajax({
				type: "GET",
				url: "pageprocessor/redir_page?content="+pageName+"&title="+data,
				success: function(response) {
					$("#changeable").html(response);
					if (searchThis != null || searchThis != undefined) {
						$.getJSON("resources/js/json/comics.json", function (val) {
							$.each(val, function(index, data) {
								if (data.FullTitle.toUpperCase() == searchThis.toUpperCase()) {
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
												<hr />
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
								}
							});
						});
					}
				}
			});
		}

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

		function read(name, e) {
			e.preventDefault();
			$.ajax({
				type: "GET",
				url: "pageprocessor/redir_page?content=read",
				success: function(response) {
					$("#changeable").html(response);
				}
			});
		}

		changeable("dashboard");
	</script>
</body>
</html>
