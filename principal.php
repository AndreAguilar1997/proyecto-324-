<?php
include "conexion.inc.php";
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$sql="select * from flujoproceso ";
$sql.="where Flujo='$flujo' and proceso='$proceso'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
$pantalla=$fila['Pantalla'];
$pantalla.=".inc.php";
$pantallalogica=$fila['Pantalla'];
$pantallalogica.=".main.inc.php";
$procesoanterior=$proceso;
$proceso=$fila['ProcesoSiguiente'];
include $pantallalogica;
?>

<html>
<center>
<body bgcolor="5499C7">
	UNIVERSIDAD MAYOR DE SAN ANDRES <br>	
	<img src="escudo.png" width="150" height="380" style="float:left">
	
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

	<form action="motor.php" method="GET">
		<!--iframe src="pantalla.php"></iframe-->
		<input type="hidden" name="flujo" value="<?php echo $flujo;?>"/>
		<input type="hidden" name="proceso" value="<?php echo $proceso;?>"/>
		<input type="hidden" name="procesoanterior" value="<?php echo $procesoanterior;?>"/>
		<?php
		//echo $pantalla;
		include $pantalla;
		?>
		<input type="submit" name="Anterior" value="Anterior"/>
		<input type="submit" name="Siguiente" value="Siguiente"/>
	</form>
</center>
</body>
</html>