<?php
    require_once 'lib/config.php';
	
	
			//locale
	if($_SERVER['HTTP_HOST'] == 'localhost')
	{
		require_once 'lib/DbManager.php';
	}
			//remoto
	else
	{
		require_once 'lib/DbManager.php';
	}
	
    require_once 'lib/funzioni.php';
	
   
    $nome = PostVal('nome');
    $cognome = PostVal('cognome');
    $email = PostVal('email');
    $messaggio = PostVal('messaggio');
		
	$nome = addslashes($nome);
	$cognome = addslashes($cognome);
	$email = addslashes($email);
	$messaggio = addslashes($messaggio);
	
	$sSQL = "INSERT INTO messaggipw
			(
					nome
					, cognome
					, email
					, messaggio
			)
			VALUES
			(
					'$nome'
					, '$cognome'
					, '$email'
					, '$messaggio'
			)";
			
	$dbMan = new DbManager($db_host, $db_name, $db_user, $db_password);
	$dbMan->Esegui($sSQL);
	
	$arOut = ['stato'=>'OK'];
	
	$json = json_encode ( $arOut );
    echo($json);
	
	
	