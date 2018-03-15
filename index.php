<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>Premicom</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <header>
      <div class="container-fluid">
        <div class="col-xs-9 header-container">
          <div class="pull-left">
            <div class="logo">
              <img src="#">
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
              <input placeholder="Cari komik"><div class="search-button"><i class="fas fa-search"></i></div>
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
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js">
	</script>
	<script>
		function changeable(pageName) {
			$.ajax({
				type: "GET",
				url: "pageprocessor.php",
				data: {content: pageName},
				dataType: "html",
				success: function(response) {
					$("#changeable").html(response);
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

		changeable("dashboard");
	</script>
</body>
</html>
