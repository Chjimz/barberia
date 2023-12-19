<?php
if(isset($_GET['id'])) {
    $id_producto = $_GET['id'];
    
    // Establecer conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "fime123", "barberia");
    $conexion->set_charset("utf8");
    
    // Obtener los datos del empleado
    $consulta = "SELECT * FROM productos WHERE Id_Producto = '$id_producto'";
    $resultado = mysqli_query($conexion, $consulta);
    $producto = mysqli_fetch_assoc($resultado);
    
    // Procesar el formulario cuando se envía
    if(isset($_POST['botons'])) {
        // Obtener los datos actualizados del formulario
        $nombre = $_POST['nombre'];
        $caducidad = $_POST['fechaCaducidad'];
        $entrega = $_POST['fechaEntrega'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $especificaciones = $_POST['especificaciones'];
        
        // Actualizar los datos del empleado en la base de datos
        $actualizar = "UPDATE productos SET Nombre_Producto = '$nombre', FechaCaducidad_Producto = '$caducidad', FechaEntrega_Producto = '$entrega', Especificaciones = '$especificaciones', Cantidad_Producto = '$cantidad', Precio_Producto = '$precio' WHERE Id_Producto = '$id_producto'";
        mysqli_query($conexion, $actualizar);
        
        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
        
        // Redireccionar al archivo que muestra la tabla de empleados
        header("Location: http://localhost/barberia/NuevoProducto/VistaProducto.php");
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
    <title>PRODUCTOS</title>
    <link rel="stylesheet" type="text/css" href="PantallaIngresos.css">
</head>
<body>
    <h3 align="center">PRODUCTOS</h3>
    <form class="form" method="POST" action="">
        
    <div class="form-group">
          <label>ID </label> 
          <?php echo $producto['Id_Producto']; ?>
        </div> 
        <div class="form-group">
            <label>NOMBRE:</label>
            <input type="text" name="nombre" pattern="[A-Za-z0-9% ]+" value="<?php echo $producto['Nombre_Producto']; ?>" required>
        </div>
        <div class="form-group">
            <label>FECHA DE CADUCIDAD</label>
            <input type="date" name="fechaCaducidad" value="<?php echo $producto['FechaCaducidad_Producto']; ?>"required>
        </div>
        <div class="form-group">
            <label>FECHA DE ENTREGA:</label>
            <input type="date" name="fechaEntrega" value="<?php echo $producto['FechaEntrega_Producto']; ?>"required>
        </div>
        <div class="form-group">
            <label>CANTIDAD:</label>
            <input type="text" name="cantidad" pattern="[0-9]+" value="<?php echo $producto['Cantidad_Producto']; ?>"required>
        </div>
        <div class="form-group">
            <label>PRECIO $:</label>
            <input type="text" name="precio" pattern="[0-9]+" value="<?php echo $producto['Precio_Producto']; ?>"required>
        </div>
        <div class="form-group">
            <label>ESPECIFICACIONES:</label>
            <input type="textarea" name="especificaciones" pattern="[A-Za-z0-9% ]+" value="<?php echo $producto['Especificaciones']; ?>"required>
            <input type="submit" name="botons" value="Guardar cambios">  

        </div>
    </form>
</body>
</html>
