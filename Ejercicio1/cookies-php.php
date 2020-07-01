<?php
//Veo si recibo datos del formulario 
if(isset($_POST["estilo"])){
//es que estoy recibiendo un estilo nuevo, lo tengo que meter en las cookies
$estilo = $_POST["estilo"];
//meto el estilo en una cookie
setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
}
else{
//si no he recibido el estilo que desea el usuario en la página, miro si hay una cookie creada
if (isset($_COOKIE["estilo"])){
//es que tengo la cookie
$estilo = $_COOKIE["estilo"];
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>Ejercicio 1</title>
<?php
//miro si he tengo un estilo definido, porque entonces tengo que cargar la correspondiente hoja de estilos
if (isset($estilo)){
echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo . '.css">';
}
?>
</head>
<body>
Ejemplo de uso de cookies en PHP para almacenar la hoja de estilos css que queremos utilizar para definir el aspecto de la página.
<p>
<form action="cookies-php.php" method="post"> Aquí puedes seleccionar el estilo que prefieres en la página:
<br>
<select name="estilo">
<option value="verde">Verde</option>
<option value="rosa">Rosa</option>
<option value="negro">Negro</option>
</select>
<input type="submit" value="Actualizar el estilo">
</form>
</body>
</html>