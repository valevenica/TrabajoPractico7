<?php
session_start();
?>
<html>
<head>
    <title>Almacenar Variable</title>
</head>
<body>
<?php
include ("conexion.inc");
$mail= $_POST['mail'];
$vSql = "select * FROM alumnos WHERE mail ='$mail' ";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));
$fila = mysqli_fetch_array($vResultado);
if(mysqli_num_rows($vResultado) == 0) 
{
    echo ("Usuario Inexistente...!!! <br>");
}
else
{
    $_SESSION['usuario']= $fila['nombre'];
}
?>
<a href="principal.php">Ingresar a pagina principal</a>;
</body>
</html>