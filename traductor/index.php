<html>
	<head>
		<title>Deaf-Communication</title>
		<link rel="stylesheet" type="text/css" href="css/cajas.css">
		<script src="js/jquery.js"></script>
		<script src="js/menu.js"></script>
		<script>
			$(document).ready(function(){
				$("#menu").css({'width':'0px'});
				$(".prn").fadeOut();
				$(".sec").fadeOut();
				$(".idm").fadeOut();
				$(".tra").fadeOut();
				$("#tit_a").fadeOut();
				$("#sub_men1").fadeOut();
				$("#sub_men2").fadeOut();
				$("#sub_men3").fadeOut();
				$("#pr_con").fadeOut();
				$("#caja_erizo").mouseover(function() {
					$("#caja_erizo").attr('src','img/erizo.gif');
				});
				$("#caja_cont").click(function() {
					$("#contacto").removeClass('off');
					$("#contacto").addClass('on');
					$("#img_fond").animate({'opacity':'1'},"solw");
					$("#pr_con").fadeIn(1000);
					$("#pr_con").fadeOut(10000);
					$("#tit_a").fadeIn(25000);
				});
				$("#cierra_c").click(function(){
					$("#contacto").removeClass('on');
					$("#contacto").addClass('off');
					$("#pr_con").fadeOut();
					$("#tit_a").fadeOut();
				});
				<?php
					if(empty($_GET['idm'])){
				?>
					$(".des").click(function() {
						$("#cosas").load('cosas/esp_des.html');
						$("#cosas").removeClass('off');
						$("#cosas").addClass('on');
					});
					$(".jus").click(function(){
						$("#cosas").load('cosas/esp_jus.html');
						$("#cosas").removeClass('off');
						$("#cosas").addClass('on');
					});
					$(".obj").click(function(){
						$("#cosas").load('cosas/esp_obj.html');
						$("#cosas").removeClass('off');
						$("#cosas").addClass('on');
					});
				<?php
					}else if($_GET['idm']=='en'){

				?>
					$(".des").click(function() {
						$("#cosas").load('cosas/en_des.html');
						$("#cosas").removeClass('off');
						$("#cosas").addClass('on');
					});
					$(".jus").click(function(){
						$("#cosas").load('cosas/en_jus.html');
						$("#cosas").removeClass('off');
						$("#cosas").addClass('on');
					});
					$(".obj").click(function(){
						$("#cosas").load('cosas/en_obj.html');
						$("#cosas").removeClass('off');
						$("#cosas").addClass('on');
					});
				<?php
					}

				?>
			});
		</script>
		<script>
		function teclea (texto,idioma) {
			var text ={
				'texto':texto,
				'idm':idioma
			};
				$.ajax({
					data:text,
					url:'cambia.php',
					type:'POST',
					beforeSend:function(){
						$("#resp").text('Traduciendo...');
					},
					success:function(resp){
						$("#resp").html(resp);
					}
				});
		}
		</script>
	</head>
	<body>
	<div id="cosas" class="off">
	</div>
	<img src="img/fondo.jpg" id="fondo">
	<h1 style="font-size:350%; font-family:AR HERMANN; text-align:center">Deaf-Communication</h1>
<?php
	if(empty($_GET['idm'])){
?>
	<center><div id="caja_menu"><img src="img/erizo.png" height="150" width="150" title="Ayuda" alt="Ayuda" id="caja_erizo" onclick="abre_men();">
		<ol id="menu" class="off">
			<li>
				<a href="javascript:void(0);" id="menu_op" class="prn" onclick="despliega($('#sub_men1'),1,'#sub_men1');">Principal</a>
				<div id="sub_men1"> 
					<a href="javascript:void(0);" id="sub_op">Presentaci&oacute;n</a>
					<a href="javascript:void(0);" id="sub_op" class="des">Descripci&oacute;n</a>
					<a href="javascript:void(0);" id="sub_op" class="jus">Justificaci&oacute;n</a>
					<a href="javascript:void(0);" id="sub_op" class="obj">Objetivo</a>
				</div>
			</li>
			<!--<li>
				<a href="javascript:void(0);" id="menu_op" class="sec" onclick="despliega($('#sub_men2'),2,'#sub_men2');">Secciones</a>
				<div id="sub_men2">
					<a href="javascript:void(0);" id="sub_op">Abecedario</a>
					<a href="javascript:void(0);" id="sub_op">Animales</a>
					<a href="javascript:void(0);" id="sub_op">Colores</a>
					<a href="javascript:void(0);" id="sub_op">N&uacute;meros</a>
					<a href="javascript:void(0);" id="sub_op">Pa&iacute;ses</a>
				</div>
			</li>-->
			<li>
				<a href="javascript:void(0);" id="menu_op" class="idm" onclick="despliega($('#sub_men3'),3,'#sub_men3');">Idioma</a>
				<div id="sub_men3">
					<a href="?idm=en" id="sub_op">Ingl&eacute;s</a>
					<a href="index.php" id="sub_op">Espa&ntilde;ol</a>
				</div>
			</li>
			<!--<li>
				<a href="" id="menu_op" class="tra">Traductor</a>
			</li>-->
		</ol>

		</div></center>
		<center><table id="caja_contenidos">
			<tr>
				<input type="hidden" value="esp" id="idioma">
				<td><textarea placeholder="Escribe Algo..." id="caja_escribe" onkeyup="teclea($('#caja_escribe').val(),$('#idioma').val());"></textarea></td>
				<td>
					<div id="resp"></div>
				</td>
			</tr>
		</table></center>
<?php
	}elseif ($_GET['idm'] == 'en') {
?>
				<center><div id="caja_menu"><img src="img/erizo.png" height="150" width="150" title="Ayuda" alt="Ayuda" id="caja_erizo" onclick="abre_men();">
		<ol id="menu" class="off">
			<li>
				<a href="javascript:void(0);" id="menu_op" class="prn" onclick="despliega($('#sub_men1'),1,'#sub_men1');">Main</a>
				<div id="sub_men1"> 
					<a href="javascript:void(0);" id="sub_op">Presentation</a>
					<a href="javascript:void(0);" id="sub_op" class="des">Description</a>
					<a href="javascript:void(0);" id="sub_op" class="jus">Justification</a>
					<a href="javascript:void(0);" id="sub_op" class="obj">Objective</a>
				</div>
			</li>
			<!--<li>
				<a href="javascript:void(0);" id="menu_op" class="sec" onclick="despliega($('#sub_men2'),2,'#sub_men2');">Secciones</a>
				<div id="sub_men2">
					<a href="javascript:void(0);" id="sub_op">Abecedario</a>
					<a href="javascript:void(0);" id="sub_op">Animales</a>
					<a href="javascript:void(0);" id="sub_op">Colores</a>
					<a href="javascript:void(0);" id="sub_op">N&uacute;meros</a>
					<a href="javascript:void(0);" id="sub_op">Pa&iacute;ses</a>
				</div>
			</li>-->
			<li>
				<a href="javascript:void(0);" id="menu_op" class="idm" onclick="despliega($('#sub_men3'),3,'#sub_men3');">Language</a>
				<div id="sub_men3">
					<a href="?idm=en" id="sub_op">English</a>
					<a href="index.php" id="sub_op">Spanish</a>
				</div>
			</li>
			<!--<li>
				<a href="" id="menu_op" class="tra">Traductor</a>
			</li>-->
		</ol>

		</div></center>
		<center><table id="caja_contenidos">
			<input type="hidden" value="en" id="idioma">
			<tr>
				<td><textarea placeholder="Write something..." id="caja_escribe" onkeyup="teclea($('#caja_escribe').val(),$('#idioma').val());"></textarea></td>
				<td>
					<div id="resp"></div>
				</td>
			</tr>
		</table></center>
<?php
	}
?>
	<div id="contacto" class="off">
					<div id="pr_con">
				 Bienvenido seas Deaf-Communication
                        Nosotros somos Edgar Andrei y Leslie Itzel y es un placer presentarles nuestro proyecto de titulaci&oacute;n para graduarnos como 'T&eacute;cnicos en Sistemas Digit&aacute;les' del Centro de Estudios Cient&iacute;ficos y Tecnol&oacute;gicos #1 'Gonzalo V&aacute;zquez Vela'.

                                        &Eacute;sta p&aacute;gina de internet fue creada pensando principalmente en aquellas personas que carecen de auidici&oacute;n o capacidad de hablar, quieres usan un lenguaje de se&ntilde;as para comunicarse entre la sociedad. Aqu&iacute; puedes conocer la forma de expresar una idea a alguien que no puede dialogar como normalmente hacemos. 

                       Si tienes alguna duda o sugerencia que quieras decirnos con relaci&oacute;n a la p&aacute;gina web 'Deaf-Communication' puedes informarnos poniendote en contacto con nosotros dando clic en 'contáctanos' y esperamos que el sitio sea de tu agrado.

                     ATTE.              Edgar y Leslie
					</div>
		<div id="tit_a">
			<center><b><h2><code>- Contacto -</code></h2></b></center>
			<div id="contact">
					Cedillo Labrada Leslie Itzel<br> 
						Tel. 0445527556254<br>
						Estudios: CECyT #1 'Gonzalo Vazquez Vela'	Grupo: 6IV23<br>
						Direcci&oacute;n: Calle Cuauhtemoc #127,<br>
				 		Col. Barrio la Asunci&oacute;n,<br>
				  		Del. Iztapalapa CP. 09000<br>
						Correo: lm.c.gazette@gmail.com<br>
						Facebook: Leslie Cedillo<br>
				<hr id="sep">
					Olvera Velasco Edgar Andrei<br>
					Tel.0445529689509<BR>
					Estudios: CECyT #1 'Gonzalo Vazquez Vela'	Grupo: 6IV23<br>
					Direcci&oacute;n:Calle Ruben Dario Mz 6 Lt 13,<br>
					Col. Renacimiento de Aragon.<br>
					Ecatepec de Morelos<br>
					Correo:semplet3@hotmail.com<br>
					Facebook: Jhonny Andre<br>
			</div>
			<center><input type="button" value="Cerrar" id="cierra_c"></center>
		</div>
		<img src="img/contacto.png" id="img_fond">
	</div>
<?php
	if(empty($_GET['idm'])){
?>
		<table id="caja_contacto">
			<tr>
				<td><a href="javascript:void(0);" id="caja_cont">Contacto</a></td>
				<td><center><code id="caja_cont_est">Creaci&oacute;n de p&aacute;gina:06/06/2015</code></center></td>
				<td><center><code id="caja_cont_est">Ultima actualizaci&oacute;n: 22/06/2015</code></center></td>
			</tr>
		</table>
<?php
	}else if($_GET['idm'] == 'en'){
?>
	<table id="caja_contacto">
			<tr>
				<td><a href="javascript:void(0);" id="caja_cont">Contact</a></td>
				<td><center><code id="caja_cont_est">Page creation:06/06/2015</code></center></td>
				<td><center><code id="caja_cont_est">Last actualitation: 22/06/2015</code></center></td>
			</tr>
		</table>
<?php
	}
?>
	</body>
</html>