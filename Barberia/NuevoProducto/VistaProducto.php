<?php
$conexion=mysqli_connect("localhost", "root", "fime123","barberia");
$conexion->set_charset("utf8");
$consulta = "SELECT * FROM productos";
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
    <h3 align=center>PRODUCTOS</h3>
    <div class="table" id="Tabla consulta">
        <table class="table">
            <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>FECHA DE CADUCIDAD</th>
            <th>FECHA DE ENTREGA</th>
            <th>CANTIDAD</th>
            <th>PRECIO</th>
            <th>ESPECIFICACIONES</th>
            </thead>
            <tbody>
            <?php while($row = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['Id_Producto']; ?></td>
                    <td><?php echo $row['Nombre_Producto']; ?></td>
                    <td><?php echo $row['FechaCaducidad_Producto']; ?></td>
                    <td><?php echo $row['FechaEntrega_Producto']; ?></td>
                    <td><?php echo $row['Cantidad_Producto']; ?></td>
                    <td><?php echo $row['Precio_Producto']; ?></td>
                    <td><?php echo $row['Especificaciones']; ?></td>
                    <td>
                        <br>
                        <a href="editar_producto.php?id=<?php echo $row["Id_Producto"];?>" class="table_item_link">EDITAR</a> 
                        <a href="eliminar_producto.php?id=<?php echo $row["Id_Producto"];?>" class="table_item_link">ELIMINAR</a>
                    </td>

                    </td>  
                </tr>
            <?php } ?>
            </tbody>

        </table>    
    </div>
	