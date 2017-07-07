<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Login Options - Login Form 2</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="assets/admin/pages/css/login2.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->

<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN REGISTRATION FORM -->
	<form class="login-form" action="register.php" method="post">
			<div class="form-title">
			<span class="form-title">Sign Up</span>
		</div>
		<p class="hint">
			 Enter your personal details below:
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">First Name</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="First Name" name="first"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Middle Name</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Middle Name" name="mi"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Last Name</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Last Name" name="last"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Birthday</label>
			<input class="form-control form-control-inline input-medium date-picker" type="date" name="bday">
			<span class="help-block">
				Select birthday 
			</span>
		</div>
		<div class="md-radio-inline">
											<div class="md-radio">
												<input type="radio" id="radio6" name="gender" class="md-radiobtn" value="male">
												<label for="radio6">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>
												Male </label>
											</div>
											<div class="md-radio">
												<input type="radio" id="radio7" class="md-radiobtn" checked="" name="gender" value="female">
												<label for="radio7">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>
												Female </label>
											</div>
											
										</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Contact #</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Contact #" name="contact"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Occupation</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Occupation" name="occupation"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Nationality</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Nationality" name="nationality"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Address</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Prk/Street/Brgy/Block" name="address"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">City/Town</label>
			<select class="form-control placeholder-no-fix select2me" data-placeholder="Select..." name="city">
													<?php		
													
													include('includes/dbcon.php');
														$query2=mysqli_query($con,"select * from city order by city_name")or die(mysqli_error());
														    while($row=mysqli_fetch_array($query2)){
																	?>
																<option><?php echo $row['city_name'];?></option>
													<?php }?>
												</select>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<input class="form-control placeholder-no-fix" type="email" placeholder="Email" name="email"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
		</div>
		<div class="form-group margin-top-20 margin-bottom-20">
			<label class="check">
			<input type="checkbox" name="tnc"/>
			<span class="loginblue-font">I agree to the </span>
			<a href="javascript:;" class="loginblue-link">Terms of Service</a>
			<span class="loginblue-font">and</span>
			<a href="javascript:;" class="loginblue-link">Privacy Policy </a>
			</label>
			<div id="register_tnc_error">
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="register-back-btn" class="btn btn-default">Back</button>
			<button type="submit" id="register-submit-btn" name="register" class="btn btn-primary uppercase pull-right">Submit</button>
		</div>
	
	</form>
	<!-- END REGISTRATION FORM -->
</div>
<div class="copyright hide">
	 2014 © Metronic. Admin Dashboard Template.
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/login.js" type="text/javascript"></script>

<script type="text/javascript" src="assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Login.init();	
Demo.init();
 ComponentsPickers.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>