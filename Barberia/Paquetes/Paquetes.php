<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquetes</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-image: url("wallpaper.jpeg");
    background-position: center;
    background-size: 100%;
    overflow-y: hidden;
}

.container{
    position: relative;
    max-width: 950px;
    width: 100%;
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    padding: 100%%;
    border-radius: 7px;
    margin: auto;
    margin-top: 50px;
}
.container header{
    position: relative;
    font-size: 20px;
    font-weight: 400;
    
}




.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 20px;
    font-weight: 500;
    margin: 6px ;
   color: white;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 2px 0;
}
.input-field label{
    font-size: 18px;
    font-weight: 500px;
    color: white;
    text-align:center

}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 1px 5%;width: 100%;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.container .botons{
    
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
   
   
    border-radius: 5px;
    margin: 25px 18%;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}
.container form .btnText{
    font-size: 14px;
    font-weight: 400px;
    
}

form .buttons{
    display: flex;
    align-items: center;
}

form{
    
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 80vh;
  

}


    </style>
</head>
<body>
    <div class="container">
        <form action="guardar_paquetes.php" method="post" autocomplete="off">
            <div class="form first">
                
                    <span class="title">Registro                     
                    </span>
                            
                 
                    <div class="fields">
                        <div class="input-field">
                        <label for="Id_Servicio">ID DEL PAQUETE </label>

                            <input type="text" name="Id_Paquete"pattern="[0-9]{2}" placeholder="01" required >
                        </div>
						
                        
                        <div class="input-field">
                        <label for="Id_Servicio">DESCUENTO </label>

                            <input type="TEXT" name="Descuento" placeholder=" $" pattern="[0-9]+" required >
                        </div>
                       

                        <div class="input-field">
                        <label for="Id_servicio">ID SERVICIO</label>
                        <select name="Id_Servicio">

                            <?php
                            $conn = new mysqli("localhost", "root", "fime123", "barberia");

                                if ($conn->connect_error) {
                                    die("Error de conexión: " . $conn->connect_error);
                                }

                                $sql = "SELECT Id_Servicio, Nombre_Servicio FROM servicios";
                                $result = $conn->query($sql);
                                
                                if($result->num_rows>0){
                                    while($row=$result->fetch_assoc())
                                    {
                                    $Id_Servicio=$row["Id_Servicio"];
                                    $Nombre_Servicio=$row["Nombre_Servicio"];
                                    echo "<option value='$Id_Servicio'>$Id_Servicio. $Nombre_Servicio</option>";
                                    
                                    
                                }
                                
                                }else {
                                    echo "<option value=''>No hay opciones</option>";
                                }

                                
                                ?>

                                </select>
                        </div>
                       
                        
                           
                          
                    
						
                       
                      

                        <div class="input-field">
                        <label for="Id_Servicio">PRECIO DEL PAQUETE </label>

                            <input type="text" name="Precio_Paquete" placeholder="$" pattern="[0-9]+" required>
                        </div>
                        <div class="input-field">
                        <label for="Id_Servicio">NOMBRE DEL PAQUETE </label>

                        <input type="text" name="Nombre_Paquete" placeholder="NOMBRE DE PAQUETE" pattern="[A-Za-z\s]+" required>
                        </div>
        
                        <div class="input-field">
                        <label for="Id_Producto">ID PRODUCTO</label>
                        <select name="Id_Producto">

                            <?php
                            $conn = new mysqli("localhost", "root", "fime123", "barberia");

                                if ($conn->connect_error) {
                                    die("Error de conexión: " . $conn->connect_error);
                                }

                                $sql = "SELECT Id_Producto, Nombre_Producto FROM productos";
                                $result = $conn->query($sql);

                                if($result->num_rows>0){
                                    while($row=$result->fetch_assoc())
                                    {
                                    $Id_Producto=$row["Id_Producto"];
                                    $Nombre_Producto=$row["Nombre_Producto"];
                                    echo "<option value='$Id_Producto'>$Id_Producto . $Nombre_Producto</option>";
                                }
                                
                                }else {
                                    echo "<option value=''>No hay opciones</option>";
                                }
                                ?>

                        </select>
                        </div>  
                    
                    </div>
               
                
                        <div class="input-field">

                        
                            
                            <input class="botons" type="submit" value="Confirmar">
                           
                        </div>
 
            </div>
        </form>
    </div>
</body>
</html>