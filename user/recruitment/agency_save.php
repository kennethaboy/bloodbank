<?php 
include ('session.php');

	$agency = $_POST['name'];
		
			
			mysqli_query($con,"INSERT INTO agency(agency_name)	
			VALUES('$agency')")or die(mysqli_error($con)); 
		
			echo "<script type='text/javascript'>alert('Data Successfully Saved!');</script>";
			echo "<script>window.location='agency.php'</script>";   
	


?>