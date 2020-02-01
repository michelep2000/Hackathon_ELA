<?php
include 'conexionBBDD.php';
$parameters = file_get_contents("php://input");
if (isset($parameters)) {
    
    $mensajeRecibido = json_decode($parameters, true);
    if (isset($mensajeRecibido['tabla'])) {
        $valor = $mensajeRecibido['tabla'];
        showData($valor);
    }
}
function showData($tabla)
{
    global $conn;


    $sql = "SELECT * FROM $tabla";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $arrEntradas = [];
        while ($row = $result->fetch_assoc()) {
            $arrEntrada = [];
            foreach ($row as $key => $value) {
                if ($key == 'Nombre' || $key == 'Apellidos' || $key == 'Rol' || $key == 'Ubicacion' || $key == 'Descripcion') {
                    $arrEntrada[$key] = $row[$key];
                }
                
            }
            $arrEntradas[] = $arrEntrada;
        }
        $jsonString = json_encode($arrEntradas, JSON_PRETTY_PRINT);
        echo $jsonString;
    } else {
        echo "0 results";
    }
}
