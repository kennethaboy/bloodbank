
<?php
include 'session.php';
include 'header.php';
?>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
		<?php include 'nav_top.php';?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
		<?php //include 'sidebar.php';?>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content" class="col-md-12" style="width:100%;height: 500px!important">
             
            <div class="inner" style="min-height: 700px;">
                
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        <form class="login-form" action="register.php" method="post">
                            <div class="form-title">
                                <h2 class="form-title">Sign Up</h2>
                            </div>
                            <p class="hint">
                                 Enter your personal details below:
                            </p>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">First Name</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="First Name" name="first"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Middle Name</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="Middle Name" name="mi"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Last Name</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="Last Name" name="last"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Birthday</label>
                                    <input class="form-control input-medium date-picker" type="date" name="bday">
                                </div>
                                <div class="col-md-6">
                                <label class="control-label visible-ie8 visible-ie9">Gender </label>
                                    <input type="radio" id="radio6" name="gender" class="md-radiobtn" value="male">
                                    <label for="radio6">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Male </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="radio" id="radio7" class="md-radiobtn" checked="" name="gender" value="female">
                                    <label for="radio7">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Female </label>
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Contact #</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="Contact #" name="contact"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Civil Status</label>
                                    <select name = "civil" class = "form-control">              
                                        <option>Single</option>
                                        <option>Married</option>
                                        <option>Separated</option>
                                        <option>Widow/Widower</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Nationality</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="Nationality" name="nationality"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Occupation</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="Occupation" name="occupation"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Home Address</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="Prk/Street/Brgy/Block" name="address"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Home City/Town</label>
                                    <select class="form-control" tabindex="4" name="city" required>

                                                <?php
                                                    $query2=mysqli_query($con,"select * from city order by city_name")or die(mysqli_error());
                                                            while($row=mysqli_fetch_array($query2)){
                                                ?>
                                                       <option value="<?php echo $row['city_id'];?>"><?php echo $row['city_name'];?></option>
                                                                  <?php }?>
                                            </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Home Zipcode</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="Home Address Zipcode" name="zipcode"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Office Address</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="Prk/Street/Brgy/Block" name="oaddress"/>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Office Zipcode</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="Home Address Zipcode" name="ozipcode"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                                    <input class="form-control placeholder-no-fix" type="email" placeholder="Email" name="email"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label visible-ie8 visible-ie9">Donor Type </label>
                                    <input type="radio" id="radio6" name="type" class="md-radiobtn" value="Volunteer">
                                    <label for="radio6">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Volunteer </label>
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" id="radio7" class="md-radiobtn" checked="" name="type" value="others">
                                    <label for="radio7">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Specify if others </label>
                                </div>  
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9"></label>
                                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Specify if not a volunteer" name="others"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-actions">
                                    <button type="button" id="register-back-btn" class="btn btn-default">Back</button>
                                    <button type="submit" id="register-submit-btn" name="register" class="btn btn-primary uppercase">Next</button>
                                </div>
                            </div>
                        </form>
                        <!-- END REGISTRATION FORM -->

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
               

                
            </div>

        </div>
        <!--END PAGE CONTENT -->

        
    </div>

    <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/for_index.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>
