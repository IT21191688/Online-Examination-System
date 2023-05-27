<?php
    include 'includes/config.php'; //connect php file
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/dashboard1.css">
    <title>Resultdisplay</title>
</head>

<body>
    <!-- HEADER -->
    <?php 
        include 'includes/header.php';
    ?>

<fieldset class="form">

    <table class='table'> <!--Table for result display-->
    	<thead>
    <tr>
    	<!--<th scope ="col" class='th1'>ID</th>-->
        <th scope ="col" class='th1'>Student ID</th>
        <th scope ="col" class='th1'>Student Name</th>
        <th scope ="col" class='th1'>Exam ID</th>
        <th scope ="col" class='th1'>Enrollment Key</th>
        <th scope ="col" class='th1'>Grade</th>
        <th scope ="col" class='th1' align="center">Operation</th>
        
    </tr>
</thead>
<tbody>
	<?php

		$sql="SELECT * FROM `result`"; //Select from data from result
		$result=mysqli_query($conn,$sql);
		if($result){
			while($row=mysqli_fetch_assoc($result)){ //Fetch data as associative array
				$resid=$row['resid'];
				$stid = $row['stid'];
				$stname = $row['stname'];
				$exid = $row['exid'];
				$enroll = $row['enroll'];
				$grade = $row['grade'];

				//Display fetched data in tabale 
                echo ' <tr>
				<td>'.$stid.'</td> 
				<td>'.$stname.'</td>
				<td>'.$exid.'</td>
				<td>'.$enroll.'</td>
				<td>'.$grade.'</td>
				<td id="op"><a class="a" href="delete2.php?deleteid='.$resid.'"><button onclick="myFunction1()" class="delete">Delete</button></a>

							<a class="a" href="update1.php?updateid='.$resid.'"><button onclick="myFunction2()" class="edit">Edit</button></a>


				</td>

				</tr>';
			}
			
		}

	?>
	
</tbody>

</table>

</fieldset>
<a href="examinerDashboard.php"><button class="add">Dashboard</button></a>

    <?php 
        include 'includes/footer.php';
    ?>

</body>
</html>