<?php
    
	setcookie("mio_cookie", "valore di un cookie preimpostato da php", time()+3600);
	
	$json = json_encode('cookie');
	echo $json;