<?php include 'session.php';?>
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
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-12 col-sm-12">
						<!-- BEGIN PORTLET-->
						<div class="portlet light calendar ">
							<div class="portlet-title ">
								<div class="caption">
									<i class="icon-calendar font-green-sharp"></i>
									<span class="caption-subject font-green-sharp bold uppercase">Calendar</span>
								</div>
							</div>
							<div class="portlet-body">
								<div id="calendar" class="fc fc-ltr fc-unthemed"><div class="fc-toolbar"><div class="fc-left"><h2>February 2017</h2></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default"><span class="fc-icon fc-icon-right-single-arrow"></span></button><button type="button" class="fc-today-button fc-button fc-state-default fc-state-disabled" disabled="disabled">today</button><button type="button" class="fc-month-button fc-button fc-state-default fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view"><table><thead><tr><td class="fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun">Sun</th><th class="fc-day-header fc-widget-header fc-mon">Mon</th><th class="fc-day-header fc-widget-header fc-tue">Tue</th><th class="fc-day-header fc-widget-header fc-wed">Wed</th><th class="fc-day-header fc-widget-header fc-thu">Thu</th><th class="fc-day-header fc-widget-header fc-fri">Fri</th><th class="fc-day-header fc-widget-header fc-sat">Sat</th></tr></thead></table></div></td></tr></thead><tbody><tr><td class="fc-widget-content"><div class="fc-day-grid-container"><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2017-01-29"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2017-01-30"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2017-01-31"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2017-02-01"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2017-02-02"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-02-03"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2017-02-04"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2017-01-29">29</td><td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2017-01-30">30</td><td class="fc-day-number fc-tue fc-other-month fc-past" data-date="2017-01-31">31</td><td class="fc-day-number fc-wed fc-past" data-date="2017-02-01">1</td><td class="fc-day-number fc-thu fc-past" data-date="2017-02-02">2</td><td class="fc-day-number fc-fri fc-past" data-date="2017-02-03">3</td><td class="fc-day-number fc-sat fc-past" data-date="2017-02-04">4</td></tr></thead><tbody><tr><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#F8CB00"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">All Day</span></div></a></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2017-02-05"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2017-02-06"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2017-02-07"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2017-02-08"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2017-02-09"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-02-10"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2017-02-11"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2017-02-05">5</td><td class="fc-day-number fc-mon fc-past" data-date="2017-02-06">6</td><td class="fc-day-number fc-tue fc-past" data-date="2017-02-07">7</td><td class="fc-day-number fc-wed fc-past" data-date="2017-02-08">8</td><td class="fc-day-number fc-thu fc-past" data-date="2017-02-09">9</td><td class="fc-day-number fc-fri fc-past" data-date="2017-02-10">10</td><td class="fc-day-number fc-sat fc-past" data-date="2017-02-11">11</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2017-02-12"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2017-02-13"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2017-02-14"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2017-02-15"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2017-02-16"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-02-17"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2017-02-18"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2017-02-12">12</td><td class="fc-day-number fc-mon fc-past" data-date="2017-02-13">13</td><td class="fc-day-number fc-tue fc-past" data-date="2017-02-14">14</td><td class="fc-day-number fc-wed fc-past" data-date="2017-02-15">15</td><td class="fc-day-number fc-thu fc-past" data-date="2017-02-16">16</td><td class="fc-day-number fc-fri fc-past" data-date="2017-02-17">17</td><td class="fc-day-number fc-sat fc-past" data-date="2017-02-18">18</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2017-02-19"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2017-02-20"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2017-02-21"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2017-02-22"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2017-02-23"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-02-24"></td><td class="fc-day fc-widget-content fc-sat fc-today fc-state-highlight" data-date="2017-02-25"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2017-02-19">19</td><td class="fc-day-number fc-mon fc-past" data-date="2017-02-20">20</td><td class="fc-day-number fc-tue fc-past" data-date="2017-02-21">21</td><td class="fc-day-number fc-wed fc-past" data-date="2017-02-22">22</td><td class="fc-day-number fc-thu fc-past" data-date="2017-02-23">23</td><td class="fc-day-number fc-fri fc-past" data-date="2017-02-24">24</td><td class="fc-day-number fc-sat fc-today fc-state-highlight" data-date="2017-02-25">25</td></tr></thead><tbody><tr><td rowspan="2"></td><td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#89C4F4"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Long Event</span></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#95a5a6"><div class="fc-content"><span class="fc-time">2p</span> <span class="fc-title">Lunch</span></div></a></td></tr><tr><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#F3565D"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2017-02-26"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2017-02-27"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2017-02-28"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2017-03-01"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2017-03-02"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2017-03-03"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2017-03-04"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2017-02-26">26</td><td class="fc-day-number fc-mon fc-future" data-date="2017-02-27">27</td><td class="fc-day-number fc-tue fc-future" data-date="2017-02-28">28</td><td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2017-03-01">1</td><td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2017-03-02">2</td><td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2017-03-03">3</td><td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2017-03-04">4</td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#9b59b6"><div class="fc-content"><span class="fc-time">7p</span> <span class="fc-title">Birthday</span></div></a></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" href="http://google.com/" style="background-color:#F8CB00"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Click for Google</span></div></a></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#1bbc9b"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2017-03-05"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2017-03-06"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2017-03-07"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2017-03-08"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2017-03-09"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2017-03-10"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2017-03-11"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-other-month fc-future" data-date="2017-03-05">5</td><td class="fc-day-number fc-mon fc-other-month fc-future" data-date="2017-03-06">6</td><td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2017-03-07">7</td><td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2017-03-08">8</td><td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2017-03-09">9</td><td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2017-03-10">10</td><td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2017-03-11">11</td></tr></thead><tbody><tr><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div>
								</div>
							</div>
						</div>
						<!-- END PORTLET-->
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
	 $("#status").click(function(){
        $(".hideme").toggle('slow');
      });
      jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Demo.init(); // init demo features
		 $(".hideme").hide('slow');
		 ComponentsPickers.init();
		 ComponentsDropdowns.init();
		 Index.initCalendar(); // init index page's custom scripts
      });
      
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>