<?php
if(isset($_GET['id'])) {
    $id_paquetes = $_GET['id'];
    
    // Establecer conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "fime123", "barberia");
    $conexion->set_charset("utf8");
    
    // Obtener los datos del paquete
    $consulta = "SELECT Id_Paquete, Id_Servicio, Id_Producto, Nombre_Paquete, Precio_Paquete, Descuento FROM paquetes WHERE Id_Paquete = '$id_paquetes'";
    $resultado = mysqli_query($conexion, $consulta);
       $paquete = mysqli_fetch_assoc($resultado);

   
       $consulta2 = "SELECT * from servicios;";    $resultado2 = mysqli_query($conexion, $consulta2);
    $servicio = mysqli_fetch_assoc($resultado2);
    
    $consulta3 = "SELECT * from productos;";
    $resultado3 = mysqli_query($conexion, $consulta3);
    $producto = mysqli_fetch_assoc($resultado3);
    
    
    // Procesar el formulario cuando se envía
    if(isset($_POST['botons'])) {
        // Obtener los datos actualizados del formulario
   // $Id_Paquete=$_POST['Id_Paquete'];
    $Id_Servicio=$_POST['Id_Servicio'];
    $Id_Producto=$_POST['Id_Producto'];
    $Nombre_Paquete=$_POST['Nombre_Paquete'];
    $Precio_Paquete=$_POST['Precio_Paquete'];
    $Descuento=$_POST['Descuento'];
        
        // Actualizar los datos del paquete en la base de datos
        $actualizar = "UPDATE paquetes SET Nombre_Paquete = '$Nombre_Paquete', Precio_Paquete = '$Precio_Paquete', Descuento = '$Descuento' WHERE Id_Paquete= '$id_paquetes'";
        mysqli_query($conexion, $actualizar);
        
        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
        
        // Redireccionar al archivo que muestra la tabla de empleados
        header("Location: http://localhost/barberia/paquetes/VistaPaquetes.php");
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
    <title>EDITAR PAQUETES</title>
    <link rel="stylesheet" type="text/css" href="PantallaIngresos.css">
</head>
<body>
    <h3 align="center">EDITAR PAQUETES</h3>
    <form class="form" method="POST" action="">


         <div class="form-group">
          <label>ID DE PAQUETE: </label> 
          <?php echo $paquete['Id_Paquete']; ?>
        </div> 
         <div class="form-group">
            <label>NOMBRE DE SERVICIO:</label>
           <?php echo $servicio['Nombre_Servicio']; ?>
        </div>
        <div class="form-group">
            <label>NOMBRE DE PRODUCTO:</label>
            <?php echo $producto['Nombre_Producto']; ?>
        </div>
        <div class="form-group">
            <label>NOMBRE DE PAQUETE:</label>
            <input type="text" name="Nombre_Paquete" pattern="[A-Za-z\s ]+" value="<?php echo $paquete['Nombre_Paquete']; ?>"required>
        </div>
        <div class="form-group">
            <label>PRECIO DE PAQUETE:</label>
            <input type="text" name="Precio_Paquete" pattern="[0-9]+" value="<?php echo $paquete['Precio_Paquete']; ?>"required>
        </div>
        <div class="form-group">
            <label>DESCUENTO:</label>
            <input type="text" name="Descuento" pattern="[0-9]+" value="<?php echo $paquete['Descuento']; ?>"required>
          
        </div>
       <input type="submit" name="botons" value="Guardar cambios">  
    </form>
</body>
</html>
