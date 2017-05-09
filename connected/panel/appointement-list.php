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

		<title>Appointement List - Dental Care</title>
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
							<li class="active">
								<a href="#" class="dropdown-toggle">
									<i class="fa fa-plus-circle"></i>
									<span>Appointement </span>
									<i class="fa fa-chevron-circle-down drop-icon"></i>
								</a>
								<ul class="submenu">
									<li>
										<a href="new-user.php?position=doctor">
											Add appointement
										</a>
									</li>
									<li>
										<a href="appointement-list.php?confirmed=1">
											Appointemet Confirmed
										</a>
									</li>
									<li ">
										<a href="appointement-list.php?confirmed=0">
											Appointemet Not Confirmed
										</a>
									</li>
									<li>
										<a href="appointement-list.php?confirmed=2">
											Appointement Cancelled
										</a>
									</li>
								</ul>

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
								<div class="main-box clearfix">
									<div class="clearfix">
										<h2 class="pull-left">Non Confirmed appointment</h2>
										
										<div class="filter-block pull-right">
											<div class="form-group pull-left">
												<input type="text" class="form-control" placeholder="Search...">
												<i class="fa fa-search search-icon"></i>
											</div>
											
											<a href="#" class="btn btn-primary pull-right">
												<i class="fa fa-eye fa-lg"></i> View all orders
											</a>
										</div>
									</div>
									
									<div class="table-responsive clearfix">
										<table class="table table-hover">
											<thead>
												<tr>
													<th><a href="#"><span>Order ID</span></a></th>
													<th><a href="#" class="desc"><span>Date</span></a></th>
													<th><a href="#" class="asc"><span>Customer</span></a></th>
													<th class="text-center"><span>Status</span></th>
													<th class="text-right"><span>Price</span></th>
													<th>&nbsp;</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<a href="#">#8002</a>
													</td>
													<td>
														2013/08/08
													</td>
													<td>
														<a href="#">Robert De Niro</a>
													</td>
													<td class="text-center">
														<span class="label label-success">Completed</span>
													</td>
													<td class="text-right">
														&dollar; 825.50
													</td>
													<td class="text-center" style="width: 15%;">
														<a href="#" class="table-link">
															<span class="fa-stack">
																<i class="fa fa-square fa-stack-2x"></i>
																<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
															</span>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">#5832</a>
													</td>
													<td>
														2013/08/08
													</td>
													<td>
														<a href="#">John Wayne</a>
													</td>
													<td class="text-center">
														<span class="label label-warning">On hold</span>
													</td>
													<td class="text-right">
														&dollar; 923.93
													</td>
													<td class="text-center" style="width: 15%;">
														<a href="#" class="table-link">
															<span class="fa-stack">
																<i class="fa fa-square fa-stack-2x"></i>
																<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
															</span>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">#2547</a>
													</td>
													<td>
														2013/08/08
													</td>
													<td>
														<a href="#">Anthony Hopkins</a>
													</td>
													<td class="text-center">
														<span class="label label-info">Pending</span>
													</td>
													<td class="text-right">
														&dollar; 1.625.50
													</td>
													<td class="text-center" style="width: 15%;">
														<a href="#" class="table-link">
															<span class="fa-stack">
																<i class="fa fa-square fa-stack-2x"></i>
																<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
															</span>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">#9274</a>
													</td>
													<td>
														2013/08/08
													</td>
													<td>
														<a href="#">Charles Chaplin</a>
													</td>
													<td class="text-center">
														<span class="label label-danger">Cancelled</span>
													</td>
													<td class="text-right">
														&dollar; 35.34
													</td>
													<td class="text-center" style="width: 15%;">
														<a href="#" class="table-link">
															<span class="fa-stack">
																<i class="fa fa-square fa-stack-2x"></i>
																<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
															</span>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">#8463</a>
													</td>
													<td>
														2013/08/08
													</td>
													<td>
														<a href="#">Gary Cooper</a>
													</td>
													<td class="text-center">
														<span class="label label-success">Completed</span>
													</td>
													<td class="text-right">
														&dollar; 34.199.99
													</td>
													<td class="text-center" style="width: 15%;">
														<a href="#" class="table-link">
															<span class="fa-stack">
																<i class="fa fa-square fa-stack-2x"></i>
																<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
															</span>
														</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<ul class="pagination pull-right">
										<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
										<li><a href="#">1</a></li>
										<li class="active"><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
									</ul>
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