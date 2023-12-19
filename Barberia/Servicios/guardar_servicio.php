<?php
// Conexión a la base de datos
$conexion=mysqli_connect("localhost", "root", "fime123","barberia");
$conexion->set_charset("utf8");

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}


// Recuperar los datos del formulario
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];

$mensaje="ID en uso";

//VALIDACION PARA VALORES REPETIDOS
$sql = "SELECT * FROM servicios WHERE Id_Servicio= '$id'";
$resultado = $conexion->query($sql);
if ($resultado->num_rows > 0) {
    echo '<script>alert("' . $mensaje . '"); window.location.href = "/barberia/Servicios/NuevoServicio.php";</script>';
}
else{
    $sql = "INSERT INTO servicios (Id_Servicio, Nombre_Servicio, Especificaciones, Precio_Servicio) VALUES ('$id', '$nombre', '$descripcion', '$precio')";
    header("location:/barberia/login/main.php");


}



if ($conexion->query($sql) === TRUE) {
    header("location:/barberia/login/main.php");
} else {
    echo "Error al registrar el servicio: " . $conexion->error;
}

$conexion->close();
?>