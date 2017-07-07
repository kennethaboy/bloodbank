<?php
include('session.php');

 if (isset($_POST['update_exam']))
 { 
	 $exam_id = $_POST['exam_id'];	
	 $blood_bag_type = $_POST['blood_bag_type'];
	 $segment_number = $_POST['segment_number'];
	 $time_started = $_POST['time_started'];
	 $time_ended = $_POST['time_ended'];
	 $phlebotomist = $_POST['phlebotomist'];
	 $blood_type = $_POST['blood_type'];
	 $screened_by = $_POST['screened_by'];
	 $hematocrit = $_POST['hematocrit'];
	 $donation_date = $_POST['donation_date'];
	 $expiry = $_POST['expiry'];
	/* $hematocrit = $_POST['hematocrit'];*/
	 
	 mysqli_query($con,"UPDATE physical_exam SET blood_bag_type = '$blood_bag_type',segment_number='$segment_number',time_started='$time_started',time_ended='$time_ended',phlebotomist='$phlebotomist',blood_type='$blood_type',screened_by='$screened_by',hematocrit='$hematocrit',donation_date = '$donation_date', expiry = '$expiry', exam_status='2'  where exam_id='$exam_id'") or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated donation details!');</script>";
		echo "<script>document.location='donors_list.php'</script>";
	
} 

