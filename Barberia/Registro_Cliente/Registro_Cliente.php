<?php
// Conexión a la base de datos
$conexion=mysqli_connect("localhost", "root", "fime123","barberia");
$conexion->set_charset("utf8");

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}


// Recuperar los datos del formulario
$Nombre=$_POST['Nombre'];
$Apellidos_Cliente=$_POST['Apellidos_Cliente'];
$Correo_Electronico=$_POST['Correo_Electronico'];
$numTarjeta_Cliente=$_POST['numTarjeta_Cliente'];
$Id_Cliente=mt_rand(1,999999);
$mensaje="Tarjeta en uso";


$sql = "SELECT * FROM cliente WHERE numTarjeta= '$numTarjeta_Cliente'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo '<script>alert("' . $mensaje . '"); window.location.href = "/barberia/Registro_Cliente/Registro de cliente para tarjeta.html";</script>';
}
else{
    $sql = "INSERT INTO cliente (Id_Cliente ,Nombre_Cliente, Apellido_Cliente, email_Cliente, numTarjeta)
    VALUES ('$Id_Cliente','$Nombre', '$Apellidos_Cliente', '$Correo_Electronico', '$numTarjeta_Cliente')";
        header("location:/barberia/login/main.php");


}
if ($conexion->query($sql) === TRUE) {
   

   header("location:/barberia/login/main.php"); 



}
 else {
    
    include("registro de cliente para tarjeta.html"); 
?>

<h1>AUTENTIFICACION</h1>
<?php
}

$conexion->close();
?>
