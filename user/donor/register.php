<?php 
	include('session.php');
 
	  $first=$_POST['first'];
	  $last=$_POST['last'];
	  $mi =$_POST['mi'];
	  $email =$_POST['email'];
	  $password =$_POST['password'];
	  $occupation =$_POST['occupation'];
	  $address =$_POST['address'];
	  $city =$_POST['city'];
	  $zipcode =$_POST['zipcode'];
	  $oaddress =$_POST['oaddress'];
	  $ozipcode =$_POST['ozipcode'];
	  $nationality =$_POST['nationality'];
	  $civil =$_POST['civil'];
	  $contact =$_POST['contact'];
	  $gender =$_POST['gender'];
	  $type =$_POST['type'];
	  $bday =date("Y-m-d",strtotime($_POST['bday']));
	  $date=date("Y-m-d");
	  
	  if($type=='Volunteer')
	  {
	  	$donor_type="Volunteer";
	  }
	  else
	  {
	  	$donor_type=$_POST['others'];	
	  }

		$query=mysqli_query($con,"SELECT * from donor where donor_first='$first' and donor_last='$last' and donor_bday='$bday'");

			$num_rows = mysqli_num_rows($query);
				while($row=mysqli_fetch_array($query)){
			  	$id=$row['donor_id'];}

		if ($num_rows<>0)			
				{
						echo "<script type='text/javascript'>alert('Sorry! You are already registered! You may now login!');</script>";
						echo "<script>document.location='index.php';</script>";

 				}
		else
				{
					mysqli_query($con,"INSERT INTO donor(donor_first,donor_middle,donor_last,donor_email,donor_password,donor_nationality,donor_occupation,donor_address,donor_city,donor_contact,donor_gender,donor_bday,donor_type,donor_civil,donor_office_address,donor_office_zipcode,donor_zipcode) 
		VALUES('$first','$mi','$last','$email','$password','$nationality','$occupation','$address','$city','$contact','$gender','$bday','$donor_type','$civil','$oaddress','$ozipcode','$zipcode')")or die(mysqli_error($con)); 
				$donor_id=mysqli_insert_id($con); 
	
						echo "<script type='text/javascript'>alert('Successfully registered as a donor in NIR Blood Bank! You may now proceed on the next step!');</script>";
						echo "<script>document.location='questionaire.php?id=$donor_id';</script>";
				}



?>

