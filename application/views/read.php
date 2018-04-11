<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-12 reader-background">
			<div class="row">
				<div class="col-6 left-top">
					<select name="list-chapter" class="selector" style="display: inline-block;">
						<option value="#">Kembali ke menu Manga </option>
						<option value="#">Chapter 1 </option>
						<option value="#">Chapter 2 </option>
						<option value="#">Chapter 3 </option>
						<option value="#">Chapter 4 </option>
						<option value="#">Chapter 5 </option>
					</select>
				</div>
				<div class="col-6 right-top">
					<ul class="user-btns">
						<li href="#" id="subsc" class="btn"> Subscribe </li>
						<li href="#" id="readlater" class="btn"> Read Later</li>
						<li href="#" id="addfav" class="btn"> Add to Favourites</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-8 mx-auto comic-pages">
					<img src="<?php echo base_url(); ?>resources/images/e1.jpg">
					<img src="<?php echo base_url(); ?>resources/images/e2.jpg">
					<img src="<?php echo base_url(); ?>resources/images/e3.jpg">
					<div class="space"></div>
				</div>
			</div>
		</div>
	  <div class="space"></div>
	</div>
	<div class="row" id="discussion">
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-md-8">
					<div class="text">
				    Katakan Sesuatu
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-8">
					<form method="get" id="insertComments">
						<div class="row no-gutters input-comment">
							<div class="col">
								<textarea placeholder="Masukkan komentar disini..."></textarea>
							</div>
							<div class="col-4 ml-2">
								<button type="submit">Kirim Komentar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-8 komentar">
					Wah! Sepertinya belum ada komentar nih :(
					Jadilah yang pertama berkomentar disini!
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var commentCount = 0;

	$("#insertComments").on("submit", function(e) {
		e.preventDefault();
		var name = "Anonim";
		var komentar = $("#insertComments textarea").val();
		$("#insertComments textarea").val("");

		if (commentCount != 0) {
			$(".komentar").append(`
				<div class="row no-gutters mt-2 comment-item">
					<div class="col-1">
						<img src="<?php echo base_url(); ?>resources/images/profile-square-extra-small.png" style="width: 100%; height: 100%; border-radius: 5px;">
					</div>
					<div class="col-9 ml-2">
						<div class="nameprofile">
							<b>`+name+`</b>
						</div>
						`+komentar+`
					</div>
					<div class="col-1 ml-1">
						<i class="far fa-trash-alt delete"></i>
					</div>
				</div>
			`);
		} else {
			$(".komentar").html(`
				<div class="row no-gutters mt-2 comment-item">
					<div class="col-1">
						<img src="<?php echo base_url(); ?>resources/images/profile-square-extra-small.png" style="width: 100%; height: 100%; border-radius: 5px;">
					</div>
					<div class="col-9 ml-2">
						<div class="nameprofile">
							<b>`+name+`</b>
						</div>
						`+komentar+`
					</div>
					<div class="col-1 ml-1">
						<i class="far fa-trash-alt delete"></i>
					</div>
				</div>
			`);
		}
		commentCount++;
		setTimeout(function() {
			refreshBinding()
		}, 10);
	});

	function refreshBinding() {
		$(".delete").unbind("click");
		$.each($(".delete"), function(index, val) {
			$(this).on("click", function(vax) {
				$(this).parent().parent().remove();
				commentCount--;
				if (commentCount == 0) {
					$(".komentar").html(`
						Wah! Sepertinya belum ada komentar nih :(
						Jadilah yang pertama berkomentar disini!
					`);
				};
			})
		});
	}
</script>
<?php include('javascript-loader.php'); ?>
</body>
<?php include('footer.php'); ?>
