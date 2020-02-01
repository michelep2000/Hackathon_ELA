<?php
require "arriba.php";
include "./navBar.php";
?>
<?php
if (isset($_POST["nombre"]) && isset($_POST["contra"])) {
  $nomUsu = $_POST["nombre"];
  $contra = $_POST["contra"];
  // Realizar una consulta MySQL
  $query = "SELECT * FROM loginUsuarios WHERE loginUsuarios.id_usuario ='". mysqli_real_escape_string($conn, $nomUsu)."' AND loginUsuarios.contrasena = '". mysqli_real_escape_string($conn, $contra)."'";
  $result = $conn->query($query);

  if($result->num_rows > 0) {
    if($row = $result->fetch_assoc()){
      $_SESSION["rol"]= $row['rol'];
    }
//Correctamente logado
    $_SESSION["nombre"] = $nomUsu;
    
//Me dirijo a la pag
if($_SESSION["rol"]=='adm'){
  header("Location: panelControl.php");
}else {
  header("Location: inicio.php");
}
    
  }else{

    header("Location: index.php?error=notOk");

  }
}else{
  ?>
    <div class="fondo1">
        <div class="espacio1"></div>
        <div class="container">
            <div class="row">
                <div class="BordeInicio col-6 offset-lg-3">
                <div class="espacio1"></div>
                <h2 class="Inicio centro"><img src="img/logo1.png" width="200" class="logo2" /></h2>
                <div class="espacio1"></div>
                    <form id="formulario" action="index.php" method="post">
                        <label>Correo</label><br>
                        <input type="text" name="nombre"> <br>
                        <div class="espacio5"></div>
                        <label>Contraseña</label><br>
                        <input type="password" name="contra"> <br>
                        <div class="espacio1"></div>
                        <div class="botones col-12">
                        <p>¿Aun no te has registrado?<a href='reg_index.php'>Resgitrate YA!!!</a></p>
                        <input type="submit" class="btn btn btn-dark col-5" value="Entrar">
                        </div>
                        <div class="espacio4"></div>
                    </form>
                    <?php
                        $arrErrores = [
                            "noform" => "No se ha enviado el formulario",
                            "notOK" => "Usuario o contraseña incorrecto",
                            "nosesion" => "No hay sesion abierta",
                            "close" => "Se ha cerrado la sesion correctamente",
                            "notServer" => "Los servidores no estan operativos",
                            "0result" => "Hay 0 resultados"
                        ];

                        if(isset($_GET["error"])){
                            $claveError = $_GET['error'];
                            if(isset($arrErrores[$claveError])){
                                echo "<div class='centro'><font color='red'>$arrErrores[$claveError]</font></div>";
                            }else{
                                echo "<p>Error desconocido</p>";
                            }
                        }
                    ?>
                    <div class="espacio1"></div>
                </div>
            </div>
        </div>
      <?php
      if (isset($_GET["error"]) && $_GET["error"] == "notOk"){

        echo " <div class='alert'>
        <p>Usuario o contraseña incorrectos</p>
        </div>";
      }?>
<br>
      
    <?php } ?>
  
