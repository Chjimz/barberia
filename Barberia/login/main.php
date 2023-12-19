<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
  <div class="button-container">

<button onclick="RegistrarNuevoUsuario()">EMPLEADOS</button>
  <script>
    function RegistrarNuevoUsuario(){
      window.location.href="/Barberia/Empleados/main_Empleados.php"; }
   </script>

    <button onclick=RegistrarPaquete() >PAQUETES</button>
    <script>
    function RegistrarPaquete(){
      window.location.href="/Barberia/Paquetes/main_paquetes.php"; }
   </script>

<button onclick=NuevaTarjeta() >CLIENTES</button>
    <script>
    function NuevaTarjeta(){
      window.location.href="/Barberia/Registro_Cliente/main_cliente.php"; }
   </script>

<button onclick=NuevoProducto()>PRODUCTOS</button>
  <script>
    function NuevoProducto(){
      window.location.href="/Barberia/NuevoProducto/main_producto.php"; }
 </script>

<button onclick=NuevoServicio()>SERVICIOS</button>
  <script>
    function NuevoServicio(){
      window.location.href="/Barberia/Servicios/main_servicios.php"; }
 </script>
    
    
  </div>
</body>
</html>
