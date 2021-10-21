<?php 
require_once "./includes/conexion.php";
$conexion = new Conexion();

$id = $_GET['id'];
$fila = $conexion->consultar_con("SELECT*FROM correo WHERE cod  = '$id'"); 

//var_dump($fila); die;   //para rectificar que si este tomando los datos la palabra $fila
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">
   
    <title>ver correo</title>
</head>
<body>
    <div class="contenedor">
    <div class="caja1">
    <div class="caja">
        <h1>correos </h1>
    </div>    
   <div class="caja2">
   <nav class="menu">
                    <ul>
                    <li class="pricipal" ><a id="regre" href="./correos.php">princiapal</a> </li>
                        <li class="Stock"><a href="reportes_administrador.php">Notificacion</a></li>
                        <li class="salida"><a href="#">social</a></li>
                    </ul> 
   </nav>
</div>
<div class="datos">
    
    <h1>Nombre Emisor:  <?php echo$fila[1] ?></h1>
    <h3> Asunto: <?php echo$fila[3] ?></h3>
    <p><?php echo$fila[4] ?><p>
    <br>
    <p><img  width="300" src="data:image/png;base64,<?php echo base64_encode($fila[5])?>")> 
    </p>

 </div>
 </div>
    </div>

</body>
</html>
