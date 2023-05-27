<?php

	include 'includes/config.php'; //connect php file
	if(isset($_GET['deleteid'])){ //Check variable has declared
		$resid=$_GET['deleteid']; //Get passed value 

		$sql="DELETE FROM `result` WHERE resid=$resid"; //Delete data from result
		$result=mysqli_query($conn,$sql);
		if($result){
			//Show alert promt and navigate to resultDisplay page
			echo 
			'<script>
	            alert("Delete Successfull");
	            window.location="resultDisplay.php";
	        </script>';
		}
		else{
			die(mysqli_error($conn));
		}
	}

?>