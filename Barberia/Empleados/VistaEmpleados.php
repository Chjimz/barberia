<?php
$conexion=mysqli_connect("localhost", "root", "fime123","barberia");
$conexion->set_charset("utf8");
$consulta = "SELECT Id_Empleado, Nombre_Empleado, ApellidoPaterno_Empleado, ApellidoMaterno_Empleado, Telefono_Empleado, Email_Empleado FROM empleado";
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
    <h3 align=center>EMPLEADOS</h3>
    <div class="table" id="Tabla consulta">
        <table class="table">
            <thead>
            <th>ID</th> 
            <th>Nombre</th>
            <th>Apellido_Paterno</th>
            <th>Apellido_Materno</th>
            <th>Telefono</th>
            <th>Email</th>
            </thead>
            <tbody>
            <?php while($row = $resultado->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $row['Id_Empleado']; ?></td>
                    <td><?php echo $row['Nombre_Empleado']; ?></td>
                    <td><?php echo $row['ApellidoPaterno_Empleado']; ?></td>
                    <td><?php echo $row['ApellidoMaterno_Empleado']; ?></td>
                    <td><?php echo $row['Telefono_Empleado']; ?></td>
                    <td><?php echo $row['Email_Empleado']; ?></td>
                    <td>
                        <br>
                        <a href="editar_empleado.php?id=<?php echo $row["Id_Empleado"];?>" class="table_item_link">EDITAR</a> 
                        <a href="eliminar_empleado.php?id=<?php echo $row["Id_Empleado"];?>" class="table_item_link">ELIMINAR</a>
                    </td>

                    </td>  
                </tr>
            <?php } ?>
            </tbody>

        </table>    
    </div>
	