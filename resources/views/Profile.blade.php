<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Profile Page - Pemrograman Web Lanjut</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
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
								<h1 class="tm-site-title">Profil Page</h1>
								<h6 class="tm-site-description">Pemrograman Web Lanjut</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="http://127.0.0.1:8000/Home" class="tm-nav-link">Home</a></li>
								<li class="tm-nav-li"><a href="http://127.0.0.1:8000/Profil" class="tm-nav-link">About</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Profil Saya</h2>
				<p class="col-12 text-center">Page ini akan berisi Profil mengenai saya</p>
			</header>

			<div class="tm-container-inner-2 tm-contact-section">
				<div class="row">
					<div class="col-md-6">
                    <h4 class="tm-info-title tm-text-success">Biodata</h4>
						<p> Nama     : Jihan Rahadatul Aisy <br>
                             Ttl     : Bekasi, 23 Februari 2003 <br>
                             Alamat  : Permata Hijau Permai Blok c2 No.7 <br>
                             Agama   : Islam <br>
                             Hoby    : Membaca <br>
                             No.Telp : 08138425XXXX <br>
                             Email   : jihanrahadatulasy@gmail.com
                        <p>

					</div>
					<div class="col-md-6">
						<div class="tm-address-box">
							<h4 class="tm-info-title tm-text-success">Pendidikan</h4>
							<p>
								TK      : TK Widya Duta <br>
                                SD      : SDIT Taufiqqurahman <br>
                                SMP     : SMP Global Prima Islamic School <br>
                                SMA     : SMA Negeri 14 Bekasi <br>
                                D3      : Politeknik Negeri Malang    <br>
                            </p>
							
						</div>
					</div>
				</div>
			</div>
       
		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2020 Simple House 
            
            | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			var acc = document.getElementsByClassName("accordion");
			var i;
			
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight) {
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    }
			  });
			}	
		});
	</script>
</body>
</html>