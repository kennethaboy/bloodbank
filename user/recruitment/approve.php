<?php include 'session.php';

	$id = $_POST['id'];
	
	if (isset($_POST['approve']))
	{
		mysqli_query($con,"update survey set survey_status='1' where survey_id='$id'")or die(mysqli_error($con));
	}
	if (isset($_POST['get_declared_interfaces(oid)']))
	{
		mysqli_query($con,"update survey set survey_status='0' where survey_id='$id'")or die(mysqli_error($con));
	}	
	
	echo "<script type='text/javascript'>alert('Successfully updated status of donor!');</script>";
	echo "<script>document.location='home.php'</script>";  
	
?>
