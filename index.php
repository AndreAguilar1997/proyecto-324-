<html>
<LINK REL=StyeSheet HREF="estilos.css" TYPE="text/css">

	
	<img src="escudo.png" width="150" height="380" style="float:left">
<center>
<body background="fondo1.jpg" bgcolor="5499C7">
	UNIVERSIDAD MAYOR DE SAN ANDRES <br>
	CONVOCATORIA A INSCRIPCION<br> 
	INSCRIPCIÓN DE PROFESIONALES GESTIÓN 2022<br>
	(SEGUNDO SEMESTRE)<br>
	                       <br>
						   <br>
						   <br>
						   
	La División de Gestiones, Admisiones y Registros, publica las plazas programadas y<br>
	autorizadas por las Carreras de la UMSA, las mismas que corresponden a la Gestión<br>
	2022 (Segundo Semestre).<br>
	Publicamos el Calendario a partir del día lunes 9 de mayo de 2022 a través del Portal<br>
	de la UMSA, Plataforma de Información y las ventanillas de la División de Gestiones, <br>
	Admisiones y Registros.<br>
	Recomendamos a los interesados, tomar nota de las fechas programadas para la recepción<br>
	de documentos, de acuerdo a requisitos y procedimiento también publicado.<br>
	SOLICITUD DE INSCRIPCION PARA PROFESIONALES (PROFESIONALES UNIVERSITARIOS, MILITARES<br>
	Y OFICIALES DE POLICÍA (a partir del Grado de Sub-Teniente), MAESTROS NORMALISTAS Y <br>
	TITULADOS DE INSTITUTOS TÉCNICOS CON CONVENIO<br>
	
		
		<br>

	<form action="principal.php" method="GET">
		<!--iframe src="pantalla.php"></iframe-->
		<input type="hidden" name="flujo" value="<?php echo $flujo;?>"/>
		<input type="hidden" name="proceso" value="<?php echo $proceso;?>"/>
		<input type="hidden" name="procesoanterior" value="<?php echo $procesoanterior;?>"/>
		<?php
		//echo $pantalla;
	//	include $pantalla;
		?>
		<input type="submit" name="Anterior" value="Anterior"/>
		<input type="submit" name="Siguiente" value="Siguiente"/>
	</form>
	
</center>
</body>
</html>