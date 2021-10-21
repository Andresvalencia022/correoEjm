<?php 
require_once "./includes/conexion.php"; 
$conexion = new Conexion();
$consulta=$conexion->actualizar("SELECT * FROM `correo`");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/estilo.css">
     <link rel="stylesheet" href="./css/menu.css">
    <title>correo</title>
</head>
<body>
<div class="caja1">
    <div class="caja">
        <h1>correos </h1>
    </div>    
   <div class="caja2">
   <nav class="menu">
                    <ul>
                        <li class="pricipal" ><a id="regre" href="./correos.php">princiapal</a> </li>
                        <li class="Stock"><a href="reportes_administrador.php">Notificaciones</a></li>
                        <li class="salida"><a href="#">social</a></li>
                    </ul>          
   </div>
   <div class="tabla">
       <table class="default">
<tr>
  <th>Nombre del emisor</th>
  <th>Remitente</th>
  <th>Asunto</th>
  <th>ver correo</th>
</tr>
<?php
    while ($filas = mysqli_fetch_array($consulta)) {
 ?>
<tr>
  <td><?php echo $filas['nombre_amisor.'] ?></td>
  <td><?php echo $filas['remitente'] ?></td>
  <td><?php echo $filas['asunto'] ?></td>
  <td><a href="Ver_correo.php ?id=<?php echo $filas['cod'] ?>" class="editar">ver correo</a></td>

</tr>
<?php 
    }
?>
</table>
       </div>    
    </div>
</body>
</html>