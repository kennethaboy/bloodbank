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
                        <h2>Schedule</h2>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            List of Schedule
						</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Date Started</th>
                                            <th>Date Ended</th>                                  
                                            <th>Time Started</th>
                                            <th>Time Ended</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from schedule 
																	LEFT JOIN user on user.user_id = schedule.user_id
																	ORDER BY sched_id ASC")or die(mysqli_error($con));
										while ($row=mysqli_fetch_array($query1)){
											$id=$row['sched_id'];
											
									?>  
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['user_first']. " " .$row['user_middle']. " " .$row['user_last'];?></td>
                                            <td><?php echo date("M d, Y",strtotime($row['sched_date']));?></td>
                                            <td><?php echo date("M d, Y",strtotime($row['date_end']));?></td>                                            
                                            <td class="center"><?php echo date("h:i A",strtotime($row['start_time']));?></td>
                                            <td class="center"><?php echo date("h:i A",strtotime($row['end_time']));?></td>
                                            <td class="center">
												<a href="#update<?php echo $id;?>" class="btn btn-success" data-toggle = "modal" data-target="#update<?php echo $id;?>"><i class = "fa fa-pencil"></i> Edit</a>
											</td>
                                        </tr> 
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
        <div id="right">
            <div class="well well-small">
                <button class = "btn btn-success btn-block" data-toggle="modal" data-target="#schedule"><i class = "icon-calendar"></i> Add Schedule</button>
            </div>
           <?php include 'add_schedule_modal.php';?> 
        </div>
         <!-- END RIGHT STRIP  SECTION -->

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <?php include('footer.php');?>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <!-- END GLOBAL SCRIPTS -->
	<?php include 'script.php';?>
	    <script>
            $(function () { formInit(); });
        </script>
</body>
    <!-- END BODY-->
    
</html>
