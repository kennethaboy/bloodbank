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
                        <h2>Inventory</h2>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            List of Blood Inventory
						</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Blood Type</th>
                                            <th>On Hand</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
									include 'dbcon.php';								
                                    $date=date('Y-m-d');
										$query1=mysqli_query($con,"select *,COUNT(*) as count from physical_exam where remarks='Accepted' and expiry>='$date' GROUP BY blood_type ORDER BY blood_type ASC")or die(mysqli_error($con));
										while ($row=mysqli_fetch_array($query1)){
											
									?>  
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['blood_type'];?></td>
                                            <td><?php echo $row['count'];?></td>
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
<?php
    date_default_timezone_set("Asia/Manila"); 
    $date = date("Y-m-d");
    $expiring = date("Y-m-d",strtotime($date. " + 3 days")); 

    $avail=mysqli_query($con,"select COUNT(*) as blood from physical_exam where expiry>='$date'")or die(mysqli_error($con));
            $rowa=mysqli_fetch_array($avail);
?>                     
            <div class="well text-center">
                <a class="quick-btn" href="#">
                    <i class="icon-tint icon-5x text-blue"></i>
                        <span> Available </span>
                        <span class="label label-success icon-2x" style="margin-right: -20px">
                        <?php echo $rowa['blood'];?></span>
                </a>
            </div>

<?php     
    $querycount=mysqli_query($con,"select COUNT(*) as count from physical_exam where expiry<='$expiring' and expiry>='$date'")or die(mysqli_error($con));
        $rowcount=mysqli_fetch_array($querycount);
?>         
            <div class="well text-center">
                <a class="quick-btn" href="#">
                    <i class="icon-tint icon-5x text-red"></i>
                        <span> Expires in 3 days </span>
                        <span class="label label-danger icon-2x" style="margin-right: -20px">
                        <?php echo $rowcount['count'];?></span>
                </a>
            </div>
<?php
    $query=mysqli_query($con,"select COUNT(donor_id) as donor from physical_exam group by donor_id")or die(mysqli_error($con));
            $count=0;    
            while($row=mysqli_fetch_array($query)){
               $count=$count+1;
            }
?>                     
            <div class="well text-center">
                <a class="quick-btn" href="#">
                    <i class="icon-user icon-5x text-red"></i>
                        <span> Donors </span>
                        <span class="label label-primary icon-2x" style="margin-right: -20px">
                        <?php echo $count;?></span>
                </a>
            </div>
            
        </div>
         <!-- END RIGHT STRIP  SECTION -->

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <?php include('footer.php');?>
    </div>
    <!--END FOOTER -->
     <?php include('script.php');?>
        <script>
            $(function () { formInit(); });
        </script>
</body>
    <!-- END BODY-->
    
</html>
