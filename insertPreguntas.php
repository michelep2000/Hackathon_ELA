<script type="text/javascript" src="script.js"></script>
<?php
include "./conexionBBDD.php";

if (isset($_POST['preguntas'])) {
    insertarPregunta($_POST['preguntas'], $conn);
    header("Location: panelControl.php");
  }else if(isset($_POST['btn'])){
    cambiarEstadoPregunta($_POST['btn'], $conn);
  }
 
function insertarPregunta($pregunta, $conn)
  {
    $query = "INSERT INTO preguntas (preguntas) VALUES ('$pregunta')";
    $result = $conn->query($query);
    
  }
  function cambiarEstadoPregunta($id, $conn)
  {
    $query = "SELECT Estado from preguntas WHERE ID = $id";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $estado = $row['Estado']==0?1:0;
    $query = "UPDATE preguntas SET Estado = $estado WHERE id = $id";
    $result = $conn->query($query);
    $arrRespuesta=[];
    $arrRespuesta['newEstado'] = $estado;
    echo json_encode($arrRespuesta, JSON_PRETTY_PRINT);
   
  }
  
?>
