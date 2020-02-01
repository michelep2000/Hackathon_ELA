
<?php
require "conexionBBDD.php";

if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["usr"]) && isset($_POST["pwd"])){
  include "queryRegistroInsert.php";

}

?>
