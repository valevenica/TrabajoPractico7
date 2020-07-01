<?php

if(isset($_POST["titular"])){
$titular = $_POST["titular"];
setcookie("titular", $titular, time() + (60 * 60 * 24 * 90));
}
else{
if (isset($_COOKIE["titular"])){
$titular = $_COOKIE["titular"];
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>Ejercicio 4</title>
<?php

if (isset($titular)){
    echo 'Noticia '.$titular;
}
else{
    echo 'Noticia Politica ';
    echo 'Noticia Economica ';
    echo 'Noticia Deportiva ';

}
?>
</head>
<body>
    <br>
    <br>
    <a href="titulares.html">Cambiar titular</a>
    <br>
    <a href="borrar.php">Borrar Cookies</a>
</body>
</html>