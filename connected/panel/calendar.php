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

<!-- Mirrored from superhero.phoonio.com/v1-2/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2016 00:57:30 GMT -->
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Calendar - Dental Care</title>
    <link rel="icon" type="image/png" href="../wp-content/uploads/2016/05/guaranteed.png" >
	
    <!-- bootstrap -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />

    <!-- libraries -->
    <link href="css/libs/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="css/compiled/layout.css">
    <link rel="stylesheet" type="text/css" href="css/compiled/elements.css">

    <!-- this page specific styles -->
    <link rel="stylesheet" href="css/libs/fullcalendar.css" type="text/css" />
    <link rel="stylesheet" href="css/libs/fullcalendar.print.css" type="text/css" media="print" />
    <link rel="stylesheet" href="css/compiled/calendar.css" type="text/css" media="screen" />

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
			<a href="index.php" id="logo" class="navbar-brand col-md-3 col-sm-3 col-xs-12">
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
							<img src="../../my_account/profile_photos/<?php echo $_SESSION["pofilePic"]; ?>" width="35" height="35" alt=""/>
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
							<li>
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
											Add patient
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
											Add doctor
										</a>
									</li>
									<li>
										<a href="users.php?position=doctor">
											Doctors list
										</a>
									</li>
								</ul>
							</li>
							<li >
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
										<a href="calendar.html">
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
						<h1>Calendar</h1>
					
						<div class="row">
							<div class="col-md-3 hidden-xs hidden-sm">
								<div class="main-box" id="external-events">
									<h2>Draggable Events</h2>
									<div class="external-event label-primary" data-eventclass="label-primary">My Event 1</div>
									<div class="external-event label-danger" data-eventclass="label-danger">My Event 2</div>
									<div class="external-event label-success" data-eventclass="label-success">My Event 3</div>
									<div class="external-event label-warning" data-eventclass="label-warning">My Event 4</div>
									<div class="external-event label-info" data-eventclass="label-info">My Event 5</div>
									<div class="external-event label-default" data-eventclass="label-default">My Event 6</div>
									<div class="form-group">
										<label class="checkbox-inline">
											<input type="checkbox" id="drop-remove" value="option1"> Remove after drop
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<div class="main-box">
									<div id="calendar"></div>
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
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
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
	});
	</script>
</body>

<!-- Mirrored from superhero.phoonio.com/v1-2/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2016 00:57:30 GMT -->
</html>