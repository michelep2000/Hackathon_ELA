<br>
<br>
<br>
  <nav class="navbar navbar-expand-sm navbar-dark navbar-center fixed-top mx-background-top-linear mb-4" id ="navbar">
  <div class="container-fluid">
    <a href="cerrarSesion.php" class="navbar-brand">Cerrar sesión</a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ml-auto">

        <?php
        if (isset($_GET["sesion"]) && $_GET["sesion"]=="cerrada") {
          session_unset();
        }
         if (isset($_SESSION["nombre"]) && isset($_SESSION["rol"])) {
           if($_SESSION["rol"]=='adm'){
            echo "<li class='nav-item'><a class='nav-link' href='panelControl.php'>Panel de administración</a></li>";
           }else {
            echo "<li class='nav-item'><a class='nav-link' href='inicio.php'>Inicio</a></li>";
           }
          

        } ?>

      </ul>
    </div>
  </div>
</nav>
