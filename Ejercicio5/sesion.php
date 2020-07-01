<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion</title>
</head>
<body>
    <?php
        $usuario = $_POST['Usuario'];
        $clave = $_POST['Clave'];
        $_SESSION['Usuario'] = $usuario;
        $_SESSION['Clave'] = $clave;
    ?>
    <a href="valores.php">Ver usuario</a>
</body>
</html>