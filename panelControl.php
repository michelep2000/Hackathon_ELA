<?php
include "./arriba.php";
<<<<<<< HEAD
inicioPag("Panel de administración", "panel.css");
include "./navBar.php";
$query = "SELECT * FROM preguntas";
$result = $conn->query($query);
?>
<div class='offset-lg-1 col-10 text-center'>
    <form method="post" action="insertPreguntas.php">
        <div class="form-group">
            <label>Pregunta</label>
            <input type="Pregunta" name="preguntas" class="form-control" aria-describedby="Pregunta" placeholder="Pregunta">
        </div>
        <p class="text-right"><button type="submit" name="insert" class="btn btn-primary">Enviar</button></p>
    </form>
</div>
<?php

if (isset($result) && $result) {

    if ($result->num_rows > 0) {
        echo "<div class='container'>";
        echo  "<div class='row'>";
        while ($row = $result->fetch_assoc()) {
?>
            <div class='col col-12 col-md-6 col-lg-4'>
                <div class='container mb-2'>
                    <div class='row justify-content-center'>
                        <div class='col col-12'>
                            <p class='text-center lead'><?php echo "$row[preguntas]"; ?></p>
                        </div>
                        <div class='col-12'>
                            <p class='text-center'><button id='btnEs' type='button' class='btn <?php $isEnabled = $row['Estado'] == 1;
                                                                                                echo $isEnabled ? "btn-danger" : "btn-success"; ?>' onclick='habilitar(<?php echo "$row[ID]"; ?>)' data-toggle='modal' data-target='<?php echo "#update_$row[ID]"; ?>'><?php echo $isEnabled ? "Deshabilitar" : "Habilitar" ?></button></p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

<?php
        }
        echo    "</div>";
        echo   "</div>";
    } else {
        echo "0 results";
    }
} else {
    echo "Algo va mal";
}
=======
inicioPag("Inicio", "tablaUsr.css");
include "./navBar.php";
>>>>>>> d7b513f54ba5b487076b64d9e139b0f29b778fa4
?>

<div>
    <h1>Panel de control</h1>
</div>

<div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-secondary" onclick="myFunction('usuario')">Usuarios</button>
    <button type="button" class="btn btn-secondary" onclick="myFunction('grupo ')">Grupos</button>
</div>
<div class="col-12" id="pelo">
    <table>
    <tbody id='tablaEntradas'>

<<<<<<< HEAD
=======
    </tbody>
    </table>
</div>

<script>
    function myFunction(parameter) {
        var xmlHttp = new XMLHttpRequest();
        var obj = {};
        obj['tabla'] = parameter;
        var objJson = JSON.stringify(obj);
        xmlHttp.open("POST", "./tablaUsuarios_Grupos.php");
        xmlHttp.setRequestHeader("Content-Type", "application/json");

        xmlHttp.onreadystatechange = function() {
            var tabla = document.getElementById('tablaEntradas');
            tabla.innerHTML = "";

            if (this.readyState == 4 && this.status == 200) {
                var respuesta = JSON.parse(this.responseText);

                for (let index = 0; index < respuesta.length; index++) {
                    var entrada = respuesta[index];
                    if (index == 0) {
                        var namesRow = document.createElement('tr');
                        var cont = 0;
                        for (const key in entrada) {
                            var column = document.createElement('th');
                            var text = document.createTextNode(key);
                            var h4 = document.createElement('h4');
                            column.appendChild(h4);
                            h4.appendChild(text);
                            namesRow.appendChild(column);
                            if (cont == 0) {
                                column.setAttribute("id", "col");
                            }
                            cont++;
                        }
                        tabla.appendChild(namesRow);

                    }
                    var row = document.createElement('tr');
                    for (const key in entrada) {

                        var column = document.createElement('td');
                        var text = document.createTextNode(entrada[key]);
                        column.appendChild(text);
                        row.appendChild(column);


                    }
                    tabla.appendChild(row);
                }

            } else {
                console.log(this.readyState + " " + this.status);
                if (this.readyState == 4 && this.status == 404) {
                    alert("URL INCORRECTA");

                }
            }
        };

        xmlHttp.send(objJson);
        document.getElementById("algo").innerHTML = "YOU CLICKED ME!";
    }
</script>

<?php
echo "";/*
$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table col-9 mx-auto'>";
    echo "<tr>

      <td id= 'tabla'><h4>Nombre</h4></td>

      <td><h4>Apellidos</h4></td>

      <td><h4>Ubicación</h4></td>

      <td><h4>Rol</h4></td>

    </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr class='centroMovimientos'>

      <td>" . $row['nombre'] . "</td>

      <td>" . $row['apellidos'] . "</td>

      <td>" . $row['ubicacion'] . "</td>

      <td>" . $row['rol'] . "</td>";

        echo "</tr>";
        echo "</div>";
    }
    echo "</table>";
    echo "<div class='espacio2'></div>";
} else {
    echo "0 results";
}
echo "</div>";
echo "</div>";
*/ ?>



>>>>>>> d7b513f54ba5b487076b64d9e139b0f29b778fa4
<?php include "./abajo.php"; ?>