<?php
// Conexión a la base de datos
$conexion=mysqli_connect("localhost", "root", "fime123","barberia");
$conexion->set_charset("utf8");

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}


// Recuperar los datos del formulario
$Nombre=$_POST['Nombre'];
$Apellido_Paterno=$_POST['Apellido_Paterno'];
$Apellido_Materno=$_POST['Apellido_Materno'];
$Correo_Electronico=$_POST['Correo_Electronico'];
$Telefono=$_POST['Telefono'];
$Id_Empleado=mt_rand(1,999999);
$Calle=$_POST['Calle'];
$Numint=$_POST['Numint'];
$Numext=$_POST['Numext'];
$cp=$_POST['cp'];
$NombrePuesto=$_POST['NombrePuesto'];







$sql = "INSERT INTO empleado (Id_Empleado ,Nombre_Empleado, ApellidoPaterno_Empleado, ApellidoMaterno_Empleado, Telefono_Empleado, Nombre_Puesto, Email_Empleado, Colonia_Empleado, NumInt_Empleado, NumExt_Empleado, cp_Empleado)
VALUES ('$Id_Empleado','$Nombre', '$Apellido_Paterno', '$Apellido_Materno', '$Telefono', '$NombrePuesto', '$Correo_Electronico', '$Calle', '$Numint', '$Numext', '$cp')";




if ($conexion->query($sql) === TRUE ) {
header("location:/barberia/login/main.php");
} 

else {
    echo "Error al registrar el producto: " . $conexion->error;
}

$conexion->close();
?>