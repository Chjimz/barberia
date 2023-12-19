<?php
if(isset($_GET['id'])) {
    $id_producto = $_GET['id'];
    
    // Establecer conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "fime123", "barberia");
    $conexion->set_charset("utf8");
    
    // Eliminar el empleado de la base de datos
    $eliminar = "DELETE FROM productos WHERE Id_Producto = '$id_producto'";
    mysqli_query($conexion, $eliminar);
    
    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
    
    // Redireccionar al archivo que muestra la tabla de empleados
    header("Location: http://localhost/barberia/NuevoProducto/VistaProducto.php");
    exit();
} else {
    // Si no se proporciona un ID válido, muestra un mensaje de error o redirige a la página principal.
    echo "ID de producto no válido";
    exit();
}
?>

