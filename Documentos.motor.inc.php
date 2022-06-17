<?php
session_start();
$cnacimiento=$_GET["fechamacimiento"];
$cidentidad=$_GET["ci"];
$sql="update academico.alumno set ";
$sql.="fechamacimiento='$cnacimiento', ci='$cidentidad' ";
$sql.="where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);
?>
<html>
<body bgcolor="FFFFFF">

</body> 
</html>