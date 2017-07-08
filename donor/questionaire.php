<?php include('session.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Home | <?php include('title.php');?></title>
<?php include('head.php');?>
</head>
<body class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<?php include('page-header.php');?>
<!-- END HEADER -->
<div class="clearfix">
</div>
<div class="container">
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<?php include('sidebar.php');?>
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								 Widget settings form goes here
							</div>
							<div class="modal-footer">
								<button type="button" class="btn blue">Save changes</button>
								<button type="button" class="btn default" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<!-- BEGIN STYLE CUSTOMIZER -->
				<div class="theme-panel">
					<div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
						<i class="icon-settings"></i>
					</div>
					<div class="toggler-close">
						<i class="icon-close"></i>
					</div>
					<div class="theme-options">
						<div class="theme-option theme-colors clearfix">
							<span>
							THEME COLOR </span>
							<ul>
								<li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
								</li>
								<li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
								</li>
								<li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
								</li>
								<li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark">
								</li>
								<li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
								</li>
							</ul>
						</div>
						<div class="theme-option">
							<span>
							Theme Style </span>
							<select class="layout-style-option form-control input-small">
								<option value="square" selected="selected">Square corners</option>
								<option value="rounded">Rounded corners</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							Layout </span>
							<select class="layout-option form-control input-small">
								<option value="fluid" selected="selected">Fluid</option>
								<option value="boxed">Boxed</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							Header </span>
							<select class="page-header-option form-control input-small">
								<option value="fixed" selected="selected">Fixed</option>
								<option value="default">Default</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							Top Dropdown</span>
							<select class="page-header-top-dropdown-style-option form-control input-small">
								<option value="light" selected="selected">Light</option>
								<option value="dark">Dark</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							Sidebar Mode</span>
							<select class="sidebar-option form-control input-small">
								<option value="fixed">Fixed</option>
								<option value="default" selected="selected">Default</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							Sidebar Style</span>
							<select class="sidebar-style-option form-control input-small">
								<option value="default" selected="selected">Default</option>
								<option value="compact">Compact</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							Sidebar Menu </span>
							<select class="sidebar-menu-option form-control input-small">
								<option value="accordion" selected="selected">Accordion</option>
								<option value="hover">Hover</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							Sidebar Position </span>
							<select class="sidebar-pos-option form-control input-small">
								<option value="left" selected="selected">Left</option>
								<option value="right">Right</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							Footer </span>
							<select class="page-footer-option form-control input-small">
								<option value="fixed">Fixed</option>
								<option value="default" selected="selected">Default</option>
							</select>
						</div>
					</div>
				</div>
				<!-- END STYLE CUSTOMIZER -->
				
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN SAMPLE FORM PORTLET-->
						<div class="portlet box green-haze">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-globe"></i>Blood Donor History Questionnaire
								</div>
								<div class="tools">
									<a href="javascript:;" class="reload" data-original-title="" title="">
									</a>
									<a href="javascript:;" class="remove" data-original-title="" title="">
									</a>
								</div>
							</div>
							<div class="portlet-body">
								<form method="post" action="questionaire_save.php">
								<table class="table table-striped table-bordered table-hover dataTable no-footer" id="" role="grid" aria-describedby="sample_2_info">
								<tbody>
<?php
	include('../includes/dbcon.php');	
	$query=mysqli_query($con,"select * from category order by category_id")or die(mysqli_error($con));
			$i=1;
			while($row=mysqli_fetch_array($query))
			{
				$cid=$row['category_id'];
			
?>	
								<tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
										 <?php echo $row['category'];?>
									</th>
									<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
										 YES
									</th>
									<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
										 NO
									</th>
								</tr>
<?php
		$query1=mysqli_query($con,"select * from question where category_id='$cid'")or die(mysqli_error($con));
		
			while($row1=mysqli_fetch_array($query1))
			{
				$qid=$row1['question_id'];
			
?>		<input type="hidden" name="qid[]" value="<?php echo $qid;?>">
								<tr role="row" class="even">
									<td class="sorting_1">
										 <?php echo $i;?>
									</td>
									<td>
										 <?php echo $row1['question'];?>
									</td>
									<td>
										
										<div class="md-radio">
											<input type="radio" id="<?php echo $qid;?>1" name="answer<?php echo $qid;?>" class="md-radiobtn" value="yes" checked>
											<label for="<?php echo $qid;?>1">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											</label>
										</div>
										
									</td>
									<td>
									
										<div class="md-radio">
											<input type="radio" id="<?php echo $qid;?>2" name="answer<?php echo $qid;?>" class="md-radiobtn" value="no">
											<label for="<?php echo $qid;?>2">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											</label>
										</div>
										 
									</td>
								</tr>									
<?php $i++;}}?>
								
								
								</tbody>
								</table>
								<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-9 col-md-10">
												<button type="button" class="btn default">Cancel</button>
												<button type="submit" class="btn blue">Submit</button>
											</div>
										</div>
									</div>
							</form>	
							</div>
						</div>
						
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?php include('footer.php');?>
	<!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->

<?php include('script.php');?>
<script>
	  jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Demo.init(); // init demo features
		 ComponentsPickers.init();
		 ComponentsDropdowns.init();
		 TableAdvanced.init();
      });
      
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>