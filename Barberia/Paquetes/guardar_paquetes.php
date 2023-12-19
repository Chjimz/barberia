<?php
// Conexión a la base de datos
$conexion=mysqli_connect("localhost", "root", "fime123","barberia");
$conexion->set_charset("utf8");

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}


// Recuperar los datos del formulario
$Id_Paquete=$_POST['Id_Paquete'];
$Id_Servicio=$_POST['Id_Servicio'];
$Id_Producto=$_POST['Id_Producto'];
$Nombre_Paquete=$_POST['Nombre_Paquete'];
$Precio_Paquete=$_POST['Precio_Paquete'];
$Descuento=$_POST['Descuento'];
$mensaje="ID en uso";

//VALIDACION PARA VALORES REPETIDOS
$sql = "SELECT * FROM paquetes WHERE Id_Paquete= '$Id_Paquete'";
$resultado = $conexion->query($sql);
if ($resultado->num_rows > 0) {
    echo '<script>alert("' . $mensaje . '"); window.location.href = "/barberia/paquetes/paquetes.php";</script>';
}
else{
    $sql= "INSERT INTO paquetes (Id_Paquete ,Id_Servicio, Id_Producto, Nombre_Paquete, Precio_Paquete, Descuento) VALUES ('$Id_Paquete','$Id_Servicio', '$Id_Producto', '$Nombre_Paquete', '$Precio_Paquete', '$Descuento')";
    header("location:/barberia/login/main.php");


}
//VERIFICAR CONEXION
if ($conexion->query($sql) === TRUE) {
    header("location:/barberia/login/main.php");
} else {
    echo "Error al registrar el producto: " . $conexion->error;
}


$conexion->close();



?>




