
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
                    <div class="col-lg-6">
                        <form class="login-form" action="questionaire.php" method="post">
                            <select class="form-control select2" name="id" tabindex="1" autofocus required>
                                <?php
                
                                  include('../../includes/dbcon.php');
                                     $query2=mysqli_query($con,"select * from donor order by donor_last")or die(mysqli_error());
                                        while($row=mysqli_fetch_array($query2)){
                                ?>
                                        <option value="<?php echo $row['donor_id'];?>"><?php echo $row['donor_last'].", ".$row['donor_first'];?></option>
                                  <?php }?>
                                </select>
                    </div>
                    <div class="col-lg-6">
                        <button type="button" class="btn default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>   
                    </form>                                
                </div>

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
