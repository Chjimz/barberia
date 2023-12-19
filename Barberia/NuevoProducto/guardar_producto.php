<?php
// Conexión a la base de datos
$conexion=mysqli_connect("localhost", "root", "fime123","barberia");
$conexion->set_charset("utf8");

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}


// Recuperar los datos del formulario
$Id_Producto=$_POST['Id_Producto'];
$nombre = $_POST['Nombre'];
$Fecha_Caducidad = $_POST['Fecha_Caducidad'];
$Fecha_Entrega = $_POST['Fecha_Entrega'];
$descripcion = $_POST['descripcion'];
$cantidad_Producto = $_POST['cantidad_Producto'];
$Precio_Producto = $_POST['Precio_Producto'];

$mensaje="ID en uso";

//VALIDACION PARA VALORES REPETIDOS
$sql = "SELECT * FROM productos WHERE Id_Producto= '$Id_Producto'";
$resultado = $conexion->query($sql);
if ($resultado->num_rows > 0) {
    echo '<script>alert("' . $mensaje . '"); window.location.href = "/barberia/NuevoProducto/NuevoProducto.php";</script>';
}
else{
    $sql = "INSERT INTO productos (Id_Producto, Nombre_Producto, FechaCaducidad_Producto, FechaEntrega_Producto, Especificaciones, Cantidad_Producto, Precio_Producto) VALUES ('$Id_Producto', '$nombre', '$Fecha_Caducidad', '$Fecha_Entrega', '$descripcion','$Precio_Producto', '$cantidad_Producto')";
    header("location:/barberia/login/main.php");


}



if ($conexion->query($sql) === TRUE) {
    header("location:/barberia/login/main.php");
} else {
    echo "Error al registrar el producto: " . $conexion->error;
}

$conexion->close();
?>