<?php 
include('../../includes/dbcon.php');

	$id=$_POST['id'];
	$qid = $_POST['qid'];
	$date=	date("Y-m-d");

		foreach($qid as $val) {	
			$answer = $_POST["answer$val"];
			
				    mysqli_query($con,"INSERT INTO survey(donor_id,question_id,answer,survey_date,survey_status) VALUES('$id','$val','$answer','$date','0')")or die(mysqli_error($con));
					}
	
	echo "<script type='text/javascript'>alert('Successfully saved! You may now wait for physical exam!');</script>";
	echo "<script>document.location='index.php'</script>";   
	
	
?>