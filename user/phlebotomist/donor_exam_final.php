<?php
 include 'session.php';
 include 'header.php';
 ?>

    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <?php include 'nav_top.php';?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
		<?php include 'sidebar.php';?>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>User Information</h2>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            Data For User List
						</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
									
										$query1=mysqli_query($con,"select * from physical_exam
														LEFT JOIN donor on donor.donor_id = physical_exam.donor_id
														WHERE physical_exam.exam_status = '1' and remarks='Accepted' ORDER BY exam_id DESC")or die(mysqli_error($con));
														while ($row=mysqli_fetch_array($query1)){
											$id=$row['exam_id'];										
									?>  
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['donor_first']. " " .$row['donor_middle']. " " .$row['donor_last'];?></td>  
                                            <td class="center">
												<a href="#exam<?php echo $id;?>" class="btn btn-success" data-toggle = "modal" data-target="#exam<?php echo $id;?>"><i class = "fa fa-pencil"></i>Fill up laboratories exam</a>
											</td>
                                        </tr> 
										<?php include 'update_exam_modal.php';?>
										<?php }?>									
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>


                    </div>
                </div>
                <hr>
            </div>
        </div>
       <!--END PAGE CONTENT -->
          <!-- RIGHT STRIP  SECTION -->
      
         <!-- END RIGHT STRIP  SECTION -->

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="../assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
	<?php include 'script.php';?>
    <script type="text/javascript">
        $("#datepicker").datepicker().datepicker("setDate", new Date());
    </script>    
</body>
    <!-- END BODY-->
    
</html>
