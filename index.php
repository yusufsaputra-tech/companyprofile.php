<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- My Font -->
		<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="asset/css/bootstrap.min.css">
		
		<!-- CSS -->
		<link rel="stylesheet" href="asset/style.css">

		<!-- Optional JavaScript -->
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="asset/js/jquery-3.5.1.slim.min.js"></script>
		<script src="asset/js/popper.min.js"></script>
		<script src="asset/js/bootstrap.min.js"></script> 

		<title>PT. Sugimoto Prseisi Technologi</title>
	</head>
	<body>
		<!-- Navbar --> 
		<nav class="navbar navbar-expand-lg navbar-secondary bg-light sticky-top">
			<div class="container">
				<a class="navbar-brand" href="?hal=home"><img src="asset/img/logo.png" width="40" class="img-fluid" alt="Gambar Logo"> PT. Sugimoto Presisi Technologi <span class="sr-only">(current)</span> </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ml-auto">
						<a class="nav-link" href="?hal=about">About US</a>
						<a class="nav-link" href="?hal=service">Our Service</a>
						<a class="nav-link" href="?hal=machine">Lies Machine</a>
						<a class="nav-link" href="?hal=customer">Our Customer</a>
						<a class="nav-link" href="?hal=contac">Contac Us</a>
					</div>
				</div>
			</div>
		</nav>

	<div class="">
	<?php 
		if (empty($_GET) || $_GET['hal'] == 'home') {
			include 'home.php';
		}else{
			$page = $_GET['hal'];
			switch ($page) {
				case $page:
					include $page. '.php';
					break;
				
				default:
					# code...
					break;
			}
		}
	 ?>
	</div>

	<!-- Footer -->
	<div class="jumbotron2" id="adress">	
	 <div class="container" style="font-family: viga;">
      <div class="row text-light">
            <div class="col">
              <h6>Plant 1 :</h6>
              <p>Jl. Raya Perumahan Villa Mutiara Cikarang Kp. Kukun, Ciantra, Cikarang Selatan Bekasi 17550</p>
              <h6>Plant 2 :</h6>
              <p>Ruko Villa Mutiara Cikarang Blok R2/20 Ciantra, Cikarang, Bekasi 17550</p>
            </div>
            <div class="col">
            <h6>Telephone :</h6>
            <p>(+6221) 29091972</p>
            <p>(+62) 85212715003</p>
            <h6>Fax :</h6>
            <p>(+6221) 29091972</p>
            <h6>Email :</h6>
            <a class="text-light" href="https:mailto:sales@sugimotopresisitechnologi.com">sales@sugimotopresisitechnologi.com</a> 
            <br>	
            <a class="text-light" href="https:mailto:care@sugimotopresisitechnologi.com">care@sugimotopresisitechnologi.com</a>
            </div>
            <div class="col">
              <h6>Our Address :</h6>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.40688593601!2d107.11257131405252!3d-6.341316095410966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699a774b34f135%3A0x34f515484f6148b3!2sPt.sugimoto%20Presisi%20Technologi!5e0!3m2!1sid!2sid!4v1601732960968!5m2!1sid!2sid" width="350" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
      </div>
	</div>
	</div>
	  <!-- Footer Text -->
	  <footer class="page-footer font-small teal pt-4">
	  <div class="footer-copyright text-center py-3 text-white" style="font-family: viga;">© 2020 Copyright:
	    <a class="text-white" href="https://mdbootstrap.com/">Yusuf Saputra</a>
	  </div>
	</footer>
	<!-- Footer -->
  </body>
</html>