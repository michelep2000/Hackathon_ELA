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
            ?>
              <nav class="navbar navbar-expand-lg navbar-light " id="nav">
                <a class="navbar-brand" href="index.php"><img src="imagenes/logo.png" width="90" class="logo2" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" id="navButton" href="index.php">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="navButton" href="clientes.php">Panel de Control</a>
                        </li>
                    </ul>
                </div>
                <form class="form-inline my-2 my-lg-2">
                    <a class="account mx-4" href="perfil.php"></a>
                </form>
                </nav>

            <?php
           }else {
            ?>
              <nav class="navbar navbar-expand-lg navbar-light " id="nav">
                <a class="navbar-brand" href="index.php"><img src="imagenes/logo.png" width="90" class="logo2" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" id="navButton" href="index.php">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="navButton" href="clientes.php">Panel de Control</a>
                        </li>
                    </ul>
                </div>
                <form class="form-inline my-2 my-lg-2">
                    <a class="account mx-4" href="perfil.php"></a>
                </form>
                </nav>

            <?php
           }
          

        } ?>

      </ul>
    </div>
  </div>
</nav>
