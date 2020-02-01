<?php
$servername = "localhost";
$user = "root";
$password = "";
<<<<<<< HEAD
$dbname = "ela";
=======
$dbname = "ELA";
>>>>>>> 484aa9e00ac643601baef4c447f304f5142f70ca
$conn  =  new  mysqli($servername,$user,$password, $dbname);


if ($conn->connect_error) {
die("Error: " . $conn->connect_error);
}
if (!$conn->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
    exit();
}
 ?>
