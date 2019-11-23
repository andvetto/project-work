<!DOCTYPE html>
<html lang="en">
<head>

	<title>Surfers Co. - Conferma</title>
	
   	<?php include("inc/inc_head.php"); ?>

	<link href="css/styleForm.css" rel="stylesheet" type="text/css" />

	

</head>
<body>
    
	<?php 

		require_once 'lib/funzioni.php';
		
		if(isset($_POST)){
			$email = PostVal('email');
			$email = addslashes($email);
		} else  {
			$email = "";
		}
	
	?>
	<main>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="registrazione">
		
			

			<form>
				<div class="titolo">
					<h1>Congratulazioni sarai ricontattato a breve!</h1>
					
				</div>

				<div class="form-group">
					<label>Ricevarai un'email di conferma nella casella di posta <?php echo $email ?>	
					</label>
				</div>
				<div class="form-group">
					<label>Clicca per tornare alla homepage del sito!</label>
					

					
					
				</div>
					<div>
						<a href="index.php"><button type="button" id="invio" class="in4">Home</button></a>
					</div>
				<br/>
				<br/>
			</form>
		</div>
	</main>
	


	</body>
	
</html>
