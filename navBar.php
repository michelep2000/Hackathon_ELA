

        <?php
      
        if (isset($_GET["sesion"]) && $_GET["sesion"]=="cerrada") {
          session_unset();
        }
         if (isset($_SESSION["nombre"]) && isset($_SESSION["rol"])) {
           if($_SESSION["rol"]=='adm'){
            ?>
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="img/luzon1.jpeg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100 " src="img/luzon2.jpeg" alt="Second slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php"><img src="img/logo1.png" width="210" class="logo2" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" id="navButton" href="inicioAdmin.php">INICIO</a>
                        </li>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="nav-item">
                            <a class="nav-link" id="navButton" href="panelControl.php">PANEL DE ADMINISTRACION</a>
                        </li>
                    </ul>
                  <form class="form-inline my-2 my-lg-0">
              
                    <a class="btn btn-outline-danger my-2 my-sm-0" type="submit" href="cerrarSesion.php">Cerrar Sesión</a>
                  </form>
                </div>
              </nav>

            <?php
           }else {
            ?>
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="img/luzon1.jpeg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100 " src="img/luzon2.jpeg" alt="Second slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php"><img src="img/logo1.png" width="210" class="logo2" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                        
                    </ul>
                  <form class="form-inline my-2 my-lg-0">
              
                    <a class="btn btn-outline-danger my-2 my-sm-0" type="submit" href="cerrarSesion.php">Cerrar Sesión</a>
                  </form>
                </div>
              </nav>

            <?php
           }
          

        } ?>

