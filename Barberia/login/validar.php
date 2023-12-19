
<?php  
 
   
     error_reporting(0);
    $USUARIO=$_POST['usuario'] ;
    $PASSWORD=$_POST['contraseña'] ;
     session_start();
     include ('db.php');
     $_SESSION['Id_usuario']=$USUARIO;
     $conexion=mysqli_connect("localhost", "root", "fime123","barberia");

    $consulta = "SELECT * FROM usuario where Id_usuario = '$USUARIO' and contraseña ='$PASSWORD'";
    $resultado= mysqli_query($conexion,$consulta);
    $filas=mysqli_num_rows($resultado);


    if($filas){
        header("location:main.php");   

    }else{
              ?>
              <?php
              include("index.php");
            ?>
            <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
            <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
    ?>
    