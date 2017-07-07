<?php 
 
	  $first=$_POST['first'];
	  $last=$_POST['last'];
	  $mi =$_POST['mi'];
	  $email =$_POST['email'];
	  $password =$_POST['password'];
	  $occupation =$_POST['occupation'];
	  $address =$_POST['address'];
	  $city =$_POST['city'];
	  $nationality =$_POST['nationality'];
	  $contact =$_POST['contact'];
	  $gender =$_POST['gender'];
	  $bday =date("Y-m-d",strtotime($_POST['bday']));
	  $date=date("Y-m-d");
	  
		include('includes/dbcon.php');
	      
		$query=mysqli_query($con,"SELECT * from donor where donor_first='$first' and donor_last='$last' and donor_bday='$bday'");

			$num_rows = mysqli_num_rows($query);
				while($row=mysqli_fetch_array($query)){
			  	$id=$row['donor_id'];}

		if ($num_rows<>0)			
				{
						echo "<script type='text/javascript'>alert('Sorry! You are already registered! You may now login!');</script>";
						echo "<script>document.location='login.html';</script>";

 				}
		else
				{
					mysqli_query($con,"INSERT INTO donor(donor_first,donor_middle,donor_last,donor_email,donor_password,donor_nationality,donor_occupation,donor_address,donor_city,donor_contact,donor_gender,donor_bday,donor_pic) 
		VALUES('$first','$mi','$last','$email','$password','$nationality','$occupation','$address','$city','$contact','$gender','$bday','default.gif')")or die(mysqli_error($con));  
	
						echo "<script type='text/javascript'>alert('Successfully registered as a donor in NIR Blood Bank! You may now login!');</script>";
						echo "<script>document.location='login.html';</script>";
				}



?>

