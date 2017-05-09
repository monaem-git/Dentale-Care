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

<!-- Mirrored from superhero.phoonio.com/v1-2/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2016 00:57:13 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>User Profile - Dental Care</title>
    <link rel="icon" type="image/png" href="../wp-content/uploads/2016/05/guaranteed.png" >
	
	<!-- bootstrap -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet" />

	<!-- libraries -->
	<link href="css/libs/font-awesome.css" type="text/css" rel="stylesheet" />

	<!-- global styles -->
	<link rel="stylesheet" type="text/css" href="css/compiled/layout.css">
	<link rel="stylesheet" type="text/css" href="css/compiled/elements.css">

	<!-- this page specific styles -->

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
							<li class="active" >
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
                        
                        
                        <?php
                // if was submitted from the log in button, hash the password as md5
                // 128 bit format, then compare the username and password in the database
                // if match, log the user in, else display the error
                        
                    $selection = "id = '{$_GET["id"]}' ; ";
                    $result = DataSource::getAppointment($selection);
                    $row = $result->fetch_assoc(); ?>

 
						<h1>Appointment Profile</h1>
						<div class="row" id="user-profile">
							<div class="col-lg-3 col-md-4 col-sm-4">
								<div class="main-box clearfix">

									<img src="../../wp-content/uploads/2016/05/Appointment-logo.jpg" width="159" height="159" alt="" class="profile-img img-responsive center-block" />
                                    
                                   
									<div class="profile-details">

									</div>
									
									<div class="profile-message-btn center-block text-center">

									</div>
								</div>
							</div>
							
							<div class="col-lg-9 col-md-8 col-sm-8">
								<div class="main-box clearfix">
									<div class="profile-header">
										<h3><span>Appointment info</span></h3>
									</div>
									
									<div class="row profile-user-info">
										<div class="col-sm-8">
											<div class="profile-user-details clearfix">
												<div class="profile-user-details-label">
													First Name
												</div>
												<div class="profile-user-details-value">
													<?php echo $row["firstName"] ; ?>
												</div>
											</div>
											<div class="profile-user-details clearfix">
												<div class="profile-user-details-label">
													Last Name
												</div>
												<div class="profile-user-details-value">
													<?php echo $row["lastName"] ; ?>
												</div>
											</div>
											<div class="profile-user-details clearfix">
												<div class="profile-user-details-label">
													Gender
												</div>
												<div class="profile-user-details-value">
													<?php echo $row["gender"] ; ?>
												</div>
											</div>

											<div class="profile-user-details clearfix">
												<div class="profile-user-details-label">
													Country
												</div>
												<div class="profile-user-details-value">
													<?php echo $row["country"] ; ?>
												</div>
											</div>
											<div class="profile-user-details clearfix">
												<div class="profile-user-details-label">
													City
												</div>
												<div class="profile-user-details-value">
													<?php echo $row["city"] ; ?>
												</div>
											</div>
											<div class="profile-user-details clearfix">
												<div class="profile-user-details-label">
													Email
												</div>
												<div class="profile-user-details-value">
													<?php echo $row["client_email"] ; ?>
												</div>
											</div>
											<div class="profile-user-details clearfix">
												<div class="profile-user-details-label">
													Phone number
												</div>
												<div class="profile-user-details-value">
													   <?php echo $row["client_phone"] ; ?>
												</div>
											</div>
											<div class="profile-user-details clearfix">
												<div class="profile-user-details-label">
													Service
												</div>
												<div class="profile-user-details-value">
													<?php echo $row["service"] ; ?>
												</div>
											</div>
											<div class="profile-user-details clearfix">
												<div class="profile-user-details-label">
													Staff
												</div>
												<div class="profile-user-details-value">
													<?php echo $row["staff"] ; ?>
												</div>
											</div>
											<div class="profile-user-details clearfix">
												<div class="profile-user-details-label">
													Appointment Date
												</div>
												<div class="profile-user-details-value">
													   <?php echo $row["appointment_date"] ; ?>
												</div>
											</div><br>
											<div class="profile-user-details clearfix">
												<div class="profile-user-details-label">
													Appointment Time
												</div>
												<div class="profile-user-details-value">
													   <?php echo $row["appointment_time"] ; ?>
												</div>
											</div>
											<br>
											<div class="profile-user-details clearfix">
												<div class="profile-user-details-label">
													Notes :
												</div>
												<div class="profile-user-details-value">
													   <?php echo $row["notes"] ; ?>
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
	</div>
    
    <?php
                closeConnection();
                ?>
    
	<footer id="footer-bar">
		<p id="footer-copyright">
			&copy; 2016 DENTAL CARE BY &copy; <a href="http://www.facebook.com/abdelmonaem.gzayel" target="_blank">ABDELMONAEM GZAYEL </a>
		</p>
	</footer>
	
	<!-- global scripts -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	
	<!-- this page specific scripts -->
	<script src="js/jquery.slimscroll.min.js"></script>
	
	<!-- theme scripts -->
	<script src="js/scripts.js"></script>
	
	<!-- this page specific inline scripts -->
	<script>
	$(document).ready(function() {
		$('.conversation-inner').slimScroll({
	        height: '340px'
	    });
	});
	</script>
</body>

<!-- Mirrored from superhero.phoonio.com/v1-2/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2016 00:57:14 GMT -->
</html>