<?php
ob_start("ob_gzhandler");
session_start();
include('conecion.inc');
if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];else $carro=false;
$qry=mysql_query("select * from catalogo order by producto asc");
?>
<html>
<head>
<title>CAT&Aacute;LOGO</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.catalogo {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 9px;
color: #333333;
}
-->
</style>
</head>
<body>
<table width="272" align="center" cellpadding="0" cellspacing="0" style="border: 1px solid #000000;">
<tr valign="middle" bordercolor="#FFFFFF" bgcolor="#DFDFDF" class="catalogo">
<td width="170"><strong>Producto</strong></td>
<td width="77"><strong>Precio</strong></td>
<td width="25" align="right"><a href="vercarrito.php?<?php echo SID ?>" title="Ver el contenido del carrito"><img src="vercarrito.gif" width="25" height="21" border="0"></a></td>
</tr>
<?php
while($row=mysql_fetch_assoc($qry)){
?>
<tr valign="middle" class="catalogo">
<td><?php echo $row['producto'] ?></td>
<td><?php echo $row['precio'] ?></td>
<td align="center"><?php
if(!$carro || !isset($carro[md5($row['id'])]['identificador']) || $carro[md5($row['id'])]['identificador']!=md5($row['id'])){
    ?><a href="agregacar.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>"><img src="productonoagregado.gif" border="0" title="Agregar al Carrito"></a><?php }
else
{?><a href="borracar.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>"><img src="productoagregado.gif" border="0" title="Quitar del Carrito"></a><?php } ?></td>
</tr><?php } ?>
</table>
</body>
</html>
<?php
ob_end_flush();
?>