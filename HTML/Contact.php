<!DOCTYPE html>
<html>
<head>
	<title>Traditie | CONTACT</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<nav class="navbar fixed-top navbar-expand-lg navbar-light meniuprincipal" style="background-color: #f2f2f2;">
      <a class="navbar-brand" href="../index.html"><img src="../Imagini/logo.png" class="d-inline-block align-top" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <img src="../Imagini/Hamburger.png" width="30px"> 
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="../index.html">Acasa</a>
          <a class="nav-item nav-link active" href="../Galerie/GalerieFoto.html">Galerie Foto</a>
          <a class="nav-item nav-link active curent" href="Contact.php">Contact</a>
          <a class="nav-item nav-link active" href="Ajuta-ne.php">Ajuta-ne!</a>
        </div>
      </div>
    </nav>


	<div class="culoareFundal">
		<section class="continutPrincipalContact">
			<div class="container-fluid">
				
					<!-- Formular Start -->

					<div class="subtitluDetalii">
						<h1 >Nu ezita sa ne scri:</h1>
					</div>

					<div class="cardContact">
						
							

							<p>Pentru orice intrebare legata de noi, sau de serviciile noastre, te rugam foloseste formularul de mai jos!</p>

							<div class="formularDetalii">

								<form method="_POST" action="Contact.php">
								
								  <div class="form-group">
								  		<label>Nume:</label>
								    	<input type="text" name="Nume" class="form-control">
								  </div>

								  <div class="form-group">
								  		<label>E-mail:</label>
								    	<input type="text" name="e-mail" class="form-control">
								    	<small id="emailHelp" class="form-text text-muted">Adresa ta de e-mail va ramane confidentiala!</small>
								  </div>

								  <div class="form-group">
								  		<label>Subiect:</label>
								    	<input type="text" name="subiect" class="form-control">
								  </div>

								  <div class="form-group">
								  		<label>Mesaj:</label>
								    	<textarea name="mesaj" rows="3"></textarea>
								  </div>

								  <a onclick="pop();"><button type="submit" name="trimite" class="btn btn-primary">Trimite</button></a>
								
								</form>

								<div id="confirmare" class="alert alert-success alert-dismissable">
							 	 	<a href="#" class="close" data-dismiss="alert" aria-label="close" id="confirmare">&times;</a>
							 	 	Raspunsul tau a  fost trimis cu succes! Multumim!
								</div>

							</div>
						
					</div>

					<?php

						$Name = $_POST['Nume'];
						$Email = $_POST['e-mail'];
						$Subject = $_POST['subiect'];
						$Message = $_POST['mesaj']. ' ' .$Name. ' ' .$Email;

						mail('raicumarian25@yahoo.com', $Subject, $Message);

					?>

					<!-- Formular Stop -->

					<div>&nbsp;</div>	

					<!-- Harta Start -->

					<div class="cardContact">

							<h1>Ne gasesti aici:</h1>
							<div>&nbsp;</div>	
							<div class="harta" id="map"></div>

					</div>

						<!-- Harta End -->
		
					<div>&nbsp;</div>	

					<!-- Zona Carduri Start -->
	
						<div class="cardContact">
							<h1><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;Ne poti suna la numarul de telefon:</h1>
							<div class="numarDeTelefon"><h2>072*******</h2></div>	
						</div>
						
						<div>&nbsp;</div>	

						<div class="cardContact">
							<h1><i class="fa fa-envelope" aria-hidden="true">&nbsp;&nbsp;</i>Ne poti scrie la adresa de e-mail:</h1>
							<div class="adresaemail"><h2>traditie@gmail.com</h2></div>
						</div>

						<div>&nbsp;</div>	

						<div class="cardContact">
							<h1><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp;&nbsp;Ne poti scrie pe facebook:</h1>
							<div class="facebook"><a href="https://www.facebook.com/" target="_blank"><h2><i class="fa fa-facebook-square" aria-hidden="true"></i></h2></a></div>
						</div>

					<!-- Zona Carduri End -->

			</div>
		</section>
	</div>
			
		 <!-- JS Harta Start -->
	<script>
		function initMap (){
			var Ponoare = {lat:44.979884, lng:22.768585};
			var map = new google.maps.Map(document.getElementById("map"), {
				zoom:7,
				center: Ponoare
			});
			var marker = new google.maps.Marker({
				position: Ponoare,
				map:map
			});
		}
	</script>	 
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhvQ4jpVDJynoFY1QsuiTwCvaaKFJ-o8I&callback=initMap"
  type="text/javascript"></script>
  
  		<!-- JS Harta End -->

</body>
</html>