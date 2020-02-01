<?php
require "arriba.php";
inicioPag("index", "login.css");
include "./navBar.php";
?>
<br>
<br>
<br>
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
  ?><div class="container-fluid">
    <div class="d-flex flex-column align-items-center w-100 justify-content-center logCont">
      <form class="d-flex flex-column" action="index.php" method="post">
        <h3>Usuario</h3>
        <input type="text" name="nombre">
        <h3 class="mt-2">Contraseña</h3>
        <input type="password" name="contra">
        <input class="mt-3" type="submit" value="Aceptar">
      </form>
      <?php
      if (isset($_GET["error"]) && $_GET["error"] == "notOk"){

        echo " <div class='alert'>
        <p>Usuario o contraseña incorrectos</p>
        </div>";
      }?>
<br>
      <p>¿Aun no te has registrado?<a href='reg_index.php'>Resgitrate YA!!!</a></p>
    <?php } ?>
  </div>
</div>
