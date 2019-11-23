<!DOCTYPE html>
<html lang="en">
<head>

	<title>Surfers Co. - Offerta</title>
	
   	<?php include("inc/inc_head.php"); ?>

	<link href="css/styleForm.css" rel="stylesheet" type="text/css" />

	

</head>
<body>
    
	<?php 

		require_once 'lib/funzioni.php'; 

	?>
	<main>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="registrazione">
		
			

			<form method="POST" action="conferma.php">
				<div class="titolo">
					<h1>Offerta Speciale!</h1>
					<h2>50% di sconto solo per te su questo modello!</h2>
				</div>
				<img src="images/img2.jpg" class="img-responsive center-block" alt=""/>
				<div class="form-group">
				
					<label for="email">Inserisci la tua email per riscattare l'offerta!</label>
					<br/>
					<input type="email" class="in1" name="email" required></input>

					
					
				</div>
					<div>
						<button type="submit" id="invio" class="in4">Invia</button>
					</div>
				<br/>
				<br/>
			</form>
		</div>
	</main>
	
	

	</body>
	
</html>
