<?php
	if($_POST['idm'] == 'en'){
		include('lib/en.php');
	}else{
		include('lib/esp.php');
	}
	$texto = strtolower(htmlentities($_POST['texto']));
	$validos = 'abcdefghijklmnñopqrstuvwxyz ';
	$validos.= 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZ';
	$validos.='123456789';
	$imagenes = array(
		'a' => '<img src="img/a.png" width="25%" height="50%">', 
		'b' => '<img src="img/b.png" width="25%" height="50%">',
		'c' => '<img src="img/c.png" width="25%" height="50%">',
		'd' => '<img src="img/d.png" width="25%" height="50%">',
		'e' => '<img src="img/e.png" width="25%" height="50%">',
		'g' => '<img src="img/g.png" width="25%" height="50%">',
		'f' => '<img src="img/f.png" width="25%" height="50%">',
		'h' => '<img src="img/h.png" width="25%" height="50%">',
		'i' => '<img src="img/i.png" width="25%" height="50%">',
		'j' => '<img src="img/j.gif" width="25%" height="50%">',
		'k' => '<img src="img/k.png" width="25%" height="50%">',
		'l' => '<img src="img/L.png" width="25%" height="50%">',
		'0'=> '<img src="img/LL.gif" width="25%" height="50%">', //Doble ll
		'm' => '<img src="img/m.png" width="25%" height="50%">',
		'n' => '<img src="img/n.png" width="25%" height="50%">',
		'kk' => '<img src="img/ñ.gif" width="25%" height="50%">',
		'o' => '<img src="img/o.png" width="25%" height="50%">',
		'p' => '<img src="img/p.png" width="25%" height="50%">',
		'q' => '<img src="img/q.png" width="25%" height="50%">',
		'r' => '<img src="img/r.png" width="25%" height="50%">',
		's' => '<img src="img/s.png" width="25%" height="50%">',
		't' => '<img src="img/t.png" width="25%" height="50%">',
		'u' => '<img src="img/u.png" width="25%" height="50%">',
		'v' => '<img src="img/v.png" width="25%" height="50%">',
		'w' => '<img src="img/w.png" width="25%" height="50%">',
		'x' => '<img src="img/x.png" width="25%" height="50%">',
		'y' => '<img src="img/y.png" width="25%" height="50%">',
		'z' => '<img src="img/z.gif" width="25%" height="50%">',
		'1' => '<img src="img/1.png" width="25%" height="70%">',
		'2' => '<img src="img/2.png" width="25%" height="70%">',
		'3' => '<img src="img/3.png" width="25%" height="70%">',
		'4' => '<img src="img/4.png" width="25%" height="70%">',
		'5' => '<img src="img/5.png" width="25%" height="70%">',
		'6' => '<img src="img/6.gif" width="25%" height="70%">',
		'7' => '<img src="img/7.gif" width="25%" height="70%">',
		'8' => '<img src="img/8.png" width="25%" height="70%">',
		'9' => '<img src="img/9.gif" width="25%" height="70%">',
		'' => ''
		);
	$numero_de_espacios = explode(' ', $texto);
	$total = count($numero_de_espacios) - 1;
	$u = 0;
	$espacios = 0;
	for ($i = 0; $i < strlen($texto) ; $i++) { 
		if(array_key_exists($texto,$palabras_esp) && $total == 0){
			checa_existencia($texto,0);
			$i = $i + strlen($texto) - 1;
			goto salida;
		}else{		
			if(array_key_exists($numero_de_espacios[$espacios],$palabras_esp) && $u <= $total){	
			echo $palabras_esp[$numero_de_espacios[$u]];
			$u = $u + 1;
			$i = $i + strpos($texto,' ');
			$espacios = $espacios + 1;
			goto salida;
		}else{ 
			if(strpos($validos, substr($texto,$i,1)) !== false){
				if (substr($texto,$i,1) == 'l' && substr($texto,$i+1,1) == 'l' ) {
					echo $imagenes['0'];
					$i = $i + 1;
					goto salida;
				}
				if(array_key_exists(substr($texto,$i,1),$imagenes)){
					echo $imagenes[substr($texto,$i,1)];
				}
				//echo htmlentities(substr($texto,$i,1));
				}else if(substr($texto,$i,1) == '&' && substr($texto,$i + 7,1) == ';'){
					echo $imagenes['kk'];
					$i = $i + 7;
				}


				if(substr($texto,$i,1)== ' '){
					$espacios = $espacios + 1;
					$u = $u + 1 ;
				}

			}
		}
salida:
	}

?>