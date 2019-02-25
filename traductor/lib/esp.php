<?php
	$palabras_esp = array(
			'hola' => '<img src="img/hola.gif" width="25%" height="75%">'
		);
	function checa_existencia($palabra,$for){
		if($for == 0){
			$palabras_esp = array(
				'hola' => '<img src="img/hola.gif"  width="25%" height="75%">'
			);
			echo $palabras_esp[$palabra];
		}else{
			$palabras_espa = array(
				'hola' => '<img src="img/hola.gif"  width="25%" height="75%">'
			);
			$arra = explode(' ',$palabra);
			for ($i=0; $i < $for; $i++) { 
				/*if (array_key_exists($palabra[$i], $palabras_espa)) {
					echo $palabras_espa[$palabra];
				}*/
				if (array_key_exists($arra[$i],$palabras_espa)) {
					echo $palabras_espa[$arra[$i]];
				}else{
					break;
				}
			}
		}
	}
?>