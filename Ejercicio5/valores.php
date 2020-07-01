<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    Usuario registrado:
    <?php 
    echo $_SESSION['Usuario'] .','. $_SESSION['Clave'];
    ?>
</body>
</html>