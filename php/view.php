<?php

  include 'includes/config.php';

  if(isset($_GET['answer'])){ //Check variable has decleared
      $answerScriptID=$_GET['answer']; // Get passed value
    

    $readTable="SELECT * FROM `answerscript` WHERE answerScriptID='$answerScriptID'"; //Select data from
    $readData = $conn->query($readTable);



    if ($readData->num_rows > 0){
                

      while($row = $readData->fetch_assoc()){ //Fetch data as a associative array
                              
                                 
        $file=$row['file'];
        
                              
                                
      }
                            
      //Show alert promt and navigate to createExam page
      echo'
      <script>

        window.location = "viewAnswer.php";
                            
      </script>';
    }
  }
    
?>