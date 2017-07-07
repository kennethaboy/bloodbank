<?php include 'session.php';

	$id = $_POST['id'];
	$status = $_POST['status'];
	
	if (isset($_POST['approve']))
	{
		mysqli_query($con,"update survey set survey_status='$status' where survey_id='$id'")or die(mysqli_error($con));
	}
		
	
	echo "<script type='text/javascript'>alert('Successfully updated status of donor!');</script>";
	echo "<script>document.location='home.php'</script>";  
	
?>
