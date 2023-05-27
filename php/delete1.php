<?php

	include 'includes/config.php'; //connect php file
	if(isset($_GET['deleteid'])){ //Check variable has declared
		$id=$_GET['deleteid']; //Get passed value from examDisplay


		$sql="DELETE FROM `createexam` WHERE id=$id"; //Delete data from createexam
		$result=mysqli_query($conn,$sql);
		if($result){
			//Show success messeage in alert promt and navigate to examDisplay page
			echo 
			'<script>
	            alert("Delete Successfull");
	            window.location="examDisplay.php";
	        </script>';
		}
		else{
			die(mysqli_error($conn));
		}
	}

?>