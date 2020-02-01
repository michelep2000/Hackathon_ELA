<?php
require "arriba.php";
include "./navBar.php";
?>


<div id="titulo">
    <h1>Panel de administración</h1>
</div>
<div class="col-12" id="e">
<div class="btn-group" id= "titulo2" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-secondary" onclick="myFunction('usuario')">Usuarios</button>
    <button type="button" class="btn btn-secondary" onclick="myFunction('grupo ')">Grupos</button>
</div>
</div>

<div class="col-12" id="pelo">
    <table class="table">
    <tbody id='tablaEntradas'>

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
                            var h4 = document.createElement('h3');
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

<?php include "./abajo.php"; ?>