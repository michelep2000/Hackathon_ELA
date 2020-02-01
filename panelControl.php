<?php
include "./arriba.php";
inicioPag("Panel de administración", "panel.css");
include "./navBar.php";
  $query = "SELECT * FROM preguntas";
  $result = $conn->query($query);
  ?>
          <form method="post" action="insertPreguntas.php">
           <div class="form-group">
             <label>Pregunta</label>
             <input type="Pregunta" name="preguntas" class="form-control" aria-describedby="Pregunta" placeholder="Pregunta">
           </div>       
           <p class="text-right"><button type="submit" name="insert" class="btn btn-primary">Submit</button></p>
         </form>

  <?php
    
  if (isset($result) && $result) {
  
      if ($result->num_rows > 0) {
        echo "<div class='container'>";
        echo  "<div class='row'>";
        while($row = $result->fetch_assoc()){
          ?>
          <div class='col col-12 col-md-6 col-lg-4'>
           <div class='container mb-2'>
              <div class='row justify-content-center'>
                <div class='col col-12'>
                  <p class='text-center lead'><?php echo "$row[preguntas]"; ?></p>
                </div>
                <div class='col-12'>    
                  <p class='text-center'><button id= btnEs type='button' class='btn <?php echo $row['Estado']==0? "btn-danger":"btn-success";?>' onclick='enable(<?php echo"$row[ID]";?>)' data-toggle='modal' data-target='<?php echo "#update_$row[ID]";?>'>Enable/Disable</button></p>
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
?>



<?php include "./abajo.php";?>
