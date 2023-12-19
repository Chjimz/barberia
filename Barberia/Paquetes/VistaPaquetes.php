<?php
$conexion=mysqli_connect("localhost", "root", "fime123","barberia");
$conexion->set_charset("utf8");
$consulta = "SELECT Id_Paquete, servicios.Nombre_Servicio, productos.Nombre_Producto, Nombre_Paquete,Precio_Paquete,Descuento 
FROM paquetes
inner join servicios on paquetes.Id_Servicio = servicios.Id_Servicio
inner join productos on paquetes.Id_Producto= productos.Id_Producto";
$resultado= mysqli_query($conexion, $consulta);
?>

<!DOCTYPE html>
<html>
<head>
	<title>PAQUETES</title>
	<link rel="stylesheet" type="text/css" href="PantallaIngresos.css">
</head>
<body>
	<div class="head">
	</div>
    <a href="/barberia/login/main.php"><button>MENU PRINCIPAL</button></a>
    <h3 align=center>PAQUETES</h3>
    <div class="table" id="Tabla consulta">
        <table class="table">
            <thead>
            <th>ID</th>
            <th>NOMBRE DE PAQUETE</th>

            <th>NOMBRE DE SERVICIO</th>
            <th>NOMBRE DE PRODUCTO</th>
            <th>PRECIO DE PAQUETE</th>
            <th>DESCUENTO $</th>
            </thead>
            <tbody>
            <?php while($row = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['Id_Paquete']; ?></td>
                    <td><?php echo $row['Nombre_Paquete']; ?></td>
                    <td><?php echo $row['Nombre_Servicio']; ?></td>
                    <td><?php echo $row['Nombre_Producto']; ?></td>
                    <td><?php echo $row['Precio_Paquete']; ?></td>
                    <td><?php echo $row['Descuento']; ?></td>
                    <td>
                        <br>
                        <a href="editar_paquetes.php?id=<?php echo $row["Id_Paquete"];?>" class="table_item_link">EDITAR</a> 
                        <a href="eliminar_paquetes.php?id=<?php echo $row["Id_Paquete"];?>" class="table_item_link">ELIMINAR</a>
                    </td>

                    </td>  
                </tr>
            <?php } ?>
            </tbody>

        </table>    
    </div>
	