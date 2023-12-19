<?php
if(isset($_GET['id'])) {
    $id_clientes = $_GET['id'];
    
    // Establecer conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "fime123", "barberia");
    $conexion->set_charset("utf8");
    
    // Obtener los datos del paquete
    $consulta = "SELECT * from cliente WHERE Id_Cliente= '$id_clientes'";
    $resultado = mysqli_query($conexion, $consulta);
    $cliente = mysqli_fetch_assoc($resultado);
 
    
    
    
    // Procesar el formulario cuando se envía
    if(isset($_POST['submit'])) {
        // Obtener los datos actualizados del formulario
   // $Id_Paquete=$_POST['Id_Paquete'];
   $Nombre=$_POST['Nombre'];
   $Apellidos_Cliente=$_POST['Apellidos_Cliente'];
   $Correo_Electronico=$_POST['Correo_Electronico'];
   $numTarjeta_Cliente=$_POST['numTarjeta_Cliente'];

        
        // Actualizar los datos del paquete en la base de datos
        $actualizar = "UPDATE cliente SET Nombre_Cliente = '$Nombre', Apellido_Cliente = '$Apellidos_Cliente', Email_Cliente = '$Correo_Electronico' WHERE Id_Cliente= '$id_clientes'";
        mysqli_query($conexion, $actualizar);
        
        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
        
        // Redireccionar al archivo que muestra la tabla de empleados
        header("Location: http://localhost/barberia/Registro_Cliente/VistaCliente.php");
        exit();
    }
    
    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
} else {
    // Si no se proporciona un ID válido, muestra un mensaje de error o redirige a la página principal.
    echo "ID de paquete no válido";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CLIENTES</title>
    <link rel="stylesheet" type="text/css" href="PantallaIngresos.css">
</head>
<body>
    <h3 align="center">EDITAR CLIENTES</h3>
    <form class="form" method="POST" action="">
         <div class="form-group">
          <label>ID: </label> 
          <?php echo $cliente['Id_Cliente']; ?>
        </div> 
         <div class="form-group">
            <label>NOMBRE(S):</label>
         <input type="text" name="Nombre" pattern="[A-Za-z\s ]+" value="<?php echo $cliente['Nombre_Cliente']; ?>" required>
        </div>
        <div class="form-group">
            <label>APELLIDO(S):</label>
           <input type="text" name="Apellidos_Cliente" pattern="[A-Za-z\s ]+" value="<?php echo $cliente['Apellido_Cliente']; ?>"required>
        </div>
        <div class="form-group">
            <label>EMAIL</label>
            <input type="text" name="Correo_Electronico" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}"  value="<?php echo $cliente['Email_Cliente']; ?>"required>
        </div>
        <div class="form-group">
            <label>TARJETA #</label>
            <input type="text" name="numTarjeta_Cliente" pattern="[0-9]{10}" value="<?php echo $cliente['numTarjeta']; ?>"required>
        </div>
        
        <input type="submit" name="submit" value="Guardar cambios">
    </form>
</body>
</html>
