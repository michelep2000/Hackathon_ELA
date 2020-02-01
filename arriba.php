<!doctype html>
<html lang='en'>

<head>
  <script>
    function habilitar(id) {
      var xhttp = new XMLHttpRequest();
      xhttp.open("POST", "./insertPreguntas.php");
      xhttp.setRequestHeader("Content-Type", "application/json");
      /*var obj = {};
      obj['btn'] = id;
      console.log(obj);
      objJSON = JSON.stringify(obj);
      console.log(objJSON);*/
      xhttp.send(`{'btn':${id}}`);

      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

          var respuestaJSON = JSON.parse(this.responseText);
          var button = document.getElementById(id);


          if (respuestaJSON["newEstado"] == 0) {
            button.setAttribute('btn btn-danger')
          } else {
            button.setAttribute('btn btn-success')
          }


        } else {
          console.log(this.readyState + " " + this.status);
          if (this.readyState == 4 && this.status == 404) {
            alert("URL INCORRECTA");

          }
        }
      };
      
    }
  </script>
  <!-- Required meta tags -->
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

  <!-- Bootstrap CSS -->
  <script src='script.js'></script>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel=StyleSheet href='css/styles.css' type='text/css' media=screen>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' integrity='sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS' crossorigin='anonymous'>
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js' integrity='sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut' crossorigin='anonymous'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js' integrity='sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k' crossorigin='anonymous'></script><?php
                                                                                                                                                                                                            function inicioPag($title)
                                                                                                                                                                                                            {
                                                                                                                                                                                                              echo "
    <title>$title</title>";
                                                                                                                                                                                                            }

                                                                                                                                                                                                            require "conexionBBDD.php";
                                                                                                                                                                                                            session_start();



                                                                                                                                                                                                            ?>
</head>

<body class='text-dark text-left'> "