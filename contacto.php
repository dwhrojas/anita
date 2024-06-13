
<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="utf-8"/>
	<!-- title texto que aparece en la explicacion que sale en google
		-->
	<title> Secci&oacute;n Contacto de Cabañas La anita, en Alumin&eacute;e</title>
	
	<meta name="description" content="En esta secci&oacute;n podra tomar contacto con nosotros, enviarnos un email de consulta o registrar nuestros telefonos para llamarnos" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="shortcout icon" type="image/x-icon" href="favicon.ico"/>
	<link rel="author" type="text/plain" href="human.txt" />
	<link rel="sitemap" type="application/xml" title="Sitemap" href="sitemap.xml" />
	<link rel="stylesheet" href="css/estilos.css"/>
		<!-- [if lt IE 9]>
	   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js "> </script>
	<![endif]--> 
	<script type="text/javascript">

  var _gaq = _gaq || [];
var pluginUrl = 
 '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
  _gaq.push(['_setAccount', 'UA-XXXXX-X']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>  
</head>

<body>
   <header> 
	<!-- empesamos maquetando el header -->  
	<h1> Cabañas la anita</h1>
	<nav>
	 <!-- eel nav puede ir afuera tambien  --> 
		<ul>
			<li><a href="index.html">Inicio</a></li>
			<li><a href="acerca.html">Acerca</a></li>
			<li><a href="servicios.html">Servicios</a></li>
			<li><a href="galeria.html">Galeria</a></li>
			<li><a href="contacto.html">Contacto</a></li>
		</ul>
	</nav> 
   </header>
   <section id="contenido">
		 	 <section id="contacto">
		 	 	<h2>Cont&aacute;ctanos</h2>
		 	 	<article id="info-contacto">
		 	 		<p>
		 	 			Email:
		 	 			<span class="datos-contacto">consulta@cabaniaslaanita.com.ar</span>
		 	 			<br />email alternativo:
		 	 			<span class="datos-contacto">cabanaslaanita@gmail.com</span>
		 	 			<br />
		 	 			
						Tel&eacute;fono:
		 	 			<span class="datos-contacto">02942-496158</span>
		 	 			<br />	 	 	
		 	 			M&oacute;vil:
		 	 			<span class="datos-contacto">02942-15666290</span>
		 	 			<br />
		 	 			Direcci&oacute;n:
		 	 			<span class="datos-contacto">Ruta 23 acceso arroyo maipen</span>
		 	 			
		 	 		</p>			 	 		 
		 	 	</article>
		 	 	<article id="contactanos">
		 	 		<form enctype='multipart/form-data' action='contacto.php#capcha' method='post'>
						

									<fieldset>
		 	 				<legend> Env&iacute;anos tus comentarios</legend>
		 	 				<div>
		 	 					<label for="nombre">Nombre:</label>
		 	 					<input type="text" id="nombre" class="fade" name="nombre" required placeholder="introduzca su nombre" value="<?php echo $nombre; ?>" />
		 	 				</div>
		 	 				<div>
		 	 					<label for="email">Email:</label>
		 	 					<input type="email" id="email" class="fade" name="email" required placeholder="introduzca su email" value="<?php echo $email; ?>" />
		 	 				</div>
		 	 				<div>
		 	 					<label for="asunto">Asunto:</label>
		 	 					<input type="text" id="asunto" class="fade" name="asunto" required placeholder="introduzca motivo de consulta" value="<?php echo $asunto; ?>" />
		 	 				</div>
		 	 				<div>
		 	 					<label for="comentarios">Comentarios:</label>
		 	 					<textarea id="comentarios" clas="fade" name="mensaje" cols="31" rows="5" required placeholder="introduzca su consulta, por favor detalle cantidad de visitantes y deje un telefono para contactarlo"><?php echo $mensaje; ?></textarea>
		 	 				</div>
		 	 				
		 	 				<div>
							<A NAME=capcha></A>
							<?php
								echo '<h2>' . $error . '</h2>';
								echo recaptcha_get_html($publickey, $error);
							?>
		 	 				</div>
		 	 				 
		 	 				<div>
		 	 					<input type="submit" id="enviar" class="fade" name="enviar_btn" value="Enviar"/>
		 	 					  
		 	 						<input type="reset" id="reset" class="fade" name="reset_btn" value="Limpiar"/>
		 	 					 
		 	 				</div>	
		 	 			</fieldset>	
						</form>	
		 	 	</article>
		 	 	

		 	 </section>
		 	 <section id="mapa">
		 	 	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=La+Anita,+Alumin%C3%A9,+Neuqu%C3%A9n&amp;aq=0&amp;oq=la+anita&amp;sll=-38.452918,-63.598921&amp;sspn=30.625608,52.910156&amp;ie=UTF8&amp;hq=La+Anita,&amp;hnear=Alumin%C3%A9,+Neuqu%C3%A9n&amp;ll=-39.25,-70.916&amp;spn=0.029713,0.05167&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=17273215338948548990&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.ar/maps?f=q&amp;source=embed&amp;hl=es-419&amp;geocode=&amp;q=La+Anita,+Alumin%C3%A9,+Neuqu%C3%A9n&amp;aq=0&amp;oq=la+anita&amp;sll=-38.452918,-63.598921&amp;sspn=30.625608,52.910156&amp;ie=UTF8&amp;hq=La+Anita,&amp;hnear=Alumin%C3%A9,+Neuqu%C3%A9n&amp;ll=-39.25,-70.916&amp;spn=0.029713,0.05167&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=17273215338948548990" style="color:#1E6381;text-align:left">Ver mapa más grande</a></small>	
		 	 </section>	
		 	 <!-- social    
		 	 			<br />
		 	 			Social Media:<br />
		 	 			<span class="datos-contacto">
		 	 					<a class="fade" href="http://facebook.com/david.w.herrera" title="Facebook"> <img class="redonda" src="img/facebook-logo.png"></a>
		 	 					&nbsp;&nbsp;&nbsp;
		 	 					<a class="fade" href="http://twitter.com/wdhalumine" title="Twitter"> <img class="redonda" src="img/twitter-logo.png"></a>
		 	 					&nbsp;&nbsp;&nbsp;
		 	 					<a class="fade" href="http://plus.google.com//106845540797028216827" title="Google +"> <img class="redonda" src="img/google-logo.png"></a>
		 	 					&nbsp;&nbsp;&nbsp;
		 	 					<a class="fade" href="http://youtube.com/wdhalumine" title="Youtube"> <img class="redonda" src="img/youtube-logo.png"></a>
		 	 					&nbsp;&nbsp;&nbsp;
 		 	 			</span>		 -->  	 			

   </section>
	
	<footer>
		 ALQUILER DE CABAÑAS - CAMPING CON PLAYA PRIVADA -  Disfrute sus vacaciones este es su lugar. <br>
		 
		<h1>Junto al rio </h1>  
	</footer>	
</body>
</html>
