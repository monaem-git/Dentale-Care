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

<!-- Mirrored from superhero.phoonio.com/v1-2/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2016 00:57:22 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>New user - Dental Care</title>
    <link rel="icon" type="image/png" href="../wp-content/uploads/2016/05/guaranteed.png" >
	
	<!-- bootstrap -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet" />

	<!-- libraries -->
	<link href="css/libs/font-awesome.css" type="text/css" rel="stylesheet" />

	<!-- global styles -->
	<link rel="stylesheet" type="text/css" href="css/compiled/layout.css">
	<link rel="stylesheet" type="text/css" href="css/compiled/elements.css">

	<!-- this page specific styles -->
	<link rel="stylesheet" href="css/libs/datepicker.css" type="text/css" />
	<link rel="stylesheet" href="css/libs/daterangepicker.css" type="text/css" />
	<link rel="stylesheet" href="css/libs/bootstrap-timepicker.css" type="text/css" />
	<link rel="stylesheet" href="css/libs/select2.css" type="text/css" />

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
							<li >
								<a href="index.php">
									<i class="fa fa-dashboard"></i>
									<span>Dashboard</span>
								</a>
							</li>
							<li <?php if ($_GET['position'] == 'patient') { echo 'class="active"';} ?> >
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
                            <li <?php if ($_GET['position'] == 'doctor') { echo 'class="active"';} ?>>
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
					
						<h1>Edit profile</h1>
					

						<div class="row">
							<div class="col-lg-12">
								<div class="main-box">
									<h2>Edit Profile</h2>
									<form class="form-horizontal" method="post" role="form">
										<div class="form-group">
											<label for="firstName" class="col-lg-2 control-label">First Name</label>
											<div class="col-lg-10">
												<input type="text" name="firstname" class="form-control" id="firstName" placeholder="First Name" required>
											</div>
										</div>
                                        <div class="form-group">
											<label for="lastName" class="col-lg-2 control-label">Last Name</label>
											<div class="col-lg-10">
												<input type="text" name="lastname" class="form-control" id="lastName" placeholder="Lastt Name" required>
											</div>
										</div>
										<div class="form-group">
											<label for="sexe" class="col-lg-2 control-label">sexe</label>
											<div class="col-lg-10">
												<select name="sexe" class="form-control" id="sexe" ><option value="male">male</option><option value ="female">female</option></select> 
											</div>
										</div>
										<?php
										if ($_GET['position'] == 'doctor'){
											echo '
										
										<div class="form-group">
											<label for="speciality" class="col-lg-2 control-label">speciality</label>
											<div class="col-lg-10">
												<select name="speciality" class="form-control" id="speciality" >
												<option value = "CHIEF CONSULTANT">CHIEF CONSULTANT</option>
												<option value = "RESTORATIVE DENTISTRY">RESTORATIVE DENTISTRY</option>
												<option value = "DENTAL IMPLANT SURGEON">DENTAL IMPLANT SURGEON</option>
												<option value = "DENTAL ASSISTANT">DENTAL ASSISTANT</option>
												<option value = "ORTHODONTIST">ORTHODONTIST</option>
												<option value = "DENTAL HYGIENIST">DENTAL HYGIENIST</option>
												></select> 
											</div>
										</div>' ;}
										?>
                                        <div class="form-group">
											<label for="dob" class="col-lg-2 control-label">Date of Birth</label>
											<div class="col-lg-10">
                                            <div class="input-group">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														<input type="date" class="form-control"  name="dob" placeholder="Date of Birth" required>
													</div>											</div>
										</div>
                                        <div class="form-group">
											<label for="adress" class="col-lg-2 control-label"> Address</label>
											<div class="col-lg-10">
												<input type="text" name="adress" class="form-control" id="adress" placeholder="adress" required>
											</div>
										</div>
										<div class="form-group">
											<label for="email" class="col-lg-2 control-label"> Email</label>
											<div class="col-lg-10">
												<input type="email" name="email" class="form-control" id="email" placeholder="email" required>
											</div>
										</div>
										<div class="form-group">
											<label for="phone" class="col-lg-2 control-label"> Phone number</label>
											<div class="col-lg-10">
												<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone number" required>
											</div>
										</div>
										<div class="form-group">
											<label for="password" class="col-lg-2 control-label">Password</label>
											<div class="col-lg-10">
												<input type="password" name="password" class="form-control" id="password" placeholder="Password" required >
											</div>
										</div>
										<div class="form-group">
											<label for="cpassword" class="col-lg-2 control-label">Confirm your Password</label>
											<div class="col-lg-10"> 
												<input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Password" required >
											</div>
										</div>
                                        <div class="form-group">
											<label for="notes" class="col-lg-2 control-label"> Notes</label>
											<div class="col-lg-10">
												<input type="text" name="notes" class="form-control" id="notes" placeholder="Notes" >
											</div>
										</div>
                                        <div class="form-group">
											<div class="col-lg-offset-2 col-lg-10">
												<input type="submit"  class="btn btn-success" name="editsubmit" value="Create">
											</div>
										</div>
                                        
                                        <?php
            // if was submitted from the register button, validate the register
            // information and add a new user to the database
            
            
            
            if (isset($_POST["editsubmit"])) {
                
                $firstName =$_POST["firstname"];
                $lastName = $_POST["lastname"];
                $sexe = $_POST["sexe"];
                $dob = $_POST["dob"];
                $position = $_GET['position'];
                if ($_GET['position'] == 'doctor') {
                $speciality = $_POST["speciality"];} else {$speciality = '';}
                $adress =$_POST["adress"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $password =$_POST["password"];
                $confirmpassword =$_POST["cpassword"];
                $notes =$_POST["notes"];
                $ajour='20'.date('y').'-'.date('m').'-'.date('d');
                $name_file="user-logo";

                
                if (strlen($password) < 5) {
                    ?>
                        <script > alert("Error: password must be at least 5 characters")</script><?php
                    
                } else if ($password != $confirmpassword) {
                    ?>
                        <script > alert("Error: Password do not match")</script><?php
                    
                } else {
                    $selection = "email = '{$email}';";
                    $result = DataSource::getUser($selection);
                    $row = $result->fetch_assoc();
                    if ($row != NULL) {
                        ?>
                        <script > alert("Error: User already exist")</script><?php
                    } else {
                        
                        $salt = "@|-°+==00001ddQ";
                        $password_cry =  md5( $password . $salt . $email .  $salt . $email . $email  );
                        DataSource::createUser($firstName,$lastName, 
                                $sexe, $position, $speciality, $dob, $adress, $email,$phone, $password_cry , $notes,$name_file,$ajour);
                                ?>
                        <script > alert("regiter succesful")</script><?php

                    }
                }
            }
            closeConnection();            
            ?>
			
                                        
                                        

											<div class="row">
												<div class="form-group col-md-12">
													<label for="timepicker">Time picker</label>
													<div class="input-group input-append bootstrap-timepicker">
														<input type="text" class="form-control" id="timepicker">
														<span class="add-on input-group-addon"><i class="fa fa-clock-o"></i></span>
													</div>
												</div>
											</div>

										
									</form>									
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
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>
	<script src="js/bootstrap-timepicker.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/hogan.js"></script>
	<script src="js/typeahead.min.js"></script>
	<script src="js/jquery.pwstrength.js"></script>
	
	<!-- theme scripts -->
	<script src="js/scripts.js"></script>
	
	<!-- this page specific inline scripts -->
	<script>
	$(function($) {
		//tooltip init
		$('#exampleTooltip').tooltip();

		//nice select boxes
		$('#sel2').select2();
		
		$('#sel2Multi').select2({
			placeholder: 'Select a Country',
			allowClear: true
		});
	
		//masked inputs
		$("#maskedDate").mask("99/99/9999");
		$("#maskedPhone").mask("(999) 999-9999");
		$("#maskedPhoneExt").mask("(999) 999-9999? x99999");
		$("#maskedTax").mask("99-9999999");
		$("#maskedSsn").mask("999-99-9999");
		
		$("#maskedProductKey").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
		
		$.mask.definitions['~']='[+-]';
		$("#maskedEye").mask("~9.99 ~9.99 999");
	
		//datepicker
		$('#datepickerDate').datepicker({
		  format: 'mm-dd-yyyy'
		});

		$('#datepickerDateComponent').datepicker();
		
		//daterange picker
		$('#datepickerDateRange').daterangepicker();
		
		//timepicker
		$('#timepicker').timepicker({
			minuteStep: 5,
			showSeconds: true,
			showMeridian: false,
			disableFocus: false,
			showWidget: true
		}).focus(function() {
			$(this).next().trigger('click');
		});
		
		//autocomplete simple
		$('#exampleAutocompleteSimple').typeahead({                              
			prefetch: '/data/countries.json',
			limit: 10
		});
		
		//autocomplete with templating
		$('#exampleAutocomplete').typeahead({                              
			name: 'twitter-oss',                                                        
			prefetch: '/data/repos.json',                                             
			template: [                                                              
				'<p class="repo-language">{{language}}</p>',                              
				'<p class="repo-name">{{name}}</p>',                                      
				'<p class="repo-description">{{description}}</p>'                         
			].join(''),                                                                 
			engine: Hogan                                                               
		});
		
		//password strength meter
		$('#examplePwdMeter').pwstrength({
			label: '.pwdstrength-label'
		});
		
	});
	</script>
</body>

<!-- Mirrored from superhero.phoonio.com/v1-2/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2016 00:57:26 GMT -->
</html>