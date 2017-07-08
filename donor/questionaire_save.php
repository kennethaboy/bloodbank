<?php 
session_start();
include('../includes/dbcon.php');

	$id=$_SESSION['id'];
	$qid = $_POST['qid'];
	$program = $_POST['program'];
	$date = date("Y-m-d H:i:s");
	  
	mysqli_query($con,"INSERT INTO survey(donor_id,survey_date,program_id) VALUES('$id','$date','$program')")or die(mysqli_error($con));
		$survey_id=mysqli_insert_id($con);

		foreach($qid as $val) 
		{	
			$answer = $_POST["answer$val"];
			
			mysqli_query($con,"INSERT INTO answer(question_id,answer,survey_id) VALUES('$val','$answer','$survey_id')")or die(mysqli_error($con));
		}
	
	echo "<script type='text/javascript'>alert('Successfully submitted survey questionnaire! Please wait for the confirmation from the recruitment officer.');</script>";
	echo "<script>document.location='logout.php'</script>";   
	
	
?>