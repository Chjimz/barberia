<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="main_empleados.css">
</head>
<body>
  <div class="button-container">

<button onclick="RegistrarEmpleados()">REGISTRAR NUEVO EMPLEADO</button>
  <script>
    function RegistrarEmpleados(){
      window.location.href="/Barberia/Empleados/Empleados.php"; }
   </script>

    <button onclick=VerEmpleados() >VER EMPLEADOS</button>
    <script>
    function VerEmpleados(){
      window.location.href="/Barberia/Empleados/VistaEmpleados.php"; }
   </script>


    
  </div>
</body>
</html>
