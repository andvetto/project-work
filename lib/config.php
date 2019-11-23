<?php
			//locale
	if($_SERVER['HTTP_HOST'] == 'localhost')
	{
		$db_host = '127.0.0.1';
		$db_name = 'pomeriggio';
		$db_user = 'root';
		$db_password = 'root';
	}
			//remoto
	elseif($_SERVER['HTTP_HOST'] == 'alunno14.corsi-idi.it')
	{
		$db_host = 'hostingmysql270.register.it';
		$db_name = 'corsi__idi_it_alunno4';
		$db_user = 'CRR33_alunno4';
		$db_password = 'db02#IDI';
	}
		
		else
	{
		$db_host = 'localhost';
		$db_name = 'id10371893_contatti';
		$db_user = 'id10371893_andvetto';
		$db_password = 'andvetto';
	}


	
	