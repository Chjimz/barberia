<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVO SERVICIO</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;

}
body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-image: url("wallpaper.jpeg");
    background-position: center;
    overflow-y:hidden;

 background-size: 100%;
}
.container{
    position: relative;
    max-width: 950px;
    width: 100%;
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    padding: 10vh;
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
    
    margin: 5vh;
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
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: white;
    font-size: 15px;
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
    margin: 8px 0;
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
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
   
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}
.container form .btnText{
    font-size: 14px;
    font-weight: 400;
}

form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .backBtn{
    margin-right: 14px;
}

textarea{
    width: 80vh;
    height: 25vh;
}

<input::placeholder{
    color: red;
}
    </style>
</head>
<body>
    <div class="container">
        <form action="guardar_servicio.php" method="post" autocomplete="off">
            <div class="form first">
                <div class="details personal">
                    <span class="title">NUEVO SERVICIO</span>
                    <div class="fields">
                       
                    
                    <div class="input-field">
                       <label for="NombreProducto">NOMBRE DEL SERVICIO</label>
                            <input type="text" name="nombre"  placeholder="NOMBRE DEL SERVICIO" pattern="[A-Za-z\s ]+" required>
                        </div>
                        
                        <div class="input-field">
                        <label for="Id">ID DE SERVICIO</label>
                            <input type="text" name="id"   placeholder="ID SERVICIO" pattern="[0-9]+" required>
                        </div>
                      
                        <div class="input-field">
                        <label for="precio">PRECIO</label>
                            <input type="text" name="precio" pattern="[0-9.]+"  placeholder="PRECIO $" required>
                        </div>
                        
                       
                    </div>
                </div>
                <div class="details ID">
                    
                    <div class="fields">
                    <div class="input-field">
                           <textarea name="descripcion" placeholder="DESCRIPCION DEL SERVICIO" required></textarea>
                    </div>
                        
                    </div>
                </div> 
            </div>
           
                <input class="botons" type="submit" value="Confirmar">
              
        
        </form>
    </div>
</body>
</html>