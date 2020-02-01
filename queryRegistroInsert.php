<?php

  $sql = "INSERT INTO usuarios (id_usuario, contrasena,nombre, apellido,rol)
          VALUES ('$_POST[usr]', '$_POST[pwd]', '$_POST[nombre]' , '$_POST[apellido]', '$_POST[rol]')";
$result = $conn->query($sql);

if ($result === TRUE) {
  $_SESSION["nombre"] = $_POST["usr"];
  header("Location: index.php");
} else {
header("Location: reg_index.php?error=usrExists");
}
$conn->close();
 ?>
