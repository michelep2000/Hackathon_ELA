<?php
require "conexionBBDD.php";
echo "iejrngfejnrk";
$parameters = file_get_contents("php://input");

if (isset($parameters)) {
  $mensajeRecibido = json_decode($parameters, true);
  $usr = $mensajeRecibido["usr"];

  $query = "SELECT * FROM loginUsuarios WHERE loginUsuarios.id_usuario ='". mysqli_real_escape_string($conn, $usr)."'";

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
