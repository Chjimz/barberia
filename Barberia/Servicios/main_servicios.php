<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="main_servicios.css">
</head>
<body>
  <div class="button-container">

<button onclick="RegistrarServicios()">REGISTRAR SERVICIOS</button>
  <script>
    function RegistrarServicios(){
      window.location.href="/Barberia/Servicios/NuevoServicio.php"; }
   </script>

    <button onclick=VerServicios() >VER SERVICIOS</button>
    <script>
    function VerServicios(){
      window.location.href="/Barberia/Servicios/VistaServicios.php"; }
   </script>


    
  </div>
</body>
</html>
