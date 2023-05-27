
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" href="../css/Result.css">
    <title>Result page</title>
</head>

<body>
    <!-- HEADER -->
    <?php 
        include 'includes/header.php';
    ?>


<section >

<!---connect Sresult.php--->
<?php

include 'includes/config.php';
?>
<div class="resultDa">

<!---search bar---->
<div class="search">
    <h2>Search your student ID</h2>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Student Id" title="Type in a name" class="searchBar">
</div><br><br>


<?php


//read data from result table
    $readTable="SELECT * FROM result";

                        $readData = $conn->query($readTable);

                        //check condition
                        if ($readData->num_rows > 0){
                            //display table hedding
                            echo"
                            <table class='table1' id='myTable'>
                            <tr class='tableR' class='header'>
                                <th>Student ID</th>
                                <th>Result ID</th>
                                <th>Student Name</th>
                                <th>Exam ID</th>
                                <th>Enrollment Key</th>
                                <th>Garde</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";

                            //display data
                            while($row = $readData->fetch_assoc()){
                                echo "
                                <tr>
                                <td>{$row['stid']}</td>
                                <td>{$row['resid']}</td>
                                <td>{$row['stname']}</td>
                                <td>{$row['exid']}</td>
                                <td>{$row['enroll']}</td>
                                <td>{$row['grade']}</td>
                            </tr>

                                ";
                            }
                        }


 ?>

 </div>

<script>
    //search student ID

function myFunction() {

    //declare variable
  var input, filter, table, tr, td, i, txtValue;

  //get input
  input = document.getElementById("myInput");

  filter = input.value.toUpperCase();

  //table data
  table = document.getElementById("myTable");

  //get tr data
  tr = table.getElementsByTagName("tr");

  //Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];

    if (td) {
      txtValue = td.textContent || td.innerText;

      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

      } 
      else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</section>


</body>


</html>