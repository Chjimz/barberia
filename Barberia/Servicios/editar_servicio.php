<?php
if(isset($_GET['id'])) {
    $id_servicio = $_GET['id'];
    
    // Establecer conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "fime123", "barberia");
    $conexion->set_charset("utf8");
    
    // Obtener los datos del empleado
    $consulta = "SELECT * FROM servicios WHERE Id_Servicio = '$id_servicio'";
    $resultado = mysqli_query($conexion, $consulta);
    $servicio = mysqli_fetch_assoc($resultado);
    
    // Procesar el formulario cuando se envía
    if(isset($_POST['botons'])) {
        // Obtener los datos actualizados del formulario
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $especificaciones = $_POST['especificaciones'];
      
        
        // Actualizar los datos del empleado en la base de datos
        $actualizar = "UPDATE servicios SET Nombre_Servicio = '$nombre', Especificaciones = '$especificaciones', Precio_Servicio = '$precio' WHERE Id_Servicio = '$id_servicio'";
        mysqli_query($conexion, $actualizar);
        
        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
        
        // Redireccionar al archivo que muestra la tabla de empleados
        header("Location: http://localhost/barberia/Servicios/VistaServicios.php");
        exit();
    }
    
    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
} else {
    // Si no se proporciona un ID válido, muestra un mensaje de error o redirige a la página principal.
    echo "ID de servicio no válido";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>SERVICIOS</title>
    <link rel="stylesheet" type="text/css" href="PantallaIngresos.css">
</head>
<body>
    <h3 align="center">SERVICIOS</h3>
    <form class="form" method="POST" action="">
        
    <div class="form-group">
          <label>ID</label> 
          <?php echo $servicio['Id_Servicio']; ?>
        </div> 
        <div class="form-group">
            <label>NOMBRE</label>
            <input type="text" name="nombre" pattern="[A-Za-z\s ]+" value="<?php echo $servicio['Nombre_Servicio']; ?>" required>
        </div>
        <div class="form-group">
            <label>PRECIO $</label>
            <input type="text" name="precio" pattern="[0-9.]+"  value="<?php echo $servicio['Precio_Servicio']; ?>"required>
        </div>
        <div class="form-group">
            <label>ESPECIFICACIONES:</label>
            <input type="text" name="especificaciones" pattern="[A-Za-z0-9%]+"  value="<?php echo $servicio['Especificaciones']; ?>"required>
            <input type="submit" name="botons" value="Guardar cambios">  

        </div>
       

        </div>
    </form>
</body>
</html>
