<!DOCTYPE html>
<html lang="en">
<head>

	<title>Surfers Co. - Contatti</title>
	
   	<?php include("inc/inc_head.php"); ?>

	<link href="css/styleForm.css" rel="stylesheet" type="text/css" />

	<script src="js/form.js"> </script>

</head>
<body>
    
	<?php include("inc/inc_header.php"); ?>
	
	<main>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="registrazione">
		
			<div id="loading">
				<img src="images/loading.gif" alt="" />
			</div>
			
			<div id="successo" class="nonmostrare">
				<h2>Congratulazioni, hai inviato il messaggio con successo!</h2>
				
				<a href="index.php">Torna alla Home</a>
					
				<br/>
				<br/>
				<br/>
			</div>	

			<form>
				<div class="titolo">
					<h1>CONTATTACI</h1>
				</div>

				<div class="form-group">
					<label for="nome">Nome</label>
					<br/>
					<input type="text" class="in1" id="nome">
					
					<br/>
					<label for="cognome">Cognome</label>
					<br/>
					<input type="text" class="in1" id="cognome">
					
					<br/>
					<label for="email">Email</label>
					<br/>
					<input type="text" class="in1" id="email">

					<br/>
					<label for="messaggio">Messaggio</label>
					<br/>
					<textarea id="messaggio" class="in1"></textarea>
					
				</div>
					<div>
						<button type="button" id="invio" class="in4">Invia</button>
					</div>
				<br/>
				<br/>
			</form>
		</div>
	</main>
	
	<?php include("inc/inc_footer.php"); ?>

	</body>
	
</html>
