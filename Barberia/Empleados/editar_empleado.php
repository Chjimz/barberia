<?php
if(isset($_GET['id'])) {
    $id_empleado = $_GET['id'];
    
    // Establecer conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "fime123", "barberia");
    $conexion->set_charset("utf8");
    
    // Obtener los datos del empleado
    $consulta = "SELECT Id_Empleado, Nombre_Empleado, ApellidoPaterno_Empleado, ApellidoMaterno_Empleado, Telefono_Empleado, Email_Empleado FROM empleado WHERE Id_Empleado = '$id_empleado'";
    $resultado = mysqli_query($conexion, $consulta);
    $empleado = mysqli_fetch_assoc($resultado);
    
    // Procesar el formulario cuando se envía
    if(isset($_POST['botons'])) {
        // Obtener los datos actualizados del formulario
        $nombre = $_POST['nombre'];
        $apellido_paterno = $_POST['apellido_paterno'];
        $apellido_materno = $_POST['apellido_materno'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        
        // Actualizar los datos del empleado en la base de datos
        $actualizar = "UPDATE empleado SET Nombre_Empleado = '$nombre', ApellidoPaterno_Empleado = '$apellido_paterno', ApellidoMaterno_Empleado = '$apellido_materno', Telefono_Empleado = '$telefono', Email_Empleado = '$email' WHERE Id_Empleado = '$id_empleado'";
        mysqli_query($conexion, $actualizar);
        
        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
        
        // Redireccionar al archivo que muestra la tabla de empleados
        header("Location: http://localhost/barberia/Empleados/VistaEmpleados.php");
        exit();
    }
    
    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
} else {
    // Si no se proporciona un ID válido, muestra un mensaje de error o redirige a la página principal.
    echo "ID de empleado no válido";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>EMPLEADOS</title>
    <link rel="stylesheet" type="text/css" href="PantallaIngresos.css">
</head>
<body>
    <h3 align="center">EDITAR EMPLEADO</h3>
    <form class="form" method="POST" action="">

<div class="fields">
    <div class="form-group">
          <label>ID DE EMPLEADO: </label>
          <?php echo $empleado['Id_Empleado']; ?>
        </div> 
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre"  pattern="[A-Za-z\s]+" value="<?php echo $empleado['Nombre_Empleado']; ?>"required>
        </div>
        <div class="form-group">
            <label>Apellido Paterno:</label>
            <input type="text" name="apellido_paterno" pattern="[A-Za-z\s]+" value="<?php echo $empleado['ApellidoPaterno_Empleado']; ?>"required>
        </div>
        <div class="form-group">
            <label>Apellido Materno:</label>
            <input type="text" name="apellido_materno" pattern="[A-Za-z\s]+" value="<?php echo $empleado['ApellidoMaterno_Empleado']; ?>"required>
        </div>
        <div class="form-group">
            <label>Teléfono:</label>
            <input type="text" name="telefono" pattern="[0-9]{10}" value="<?php echo $empleado['Telefono_Empleado']; ?>"required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}" value="<?php echo $empleado['Email_Empleado']; ?>"required>     
        </div>         
        <input type="submit" name="botons" value="Guardar cambios">  

</div>    


    </form>
</body>
</html>
