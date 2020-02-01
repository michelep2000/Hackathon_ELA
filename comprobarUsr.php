<?php
require "conexionBBDD.php";

$parameters = file_get_contents("php://input");

if (isset($parameters)) {
  $mensajeRecibido = json_decode($parameters, true);
  $usr = $mensajeRecibido["usr"];

  $query = "SELECT * FROM usuarios WHERE usuarios.id_usuario ='". mysqli_real_escape_string($conn, $usr)."'";


  $result = $conn->query($query);


  if(($result->num_rows > 0)) {
    $respuesta = array();
    $respuesta["isContained"] = true;
  }else {
    $respuesta["isContained"] = false;
  }
  $mensajeJSON = json_encode($respuesta,JSON_PRETTY_PRINT);

  echo $mensajeJSON;

}
 ?>
