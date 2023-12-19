<?php
$conexion=mysqli_connect("localhost", "root", "fime123","barberia");
$conexion->set_charset("utf8");
$consulta = "SELECT * FROM cliente";
$resultado= mysqli_query($conexion, $consulta);
?>

<!DOCTYPE html>
<html>
<head>
	<title>CLIENTES</title>
	<link rel="stylesheet" type="text/css" href="PantallaIngresos.css">
</head>
<body>
	<div class="head">
	</div>
    <a href="/barberia/login/main.php"><button>MENU PRINCIPAL</button></a>
    <h3 align=center>CLIENTES</h3>
    <div class="table" id="Tabla consulta">
        <table class="table">
            <thead>
            <th>ID</th>
            <th>NOMBRE(S)</th>
            <th>APELLIDO(S)</th>
            <th>EMAIL</th>
            <th>#TARJETA $</th>
            </thead>
            <tbody>
            <?php while($row = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['Id_Cliente']; ?></td>
                    <td><?php echo $row['Nombre_Cliente']; ?></td>
                    <td><?php echo $row['Apellido_Cliente']; ?></td>
                    <td><?php echo $row['Email_Cliente']; ?></td>
                    <td><?php echo $row['numTarjeta']; ?></td>
                    
                    <td>
                        <br>
                        <a href="editar_cliente.php?id=<?php echo $row["Id_Cliente"];?>" class="table_item_link">EDITAR</a>  
                        <a href="eliminar_cliente.php?id=<?php echo $row["Id_Cliente"];?>" class="table_item_link">ELIMINAR</a>
                    </td>

                    </td>  
                </tr>
            <?php } ?>
            </tbody>

        </table>    
    </div>
	