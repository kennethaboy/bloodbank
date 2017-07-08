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

            <div class="inner" style="width: 120%">
                <div class="row">
                    <form method="post" action="update.php">
                    <div class="col-md-12">
                        <h2>Donor Information</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="form-group col-md-6">
                                <h3>Pending Donors</h3>
                            </div>
                                       <div class="form-group col-md-1 pull-right">
                                            <button class="btn btn-lg btn-primary" type="submit">Save</button>
                                        </div> 
                                      <div class="form-group col-md-3 pull-right">
                                            <label>Select Program</label>
                                            <select class="form-control" tabindex="4" name="program" required>

                                                <?php
                                                    $query2=mysqli_query($con,"select * from program order by program")or die(mysqli_error());
                                                            while($row=mysqli_fetch_array($query2)){
                                                ?>
                                                       <option value="<?php echo $row['program_id'];?>"><?php echo $row['program'];?></option>
                                                                  <?php }?>
                                            </select>
                                        </div>
                                      <br><br><br>  

                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Contact #</th>
                                            <th>City</th>
                                            <th>Program Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php   
                                    include '../../includes/dbcon.php';                             
                                        $query1=mysqli_query($con,"select * from survey natural join donor natural join city where survey_status='0' group by donor_id,survey_date ORDER BY survey_id ASC")or die(mysqli_error($con));
                                        while ($row=mysqli_fetch_array($query1)){
                                            $id=$row['donor_id'];
                                            $sid=$row['survey_id'];                                       

                                    ?>  
                                        <tr class="odd gradeX">
                                            <td><input type="checkbox" value="<?php echo $row['donor_id'];?>" name="donor_id[]"></td>  
                                            <td><?php echo $row['donor_first'];?></td>  
                                            <td><?php echo $row['donor_middle'];?></td>  
                                            <td><?php echo $row['donor_last'];?></td>  
                                            <td><?php echo $row['donor_contact'];?></td>  
                                            <td><?php echo $row['city_name'];?></td>  
<?php   
                                
                                        $query2=mysqli_query($con,"select * from program_donor natural join program where donor_id='$id' ORDER BY program_donor_id DESC")or die(mysqli_error($con));
                                                $row2=mysqli_fetch_array($query2);
                                            
                                    ?>                                              
                                            <td><?php echo $row2['program'];?></td>  
                                            <td class="center">
                                                <a href="survey.php?id=<?php echo $id;?>" class="btn btn-primary"><i class = "fa fa-pencil"></i>View Survey Questionaire</a>
                                            </td>
                                        </tr> 
                                        </form>
                                        <?php include 'make_exam_modal.php';?>
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
    <div id="footer">
        <?php include('footer.php');?>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <!-- END GLOBAL SCRIPTS -->
    <?php include 'script.php';?>
</body>
    <!-- END BODY-->
    
</html>
