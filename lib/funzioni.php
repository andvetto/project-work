<?php 
	//*******************************************************
	//v1 GetVal('nome parametro get');
	//Recuperavalori GET e ne restituisce il valore
	// - Restituisce:
	//				'' Se il parametro non è presente
	//				Il valore del paramentro, quando presente
	//*******************************************************
	
	function GetVal($nome)
	{
		$valore = '';
		if(isset($_GET[$nome]))
		{
			$valore = $_GET[$nome];
		}
		return $valore;
		
	}
	
	function PostVal($nome)
	{
		$valore='';
		if(isset($_POST[$nome]))
		{
			$valore = $_POST[$nome];
		} 
		return $valore;
	}