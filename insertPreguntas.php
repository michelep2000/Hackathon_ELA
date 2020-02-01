
<?php
include "./conexionBBDD.php";
$parameters = file_get_contents("php://input");

if (isset($parameters)) {
    
    $mensajeRecibido = json_decode($parameters, true);
var_dump($mensajeRecibido);
   
    cambiarEstadoPregunta($mensajeRecibido['btn'], $conn);
      if (isset($mensajeRecibido['btn'])) {
        cambiarEstadoPregunta($mensajeRecibido['btn'], $conn);
    }
}
if (isset($_POST['preguntas'])) {
    insertarPregunta($_POST['preguntas'], $conn);
    header("Location: panelControl.php");
}
function insertarPregunta($pregunta, $conn)
{
    $query = "INSERT INTO preguntas (preguntas) VALUES ('$pregunta')";
    $result = $conn->query($query);
}
function cambiarEstadoPregunta($id, $conn)
{
    $query = "SELECT Estado from preguntas WHERE ID = $id";
    var_dump($query);
    $result = $conn->query($query);
    if (isset($result) && $result) {
        $row = $result->fetch_assoc();
    $estado = $row['Estado'] == 0 ? 1 : 0;
    $query = "UPDATE preguntas SET Estado = $estado WHERE id = $id";
    $result = $conn->query($query);
    $arrRespuesta = [];
    $arrRespuesta['newEstado'] = $estado;
    $obJson =json_encode($arrRespuesta, JSON_PRETTY_PRINT); 
    echo $obJson;
    }else{
        echo "La query fue mal";
    }
    
}

?>