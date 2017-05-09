<?php
require_once("../../requires/functions.php");
require_once("../../requires/datasource.php");

if (isLoggedIn()) {
} else {
    redirectTo("../../index.php");
}

// check to see if the register information input was previously submitted
// if so, display the submitted information, otherwise display blank inputs

?>

<!DOCTYPE html>
<html>

<!-- Mirrored from superhero.phoonio.com/v1-2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2016 00:56:37 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Panel admin - Dental Care</title>
    <link rel="icon" type="image/png" href="../wp-content/uploads/2016/05/guaranteed.png" >
	
	<!-- bootstrap -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet" />

	<!-- libraries -->
	<!-- <link href="css/libs/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" /> -->
	<link href="css/libs/font-awesome.css" type="text/css" rel="stylesheet" />

	<!-- global styles -->
	<link rel="stylesheet" type="text/css" href="css/compiled/layout.css">
	<link rel="stylesheet" type="text/css" href="css/compiled/elements.css">

	<!-- this page specific styles -->
    <link rel="stylesheet" href="css/libs/fullcalendar.css" type="text/css" />
    <link rel="stylesheet" href="css/libs/fullcalendar.print.css" type="text/css" media="print" />
    <link rel="stylesheet" href="css/compiled/calendar.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/libs/morris.css" type="text/css" />
	<link rel="stylesheet" href="css/libs/daterangepicker.css" type="text/css" />
	<link rel="stylesheet" href="css/libs/jquery-jvectormap-1.2.2.css" type="text/css" />
	
	<!-- Favicon -->
	

	<!-- google font libraries -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
	<!--[if lt IE 8]>
		<link href="css/libs/font-awesome-ie7.css" type="text/css" rel="stylesheet" />
	<![endif]-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-49262924-1', 'phoonio.com');
	  ga('send', 'pageview');

	</script>
</head>
<body>
	<header class="navbar" id="header-navbar">
		<div class="container">
			<a href="index.html" id="logo" class="navbar-brand col-md-3 col-sm-3 col-xs-12">
				<img src="img/logo1.png" alt=""/> <span>Dental Care</span>
			</a>
			
			<button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="fa fa-bars"></span>
			</button>
			
			<div class="nav-no-collapse pull-right" id="header-nav">
				<ul class="nav navbar-nav pull-right">
					<li class="mobile-search">
						<a class="btn">
							<i class="fa fa-search"></i>
						</a>
						
						<div class="drowdown-search">
							<form role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search...">
									<i class="fa fa-search nav-search-icon"></i>
								</div>
							</form>
						</div>
						
					</li>
					<li class="hidden-xs">
						<a class="btn">
							<i class="fa fa-cog"></i>
						</a>
					</li>
					<li class="dropdown profile-dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="../../my_account/profile_photos/<?php   echo $_SESSION["pofilePic"]; ?>" width="35" height="35" alt=""/>
							<span class="hidden-xs"><?php echo $_SESSION["currentName"]; ?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="my-profile.php"><i class="fa fa-user"></i>Profile</a></li>
							<li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
							<li><a href="../../my_account/logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-2" id="nav-col">
				<section id="col-left">
					<div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">	
						<ul class="nav nav-pills nav-stacked">
							<li class="active">
								<a href="index.php">
									<i class="fa fa-dashboard"></i>
									<span>Dashboard</span>
								</a>
							</li>
							<li>
								<a href="#" class="dropdown-toggle">
									<i class="fa fa-users"></i>
									<span>Patients </span>
									<i class="fa fa-chevron-circle-down drop-icon"></i>
								</a>
								<ul class="submenu">
									<li>
										<a href="new-user.php?position=patient">
											Add doctors
										</a>
									</li>
									<li>
										<a href="users.php?position=patient">
											Patients list
										</a>
									</li>
								</ul>
							</li>
                            <li>
								<a href="#" class="dropdown-toggle">
									<i class="fa fa-user-md"></i>
									<span>Doctors </span>
									<i class="fa fa-chevron-circle-down drop-icon"></i>
								</a>
								<ul class="submenu">
									<li>
										<a href="new-user.php?position=doctor">
											Add doctors
										</a>
									</li>
									<li>
										<a href="users.php?position=doctor">
											Doctors list
										</a>
									</li>
								</ul>
							</li><li >
								<a href="#" class="dropdown-toggle">
									<i class="fa fa-plus-circle"></i>
									<span>Appointement </span>
									<i class="fa fa-chevron-circle-down drop-icon"></i>
								</a>
								<ul class="submenu">
									<li>
										<a href="add-appointment.php">
											Add appointment
										</a>
									</li>
									<li>
										<a href="appointments-list.php?confirmed=1">
											Appointments Confirmed
										</a>
									</li>
									<li ">
										<a href="appointments-list.php?confirmed=0">
											Appointments Not Confirmed
										</a>
									</li>
									<li>
										<a href="appointments-list.php?confirmed=2">
											Appointments Cancelled
										</a>
									</li>
									</ul>
									</li>
									<li>
										<a href="calendar.php">
											<i class="fa fa-calendar"></i>
											<span>Calendar</span>
										</a>
									</li>
						</ul>
					</div>
				</section>
			</div>
			<div class="col-md-10" id="content-wrapper">
				<div class="row">
					<div class="col-lg-12">
						
						<div class="row">
							<div class="col-lg-3 col-sm-6 col-xs-12">
								<div class="main-box infographic-box">
									<i class="fa fa-user red"></i>
									<span class="headline">Patients</span>
									<span class="value">2.562</span>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 col-xs-12">
								<div class="main-box infographic-box">
									<i class="fa fa-user-md"></i>
									<span class="headline">Doctors</span>
									<span class="value">658</span>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 col-xs-12">
								<div class="main-box infographic-box">
									<i class="fa fa-money green"></i>
									<span class="headline">Income</span>
									<span class="value">&#36;12.400</span>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 col-xs-12">
								<div class="main-box infographic-box">
									<i class="fa fa-plus-circle"></i>
									<span class="headline">Appointement</span>
									<span class="value">12.526</span>
								</div>
							</div>
						</div>

						
						
						<div class="row">
							<div class="col-md-6">
								<div class="main-box">
									<div id="calendar"></div>
								</div>
							</div>
							
							<div class="col-lg-6">
								<div class="main-box clearfix">
									
									<div class="tabs-wrapper">
										<div class="clearfix">
											<h2 class="pull-left">Recent updates</h2>
											<ul class="nav nav-tabs pull-right">
												<li class="active"><a href="#tab-users" data-toggle="tab">Patients</a></li>
												<li><a href="#tab-products" data-toggle="tab">Appointments</a></li>
												<li><a href="#tab-todo" data-toggle="tab">Todo</a></li>
											</ul>
										</div>
										<div class="tab-content">
											<div class="tab-pane fade in active" id="tab-users">
												<ul class="widget-users row">

										<?php
                                            
                                            try {
	                                               $bdd=new PDO('mysql:host=localhost;dbname=db_dentalclinic;charset=utf8','root','');
                                                } 
                                            catch (Exception $e) 
                                                {
	                                               die('Erreur: ' .$e->getMessage());
                                                }
                                            
	                                               $reponse=$bdd->query("SELECT * FROM users WHERE  position = 'patient' ORDER BY id DESC ");
                                           
                                                for ($i=0;$i<4;$i++ )
                                                { $donnees=$reponse->fetch() ;
                                           
                                           echo'
													<li class="col-md-6">
														<div class="img">
														<img src="../../my_account/profile_photos/'; echo $donnees["profilePhoto"]; echo ' " width="50" height="50" alt=""/>
														</div>
														<div class="details">
															<div class="name">
																<a href="user-profile.php?id=';echo $donnees["id"] ; echo'" >';  echo $donnees["firstName"].' '.$donnees["lastName"] ; echo'</a>
															</div>
															<div class="time">
																<i class="fa fa-clock-o"></i> registered: ';
														echo $donnees["created"] ;
                                                    echo'
															</div>
														</div>
													</li>';
                                                        
                                                    }
                                                    $reponse->closeCursor(); 
                                                    ?>
												</ul>
												<br/>
												<a href="users.php?position=patient" class="btn btn-success pull-right">View all users</a>
											</div>
											
											<div class="tab-pane fade" id="tab-products">
												<ul class="widget-products">

												<?php
                                            
                                            try {
	                                               $bdd1=new PDO('mysql:host=localhost;dbname=db_dentalclinic;charset=utf8','root','');
                                                } 
                                            catch (Exception $e1) 
                                                {
	                                               die('Erreur: ' .$e1->getMessage());
                                                }
                                            
	                                               $reponse1=$bdd1->query("SELECT * FROM appointments WHERE  confirmed = '0' ORDER BY id DESC ");
                                           
                                                 while ($donnees1=$reponse1->fetch())
                                                { 
                                           
                                           echo'
													<li>
														<a href="#">
															<span class="img">
																<img src="../../wp-content/uploads/2016/05/Appointment-logo.jpg"  width="60" height="60" alt=""/>
															</span>
															
															<span class="product clearfix">
																<span class="name">
																	';  echo $donnees1["firstName"].' '.$donnees1["lastName"] ; echo'
																</span>
																<span class="price">
																	<i class="fa fa-clock-o"></i> Reservation Date :<br>&nbsp;&nbsp;&nbsp;
																	';
														echo $donnees1["appointment_date"] ;
                                                    echo'
																</span>
																<span class="warranty">
																	<i class="fa fa-plus-circle"></i> Service: 
																	';
														echo $donnees1["service"] ;
                                                    echo'
																</span>
																<span class="price">
																	<i class="fa fa-user-md"></i>
																	 Doctor: 
																	 ';
														echo $donnees1["staff"] ;
                                                    echo'
																</span>
																
															</span>
														</a>
													</li>';

													}
                                                    $reponse1->closeCursor(); 
                                                    ?>
												</ul>
												<br/>
												<a href="#" class="btn btn-success pull-right">View all users</a>
											</div>
											
											<div class="tab-pane fade" id="tab-todo">
												<ul class="widget-todo">
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-1" />
																<label for="todo-1">
																	New products introduction <span class="label label-danger">High Priority</span>
																</label>
															</div>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-2" />
																<label for="todo-2">
																	Checking the stock <span class="label label-success">Low Priority</span>
																</label>
															</div>
														</div>
														<div class="actions">
															<a href="#" class="table-link">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="#" class="table-link danger">
																<i class="fa fa-trash-o"></i>
															</a>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-3" checked="checked" />
																<label for="todo-3">
																	Buying coffee <span class="label label-warning">Medium Priority</span>
																</label>
															</div>
														</div>
														<div class="actions">
															<a href="#" class="table-link">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="#" class="table-link danger">
																<i class="fa fa-trash-o"></i>
															</a>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-4" />
																<label for="todo-4">
																	New marketing campaign <span class="label label-success">Low Priority</span>
																</label>
															</div>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-5" />
																<label for="todo-5">
																	Calling Mom <span class="label label-warning">Medium Priority</span>
																</label>
															</div>
														</div>
														<div class="actions">
															<a href="#" class="table-link badge">
																<i class="fa fa-cog"></i>
															</a>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-6" />
																<label for="todo-6">
																	Ryan's birthday <span class="label label-danger">High Priority</span>
																</label>
															</div>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-7" />
																<label for="todo-7">
																	Printing new flyer <span class="label label-success">Low Priority</span>
																</label>
															</div>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-8" />
																<label for="todo-8">
																	Mila and Ryan wedding <span class="label label-danger">High Priority</span>
																</label>
															</div>
														</div>
													</li>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo-9" />
																<label for="todo-9">
																	Checking the stock <span class="label label-success">Low Priority</span>
																</label>
															</div>
														</div>
													</li>
												</ul>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer id="footer-bar">
		<p id="footer-copyright">
			&copy; 2016 DENTAL CARE BY &copy; <a href="http://www.facebook.com/abdelmonaem.gzayel" target="_blank">ABDELMONAEM GZAYEL </a>
		</p>
	</footer>
	
	<!-- global scripts -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	
	<!-- this page specific scripts -->
	<script src="js/jquery-ui.custom.min.js"></script>
	<script src="js/fullcalendar.min.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
	<script src="js/raphael-min.js"></script>
	<script src="js/morris.min.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-merc-en.js"></script>
	<script src="js/gdp-data.js"></script>
	<script src="js/flot/jquery.flot.js"></script>
	<script src="js/flot/jquery.flot.min.js"></script>
	<script src="js/flot/jquery.flot.pie.min.js"></script>
	<script src="js/flot/jquery.flot.stack.min.js"></script>
	<script src="js/flot/jquery.flot.resize.min.js"></script>
	<script src="js/flot/jquery.flot.time.min.js"></script>
	<script src="js/flot/jquery.flot.threshold.js"></script>
	
	<!-- theme scripts -->
	<script src="js/scripts.js"></script>
	
	<!-- this page specific inline scripts -->
	<script>
	$(document).ready(function() {
		
		/* initialize the external events
		-----------------------------------------------------------------*/
	
		$('#external-events div.external-event').each(function() {
		
			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
				title: $.trim($(this).text()) // use the element's text as the event title
			};
			
			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject', eventObject);
			
			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});
			
		});
	
	
		/* initialize the calendar
		-----------------------------------------------------------------*/
		
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

		var calendar = $('#calendar').fullCalendar({
			header: {
				left: '',
				center: 'title',
				right: 'prev,next'
			},
			selectable: true,
			selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			editable: true,
			droppable: true, // this allows things to be dropped onto the calendar !!!
			drop: function(date, allDay) { // this function is called when something is dropped
			
				// retrieve the dropped element's stored Event Object
				var originalEventObject = $(this).data('eventObject');
				
				// we need to copy it, so that multiple events don't have a reference to the same object
				var copiedEventObject = $.extend({}, originalEventObject);
				
				// assign it the date that was reported
				copiedEventObject.start = date;
				copiedEventObject.allDay = allDay;
				
				// copy label class from the event object
				var labelClass = $(this).data('eventclass');
				
				if (labelClass) {
					copiedEventObject.className = labelClass;
				}
				
				// render the event on the calendar
				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
				$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
				
				// is the "remove after drop" checkbox checked?
				if ($('#drop-remove').is(':checked')) {
					// if so, remove the element from the "Draggable Events" list
					$(this).remove();
				}
				
			},
			buttonText: {
				prev: '<i class="fa fa-chevron-left"></i>',
				next: '<i class="fa fa-chevron-right"></i>'
			},
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1),
					className: 'label-success'
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false,
					className: 'label-danger'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false,
					className: 'label-info'
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false,
					className: 'label-success'
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false,
					className: 'label-info'
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/',
					className: 'label-danger'
				}
			]
		});
		
	    $('.conversation-inner').slimScroll({
	        height: '340px',
	        alwaysVisible: false,
	        railVisible: true,
	        wheelStep: 5,
	        allowPageScroll: false
	    });
	    
	    
	    //CHARTS
		graphLine = Morris.Area({
			element: 'graph-line',
			data: [
				{period: '2014-01-01', iphone: 2666, ipad: null, itouch: 2647},
				{period: '2014-01-02', iphone: 9778, ipad: 2294, itouch: 2441},
				{period: '2014-01-03', iphone: 4912, ipad: 1969, itouch: 2501},
				{period: '2014-01-04', iphone: 3767, ipad: 3597, itouch: 5689},
				{period: '2014-01-05', iphone: 6810, ipad: 1914, itouch: 2293},
				{period: '2014-01-06', iphone: 5670, ipad: 4293, itouch: 1881},
				{period: '2014-01-07', iphone: 4820, ipad: 3795, itouch: 1588},
				{period: '2014-01-08', iphone: 15073, ipad: 5967, itouch: 5175},
				{period: '2014-01-09', iphone: 10687, ipad: 4460, itouch: 2028},
				{period: '2014-01-10', iphone: 8432, ipad: 5713, itouch: 1791}
			],
			//lineColors: ['#77ab49', '#d5ac08', '#dd504c', '#3fcfbb', '#626f70', '#8f44ad'],
			lineColors: ['#3fcfbb', '#f1c40f', '#8f44ad', '#3fcfbb', '#626f70', '#8f44ad'],
			xkey: 'period',
			ykeys: ['iphone', 'ipad', 'itouch'],
			labels: ['iPhone', 'iPad', 'iPod Touch'],
			pointSize: 3,
			hideHover: 'auto'
		});
	    
		// bar charts
		var db1 = db2 = db3 = db4 = [];
		for (var i = 0; i <= 20; i += 1) {
			db1.push([i, parseInt(Math.random() * 30)]);
		}
		var db2 = [];
		for (var i = 0; i <= 20; i += 1) {
			db2.push([i, parseInt(Math.random() * 30)]);
		}
		var db3 = [];
		for (var i = 0; i <= 20; i += 1) {
			db3.push([i, parseInt(Math.random() * 30)]);
		}
		var db4 = [];
		for (var i = 0; i <= 20; i += 1) {
			db4.push([i, parseInt(Math.random() * 30)]);
		}

		var series = new Array();
		series.push({
			data : db1,
			bars : {
				show : true,
				barWidth : 0.6,
				order : 1,
				fill: 1
			},
			threshold: { below: 0, color: '#fe635f' },
		});

		var series2 = new Array();
		series2.push({
			data : db2,
			bars : {
				show : true,
				barWidth : 0.6,
				order : 1,
				fill: 1
			},
			threshold: { below: 0, color: '#fe635f' },
		});

		var series3 = new Array();
		series3.push({
			data : db3,
			bars : {
				show : true,
				barWidth : 0.6,
				order : 1,
				fill: 1
			},
			threshold: { below: 0, color: '#fe635f' },
		});

		var series4 = new Array();
		series4.push({
			data : db4,
			bars : {
				show : true,
				barWidth : 0.6,
				order : 1,
				fill: 1
			},
			threshold: { below: 0, color: '#fe635f' },
		});

		$.plot("#graph-line-pageviews", series, {
			colors: ['#77ab49', '#f1c40f', '#8dc859', '#3fcfbb', '#8f44ad', '#7e8c8d'],
			grid: {
				tickColor: "#ddd",
				borderWidth: 0,
				show: false
			},
			shadowSize: 0
		});

		$.plot("#graph-line-visits", series2, {
			colors: ['#77ab49', '#f1c40f', '#8dc859', '#3fcfbb', '#8f44ad', '#7e8c8d'],
			grid: {
				tickColor: "#ddd",
				borderWidth: 0,
				show: false
			},
			shadowSize: 0
		});

		$.plot("#graph-line-avg-time", series3, {
			colors: ['#77ab49', '#f1c40f', '#8dc859', '#3fcfbb', '#8f44ad', '#7e8c8d'],
			grid: {
				tickColor: "#ddd",
				borderWidth: 0,
				show: false
			},
			shadowSize: 0
		});

		$.plot("#graph-line-bounce", series4, {
			colors: ['#77ab49', '#f1c40f', '#8dc859', '#3fcfbb', '#8f44ad', '#7e8c8d'],
			grid: {
				tickColor: "#ddd",
				borderWidth: 0,
				show: false
			},
			shadowSize: 0
		});
		
		graphDonut = Morris.Donut({
			element: 'hero-donut',
			data: [
				{label: 'Chrome', value: 45 },
				{label: 'Firefox', value: 30 },
				{label: 'IE 10', value: 25 }
			],
			colors: ['#fe635f', '#8dc859', '#f1c40f', '#8f44ad', '#626f70', '#8f44ad'],
			formatter: function (y) { return y + "%" }
		});
		
		$(window).smartresize(function(){
			graphLine.redraw();
			graphDonut.redraw();
		});
	    
		//DateRange
		$('#reportrange').daterangepicker({
				startDate: moment().subtract('days', 29),
				endDate: moment(),
				minDate: '01/01/2012',
				maxDate: '12/31/2014',
				dateLimit: { days: 60 },
				showDropdowns: true,
				showWeekNumbers: true,
				timePicker: false,
				timePickerIncrement: 1,
				timePicker12Hour: true,
				ranges: {
					'Today': [moment(), moment()],
					'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
					'Last 7 Days': [moment().subtract('days', 6), moment()],
					'Last 30 Days': [moment().subtract('days', 29), moment()],
					'This Month': [moment().startOf('month'), moment().endOf('month')],
					'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
				},
				opens: 'left',
				buttonClasses: ['btn btn-default'],
				applyClass: 'btn-small btn-primary',
				cancelClass: 'btn-small',
				format: 'MM/DD/YYYY',
				separator: ' to ',
				locale: {
					applyLabel: 'Submit',
					fromLabel: 'From',
					toLabel: 'To',
					customRangeLabel: 'Custom Range',
					daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
					monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
					firstDay: 1
				}	
			},
			function(start, end) {
				console.log("Callback has been called!");
				$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
			}
		);
		//Set the initial state of the picker label
		$('#reportrange span').html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

		//WORLD MAP
		$('#world-map').vectorMap({
			map: 'world_merc_en',
			backgroundColor: '#ffffff',
			zoomOnScroll: false,
			regionStyle: {
				initial: {
					fill: '#e1e1e1',
					stroke: 'none',
					"stroke-width": 0,
					"stroke-opacity": 1
				},
				hover: {
					"fill-opacity": 0.8
				},
				selected: {
					fill: '#8dc859'
				},
				selectedHover: {
				}
			},
			series: {
				regions: [{
					values: gdpData,
					scale: ['#b1fff6', '#02a794'],
					normalizeFunction: 'polynomial'
				}]
			},
			onRegionLabelShow: function(e, el, code){
				el.html(el.html()+' ('+gdpData[code]+')');
			}
		});
	});
	</script>
	
</body>

<!-- Mirrored from superhero.phoonio.com/v1-2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2016 00:57:02 GMT -->
</html>