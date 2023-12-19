<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLEADOS</title>
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
    margin: 7px 50px ;
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
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
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
    margin: 1px 5%;
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
.container .menu{
    
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
   
   text-align:center;
    border-radius: 5px;
    margin: 25px 18%;
    background-color: #E12424;
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
    height: 60vh;
    

    }

button{
    align-items: center;
    justify-content: center;
    height: 6vh;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
   
   text-align:center;
    border-radius: 5px;
    margin: 0 50px;
    background-color: #E12424;
    transition: all 0.3s linear;
    cursor: pointer;
    margin-top: 5%;
    margin-bottom:2%;
    
}

    </style>
</head>
<body>
    <div class="container">
    <div class="details personal">    
    <a href="/barberia/login/main.php"><button>MENU PRINCIPAL</button></a>

        <form action="guardar_empleado.php" method="post" autocomplete="off">
            <div class="form first">
                <div class="details personal">  
                    <span class="title">Registro </span>

                            
                 
                    <div class="fields">
                        <div class="input-field">

                            <input type="text" name="Nombre" placeholder="NOMBRE" pattern="[A-Za-z\s ]+" required>
                        </div>
                        <div class="input-field">

                            <input type="text" name="Apellido_Paterno"  placeholder="APELLIDO PATERNO" pattern="[A-Za-z\s]+" required>
                        </div>
                        <div class="input-field">

                            <input type="text" name="Apellido_Materno"  placeholder="APELLIDO MATERNO" pattern="[A-Za-z\s]+" required>
                        </div>
                        <div class="input-field">

                            <input type="text" name="Correo_Electronico" placeholder="ejemplo@gmail.com" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}"required>
                        </div>
                        <div class="input-field">

                            <input type="text" name="Telefono"  placeholder="TELÉFONO" pattern="[0-9]{10}" required>
                        </div>
                        <div class="input-field">
                            <input type="text" name="NombrePuesto" pattern="[A-Za-z\s ]+" placeholder="NOMBRE DEL PUESTO" required>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Detalles Dirección</span>
                    <div class="fields">
                        
                   
                        <div class="input-field">

                            <input type="text" name="Calle"  placeholder="CALLE" pattern="[A-Za-z\s]+" required>
                            
                        </div>
                        <div class="input-field">

                            <input type="text" name="Colonia" placeholder="COLONIA" pattern="[A-Za-z\s]+" required>
                            
                        </div>
                        <div class="input-field">
                            <input type="text" name="Numint" pattern="[0-9]+" placeholder="NÚMERO INTERNO">
                            
                        </div>
                        <div class="input-field">

                            <input type="number" name="Numext"  placeholder="NÚMERO EXTERNO" required>
                            <input class="botons" type="submit" value="Confirmar">
                        </div>
                        <div class="input-field">

                            <input type="number" name="cp" placeholder="CÓDIGO POSTAL" required>
                            

                                
                                
                                
                            

        
                         

                
                        </div>
                        </div>
                </div> 

            </div>
           
                
                

              
        
        </form>
    </div>
</body>
</html>