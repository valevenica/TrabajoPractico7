<?php
//miro si hay una cookie creada
if (isset($_COOKIE["contador"])){
//es que tengo la cookie
$contador = $_COOKIE["contador"];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>Ejercicio 2</title>
<?php
//miro si he tengo un contador
if (isset($contador)){
    echo "Contador de visitas: " . $contador;
    $contador ++;
    setcookie("contador", $contador, time() + (60 * 60 * 24 * 90));

}
else{
    $contador = 2;
    setcookie("contador", $contador, time() + (60 * 60 * 24 * 90));
    echo "Bienvenido a la pagina";
    
}
