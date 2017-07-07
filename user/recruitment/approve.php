<?php include 'session.php';

	$id = $_POST['id'];
	$status = $_POST['status'];
	
	mysqli_query($con,"update athlete set member_id='$name',sports_id='$sport',sem='$sem',sy='$sy' where athlete_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully updated athlete details!');</script>";
	echo "<script>document.location='athlete.php'</script>";  
	
?>
