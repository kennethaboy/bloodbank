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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Donor Information
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Donor's Profile</a>
                                </li>
                                <li class=""><a href="#profile-pills" data-toggle="tab">Questionnaire</a>
                                </li>
                                <li class=""><a href="#messages-pills" data-toggle="tab">Donation History</a>
                                </li>
                                <li class=""><a href="#settings-pills" data-toggle="tab">Booking History</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home-pills">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            PERSONAL DATA
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-bordered sortableTable responsive-table">
<?php  
    $donor_id=$_REQUEST['id'];  
    $query=mysqli_query($con,"select * from donor natural join city where donor_id='$donor_id'")or die(mysqli_error($con));
        $row=mysqli_fetch_array($query);
?>  
                                                <tbody>


                                                    <tr>
                                                        <td>First Name</td>
                                                        <th><?php echo $row['donor_first'];?></th>
                                                        <td>Middle Name</td>
                                                        <th><?php echo $row['donor_middle'];?></th>
                                                        <td>Last Name</td>
                                                        <th><?php echo $row['donor_last'];?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Date of Birth</td>
                                                        <th><?php echo date("M d, Y",strtotime($row['donor_bday']));?></th>
                                                        <td>Age</td>
                                                        <th>
                                                            <?php 
                                                               $age = date_create($row['donor_bday'])->diff(date_create('today'))->y;
                                                               echo $age;
                                                            ?> 
                                                        </th>
                                                        <td>Gender</td>
                                                        <th><?php echo $row['donor_gender'];?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Civil Status</td>
                                                        <th><?php echo $row['donor_civil'];?></th>
                                                        <td>Contact Number</td>
                                                        <th><?php echo $row['donor_contact'];?></th>
                                                        <td>Email Address</td>
                                                        <th><?php echo $row['donor_email'];?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Nationality</td>
                                                        <th><?php echo $row['donor_nationality'];?></th>
                                                        <td>Occupation</td>
                                                        <th colspan="3"><?php echo $row['donor_occupation'];?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Home Address</td>
                                                        <th colspan="3"><?php echo $row['donor_address'].", ".$row['city_name'];?></th>
                                                        <td>Zip Code</td>
                                                        <th><?php echo $row['donor_zipcode'];?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Office Address</td>
                                                        <th colspan="3"><?php echo $row['donor_office_address'];?></th>
                                                        <td>Zip Code</td>
                                                        <th><?php echo $row['donor_office_zipcode'];?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Type of Donor</td>
                                                        <th colspan="3"><?php echo $row['donor_type'];?></th>
                                                    </tr>
                                                    <tr>
<?php   
    $querycount=mysqli_query($con,"select COUNT(*) as count from physical_exam where donor_id='$donor_id'")or die(mysqli_error($con));
        $rowcount=mysqli_fetch_array($querycount);
?>                                                      
                                                    
<?php   
    $query2=mysqli_query($con,"select donation_date from physical_exam where donor_id='$donor_id' order by donation_date desc limit 0,1")or die(mysqli_error($con));
        $row2=mysqli_fetch_array($query2);
?>                                                                                                          
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            Personal Data
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-pills">
    
<?php
    $query=mysqli_query($con,"select * from survey where donor_id ='$donor_id' order by survey_date desc")or die(mysqli_error($con));
            $i=1;
            while($row=mysqli_fetch_array($query))
            {
                if ($row['survey_status']==1)
                {
                    $status="Approved";
                    $label="success";
                }
                if ($row['survey_status']==2)
                {
                    $status="Declined";
                    $label="danger";
                }
                if ($row['survey_status']==0)
                {
                    $status="Pending";
                    $label="warning";
                }
            
?>  
                    <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row['survey_id'];?>" class=""><?php echo date("M d, Y",strtotime($row['survey_date']));?></a>
                                            <span class="pull-right label label-<?php echo $label;?>"><?php echo $status;?></span>
                                        </h4>
                                    </div>
                                    <div id="collapse<?php echo $row['survey_id'];?>" class="panel-collapse collapse" style="height: auto;">
                                        <div class="panel-body">
                                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="" role="grid" aria-describedby="sample_2_info">
                                <tbody>
                           

<?php

    $queryc=mysqli_query($con,"select * from category order by category_id")or die(mysqli_error($con));
            $i=1;
            while($rowc=mysqli_fetch_array($queryc))
            {
                $cid=$rowc['category_id'];
            
?>  
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
                                         <?php echo $rowc['category'];?>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         Answer
                                    </th>
                                </tr>

<?php
        $query1=mysqli_query($con,"select * from question natural join answer natural join survey where category_id='$cid' and donor_id='$donor_id'")or die(mysqli_error($con));
        
            while($row1=mysqli_fetch_array($query1))
            {

            
?>      <input type="hidden" name="qid[]" value="<?php echo $qid;?>">
                                <tr role="row" class="even">
                                    <td class="sorting_1">
                                         <?php echo $i;?>
                                    </td>
                                    <td>
                                         <?php echo $row1['question'];?>
                                    </td>
                                    <td>
                                         <?php echo $row1['answer'];?>
                                    </td>
                                </tr>                                   
<?php $i++;}}?>
                                
                                
                                </tbody>
                                </table>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>
<?php $i++;}?>
                                
                                </div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="" role="grid" aria-describedby="sample_2_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
                                         Donation Date
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         Volume
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         Weight
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
<?php
    $query=mysqli_query($con,"select * from physical_exam where donor_id ='$donor_id' order by donation_date desc")or die(mysqli_error($con));
            $i=1;
            while($row=mysqli_fetch_array($query))
            {
            
?>  
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
                                         <?php echo date("M d, Y",strtotime($row['donation_date']));?>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         <?php echo $row['volume'];?> mL
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         <?php echo $row['weight'];?> kgs
                                    </th>
                                </tr>
<?php $i++;}?>
                                
                                
                                </tbody>
                                </table>
                                </div>
                                <div class="tab-pane fade" id="settings-pills">
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="" role="grid" aria-describedby="sample_2_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
                                         Booking Date
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         Time
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         Program Name
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
<?php
    
    $query=mysqli_query($con,"select * from booking where donor_id ='$donor_id' order by booking_date desc")or die(mysqli_error($con));
            $i=1;
            while($row=mysqli_fetch_array($query))
            {
                if ($row['status']=='0')
                    $status="Walk-in";
                else
                    $status=$row['program_name'];
            
?>  
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
                                         <?php echo date("M d, Y",strtotime($row['booking_date']));?>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         <?php echo date("h:i A",strtotime($row['booking_time']));?>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         <?php echo $status;;?>
                                    </th>
                                    
                                </tr>
<?php $i++;}?>
                                
                                
                                </tbody>
                                </table>
                                </div>
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
            <div class="well text-center">
                <a class="quick-btn" href="#">
                    <i class="icon-tint icon-5x text-red"></i>
                        <span> # Donation/s</span>
                        <span class="label label-danger icon-2x" style="margin-right: -20px">
                        <?php echo $rowcount['count'];?></span>
                </a>
            </div>
            <div class="well text-center">
                <a class="quick-btn" href="#">
                    <i class="icon-calendar icon-4x text-green"></i><br><br>
                        <span class="btn btn-warning btn-block"><?php echo date("M d, Y",strtotime($row2['donation_date']));?></span>
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
     <!-- GLOBAL SCRIPTS -->
    <!-- END GLOBAL SCRIPTS -->
	<?php include 'script.php';?>
</body>
    <!-- END BODY-->
    
</html>
