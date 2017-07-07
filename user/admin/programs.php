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

            <div class="inner" style="width: 125%">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Program List</h2>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            List of Programs
						</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Program Name</th>
                                            <th>Program Address</th>
                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
										$query1=mysqli_query($con,"select * from program ORDER BY program")or die(mysqli_error($con));
										while ($row=mysqli_fetch_array($query1)){
											$id=$row['program_id'];
											
									?>  
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['program'];?></td>
                                            <td><?php echo $row['program_address'];?></td>
                                           
                                           
<?php   
                                            
                                    ?>                                         
        
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

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <?php include('footer.php');?>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
   <?php include 'script.php';?>
        <script>
            $(function () { formInit(); });
        </script>

    <!-- END GLOBAL SCRIPTS -->
	
</body>
    <!-- END BODY-->
    
</html>
