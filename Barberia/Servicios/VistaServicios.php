<?php
$conexion=mysqli_connect("localhost", "root", "fime123","barberia");
$conexion->set_charset("utf8");
$consulta = "SELECT * FROM servicios";
$resultado= mysqli_query($conexion, $consulta);
?>

<!DOCTYPE html>
<html>
<head>
	<title>VistaBarberia</title>
	<link rel="stylesheet" type="text/css" href="PantallaIngresos.css">
</head>
<body>
	<div class="head">
	</div>
    <a href="/barberia/login/main.php"><button>MENU PRINCIPAL</button></a>
    <h3 align=center>SERVICIOS</h3>
    <div class="table" id="Tabla consulta">
        <table class="table">
            <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>ESPECIFICACIONES</th>
         
            </thead>
            <tbody>
            <?php while($row = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['Id_Servicio']; ?></td>
                    <td><?php echo $row['Nombre_Servicio']; ?></td>
                    <td><?php echo $row['Precio_Servicio']; ?></td>
                    <td><?php echo $row['Especificaciones']; ?></td>
                   
                    <td>
                        <br>
                        <a href="editar_servicio.php?id=<?php echo $row["Id_Servicio"];?>" class="table_item_link">EDITAR</a> 
                        <a href="eliminar_servicio.php?id=<?php echo $row["Id_Servicio"];?>" class="table_item_link">ELIMINAR</a>
                    </td>

                    </td>  
                </tr>
            <?php } ?>
            </tbody>

        </table>    
    </div>
	