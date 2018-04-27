<?php include('header.php'); ?>
<head>
	<title>Marketplace</title>
</head>
<body>
	<?php include('navbar.php');?>
	<div class="wrapper">
		<div class="container utama">
			<div class="container page-map">
				Merchandise  /  Figures  /  Scale Figures  /  ArtFX+ Black Panther
			</div>
			<div class="container product-name-M2">
				ArtFX+ Marvel Now! Black Panther
			</div>
			<div class="container product-short-desc">
				Black Panther's ready to face off against Thanos!
			</div>
			<div class="line-header">
			</div>
			<div class="container full-product-description">
				<div class="row">
					<div class="col-12 col-md-5">
						<div class="marketplace-images">
							<img src="<?php echo base_url(); ?>resources/images/product-phanter.png" alt="">
						</div>
						<div class="marketplace-copyright-desc">
							Produk dalam foto tersebut hanya Contoh. Product asli dapat berbeda dari Contoh.

							© MARVEL
						</div>
						<div class="product-tags">
							<div class="tags-logo">
								<i class="fas fa-tags"></i> ArtFX+
							</div>
							<div class="tags-logo">
								<i class="fas fa-tags"></i> MARVEL
							</div>
							<div class="tags-logo">
								<i class="fas fa-tags"></i> Wakanda
							</div>
							<div class="tags-logo">
								<i class="fas fa-tags"></i> Black
							</div>
							<div class="tags-logo">
								<i class="fas fa-tags"></i> Panther
							</div>
						</div>
					</div>
					<div class="col-12 col-md-7">
						<div class="product-description">
							<div class="main-price">
								US $80.74
							</div>
							<div class="main-price-discount">
								<s>dari US $84.99</s>
							</div>
							<div class="price-cashback">
								<i class="fas fa-check-circle"></i>$4.84 (5.99% cash back)
							</div>
							<div class="promo-ship">
								<i class="fas fa-truck"></i><b> Free Shipping</b> untuk Pelanggan Pertama!
							</div>
							<br>
							<br>
							<div class="pre-order">
								<div class="pre-order-logo"><b>Pre-Order</b></div>  Tanggal Rilis: September 2018.
							</div>
							<br>	
							<br>
							<div class="item-description-full">
								<b>Nama Produk:</b> ArtFX+ Marvel Universe Black Panther
								<br>
								<b>Seri:</b> Black Panther
								<br>
								<b>Produk:</b> ArtFX+
								<br>
								<b>Pabrikan:</b> Kotobukiya
								<br>
								<b>Spesifikasi:</b> Painted, non-articulated, 1/10 scale figure with stand
								<br>
								<b>Material:</b> PVC (non-phthalate), ABS
								<br>
								<b>Tinggi (Sekitar.):</b> 170 mm | 6.7"
								<br>
								<br>
								<b>Batas Pesan:</b> 3 Barang per Pelanggan
								<br>
								<br>
								Seorang pahlawan dengan kekuatan legendaris yang didukung oleh setelan Vibranium dan teknologi Wakandan canggihnya, raja dan pelindung Wakanda secara ahli diciptakan kembali dalam gaya asli Adi Granov berkat keahlian unggul Kotobukiya.
								<br>
								<br>
								Seperti karakter lain dalam seri, Black Panther bertengger di basis diorama khusus yang mencerminkan penampilannya di seni konsep. Dengan satu kaki bertengger di atas batu yang dibangkitkan, ketinggian dan kemiringan dasar memberikan patung siluet vertikal yang unik dan akan memberikan seluruh kelompok pahlawan penampilan yang dinamis ketika koleksi selesai.
								<br>
								<br>
								Tidak seperti garis Marvel ArtFX + sebelumnya, karakter ini dimaksudkan untuk ditampilkan dalam formasi yang lebih vertikal daripada berdampingan. Kumpulkan semua Avengers ini saat mereka bersiap menghadapi melawan Thanos!
								<br>
								<br>
							</div>
							<div class="order-button">
								<a href="#" class="order">
									<div class="order-nowM2">
										Order-Now
									</div>
								</a>
							</div>
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

	<?php include ('javascript-loader.php'); ?>
	<script>
	var ctx = document.getElementById("myChart").getContext('2d');
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

</body>