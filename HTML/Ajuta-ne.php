<!DOCTYPE html>
<html>
<head>
	<title>Traditie | AJUTA-NE !</title>
	<meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
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
          <a class="nav-item nav-link active " href="../index.html">Acasa</a>
          <a class="nav-item nav-link active" href="../Galerie/GalerieFoto.html">Galerie Foto</a>
          <a class="nav-item nav-link active" href="Contact.php">Contact</a>
          <a class="nav-item nav-link active curent" href="Ajuta-ne.php">Ajuta-ne!</a>
        </div>
      </div>
    </nav>

	<div class="culoareFundal">		
		<section class="continutPrincipalAjuta-ne">
			<div class="container-fluid">
				

					<h1 class="subtitlu">Cum ne poti ajuta:</h1>

					<div class="text">
						<p>Avand in vedere diversitatea limbii romane, si denumirile regionale din anumitele zone ale tarii, te rugam foloseste formularul de mai jos si ajuta-ne cu un raspuns la urmatoarea intrebare: <br/><br/><b>"Cum se numeste 'naframa' in zona ta?"</b></p>
					</div>

					
					<div class="judete">
						<div class="form-group"> 
							<h3 id="subtitlulistajudete">Selecteaza judetul in care locuiesti:</h3>

							<form method="POST" action="Ajuta-ne.php">
								<label></label>
								<select name="judet" class="form-control" id="listaJudete">
									<option>Alba</option>
									<option>Arad</option>
									<option>Arges</option>
									<option>Bacau</option>
									<option>Bihor</option>
									<option>Bistrita Nasaud</option>
									<option>Botosani</option>						
									<option>Braila</option>
									<option>Brasov</optio>
									<option>Bucuresti</option>
									<option>Buzau</option>
									<option>Calarasi</option>
									<option>Caras Severin</option>
									<option>Cluj</option>
									<option>Constanta</option>
									<option>Covasna</option>
									<option>Dambovita</option>
									<option>Dolj</option>
									<option>Galati</option>
									<option>Giurgiu</option>
									<option>Gorj</option>
									<option>Harghita</option>
									<option>Hunedoara</option>
									<option>Ialomita</option>
									<option>Iasi</option>
									<option>Ilfov</option>
									<option>Maramures</option>
									<option>Mehedinti</option>
									<option>Mures</option>
									<option>Neamt</option>
									<option>Olt</option>
									<option>Prahova</option>
									<option>Salaj</option>
									<option>Satu Mare</option>
									<option>Sibiu</option>
									<option>Suceava</option>
									<option>Teleorman</option>
									<option>Timis</option>
									<option>Tulcea</option>
									<option>Valcea</option>
									<option>Vaslui</option>
									<option>Vrancea</option>
								</select>
							</div>

							<h3 id="subtitlutextarea">Te rugam introdu in campul de mai jos, ce denumire populara are "naframa" in zona ta!</h3>

							<div class="form-group">
								<label class="control-label">Scrie aici:</label>
								<textarea name="termen" class="form-control" rows="5"></textarea>
							</div>

							<div class="form-group">

								<div class="butonTrimite">
									<a onclick="pop();"><input type="submit" class="btn btn-primary" value="Trimite"></a>
								</div>
						
						</form>	

							<div id="confirmare" class="alert alert-success alert-dismissable">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close" id="confirmare">&times;</a>
							  Raspunsul tau a  fost trimis cu succes! Multumim!
							</div>
						</div>
					</div>

						<div>&nbsp;</div>	


					<?php

					$Judet = $_POST['judet'];
					$Termen = $_POST['termen'];
					
					mail('raicumarian25@yahoo.com', $Judet, $Termen);

					?>

				
			</div>	

		</section>
	</div>
	
	<script type="text/javascript" src="../JS/galerie.js"></script>
</body>
</html>
























