<?php 
session_start();
include('../includes/dbcon.php');

	$id=$_SESSION['id'];
	$qid = $_POST['qid'];
	  
	
		foreach($qid as $val) {	
			$answer = $_POST["answer$val"];
			
				    mysqli_query($con,"INSERT INTO survey(donor_id,question_id,answer) VALUES('$id','$val','$answer')")or die(mysqli_error($con));
					}
	
	echo "<script type='text/javascript'>alert('Successfully added new survey!');</script>";
	echo "<script>document.location='questionaire.php'</script>";   
	
	
?>