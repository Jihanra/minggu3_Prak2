<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Home Page</h1>
								<h6 class="tm-site-description">Pemrograman Web Lanjut</h6>	
							</div>
						</div>
                        <nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="http://127.0.0.1:8000/Home" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="http://127.0.0.1:8000/Profil" class="tm-nav-link">Profile</a></li>
								
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Menkominfo: Kasus Aktif di Bawah 100.000, Tetap Disiplin Pakai Masker dan Segera Vaksinasi</h2>
			</header>
			<section class="tm-section">
            <div class="container-fluid">
                <div class="left tm-2-rows-sm-swap">
                    </div>
                    <div class=" tm-2-rows-sm-swap">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 tm-2-rows-sm-down-1">
                        <p> Penanganan COVID-19 di tanah air terus membaik sejalan dengan penurunan jumlah kasus aktif COVID-19 harian yang hingga Senin (13/9/2021) berada di bawah angka 100.000 kasus. Pemerintah mengapresiasi partisipasi seluruh elemen negara dan masyarakat yang bekerja keras dalam mengendalikan pandemi dan berharap momentum baik ini terus berlanjut.<p><br>
                        <p> Menteri Komunikasi dan Informatika Johnny G. Plate menyatakan bahwa perkembangan ini adalah kabar baik yang harus disyukuri. Untuk menjaga momentum ini, Menkominfo mengajak seluruh lapisan masyarakat untuk tetap menjalankan protokol kesehatan dengan baik dan menyegerakan vaksinasi.</p><br>
                        <p> “Berkat partisipasi semua pihak, kita berhasil menurunkan angka kasus aktif hingga berada di bawah 100.000 kasus. Indikator COVID-19 lainnya juga terus menunjukkan perbaikan, misalnya positivity rate nasional yang sudah meraih batas aman WHO. Mari kita jaga tren positif ini agar perjuangan tidak sia-sia. Caranya, meneruskan budaya memakai masker dan segera melengkapi vaksinasi bagi yang belum melaksanakan,” ungkap Menteri Kominfo. </p><br>
                        <p> Pada hari Senin (13/9/2021), pemerintah mencatat jumlah kasus aktif turun menjadi 99.696 kasus atau berkurang 10.173 kasus dibanding hari sebelumnya sebanyak 109.869 kasus. Kasus aktif adalah jumlah kasus konfirmasi dikurangi jumlah kasus sembuh. Dengan kata lain, angka ini yang menunjukkan berapa banyak pasien positif COVID-19 yang tengah mendapatkan perawatan di fasyankes atau menjalani isolasi mandiri.<p><br>
                    </div>
                </div>
            </div>
        </section>

      
		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2020 Simple House 
            
            | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>