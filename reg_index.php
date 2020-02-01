<?php
require "arriba.php";
?>

<h1 class="display-4 text-center mt-5 pt-5">Registro</h1>
<?php if (isset($_GET["error"]) && $_GET["error"] == "usrExists") {
  echo "  <div class='d-flex justify-content-center'>
  <p>Usuario existente</p>
  </div>";
} ?>
<script src="script.js"></script>


<script src="script.js" charset="utf-8"></script>
<div class="container mt-5 d-flex justify-content-center align-items-center">
  <form class="border-primary" method="post" action="registro.php">

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputUsuario">Usuario <p id="msjError" class="d-none">usuario existente</p></label>
        <input id="usr" type="text" class="form-control" name="usr" placeholder="Usuario" required oninvalid="this.setCustomValidity('Usuario')" oninput="this.setCustomValidity('')" onfocusout="verificarUsuario()">
      </div>
      <div class="form-group col-md-6">
        <label for="inputContra">Contraseña</label>
        <input type="password" class="form-control" name="pwd" placeholder="Contraseña" required oninvalid="this.setCustomValidity('Contraseña')" oninput="this.setCustomValidity('')">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputNombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required oninvalid="this.setCustomValidity('Nombre')" oninput="this.setCustomValidity('')">
      </div>
      <div class="form-group col-md-6">
        <label for="inputApellido">Apellido</label>
        <input type="text" class="form-control" name="apellido" placeholder="Apellido" required oninvalid="this.setCustomValidity('Apellido')" oninput="this.setCustomValidity('')">
      </div>

     <div class="form-group">
                <input type="radio" name="rol" value="adm">Administrador &nbsp; &nbsp; &nbsp;
                <input type="radio" name="rol" value="user" checked>Usuario   
                </div>
    </div>
  
    <button id="btn" type="submit" class="btn btn-primary">Aceptar</button>
  </form>
</div>
<?php
require 'abajo.php'; ?>
