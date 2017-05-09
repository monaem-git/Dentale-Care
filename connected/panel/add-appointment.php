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

		<title>Add Appointment - Dental Care</title>
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
							<li  >
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
                            <li >
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
					
						<h1>Add Appointment</h1>
					

						<div class="row">
							<div class="col-lg-12">
								<div class="main-box">
									<h2>Add Appointment</h2>
									<form class="form-horizontal" method="post" role="form">
									<div class="form-group">
											<label for="country" class="col-lg-2 control-label">Country</label>
											<div class="col-lg-10">
												<select name="country" class="form-control" id="speciality" >
												<option selected value="Tunisia">Tunisia</option> <option value="Afghanistan ">Afghanistan</option> <option value="Afrique central ">Afrique central</option> <option value="Afrique du Sud ">Afrique du Sud</option> <option value="Albanie ">Albanie</option> <option value="Algérie ">Algérie</option> <option value="Allemagne ">Allemagne</option> <option value="Andorre ">Andorre</option> <option value="Angleterre ">Angleterre</option> <option value="Angola ">Angola</option> <option value="Antigua-et-Barbuda ">Antigua-et-Barbuda</option> <option value="Arabie Saoudite ">Arabie Saoudite</option> <option value="Argentine ">Argentine</option> <option value="Armenie ">Armenie</option> <option value="Australie ">Australie</option> <option value="Autriche ">Autriche</option> <option value="Azerbaïdjan ">Azerbaïdjan</option> <option value="Bahamas ">Bahamas</option> <option value="Bahreïn ">Bahreïn</option> <option value="Bangladesh ">Bangladesh</option> <option value="Barbades ">Barbades</option> <option value="Belgique ">Belgique</option> <option value="Belize ">Belize</option> <option value="Bénin ">Bénin</option> <option value="Bhoutan ">Bhoutan</option> <option value="Biélorussie ">Biélorussie</option> <option value="Bolivie ">Bolivie</option> <option value="Bosnie-Herzégovine ">Bosnie-Herzégovine</option> <option value="Botswana ">Botswana</option> <option value="Brésil ">Brésil</option> <option value="Brunéi Darussalam ">Brunéi Darussalam</option> <option value="Bulgarie ">Bulgarie</option> <option value="Burkina-Faso ">Burkina-Faso</option> <option value="Burundi ">Burundi</option> <option value="Cambodge ">Cambodge</option> <option value="Cameroun ">Cameroun</option> <option value="Canada ">Canada</option> <option value="Cap-Vert ">Cap-Vert</option> <option value="Chili ">Chili</option> <option value="Chine ">Chine</option> <option value="Chypre ">Chypre</option> <option value="Colombie ">Colombie</option> <option value="Comores ">Comores</option> <option value="Congo ">Congo</option> <option value="Corée du Sud ">Corée du Sud</option> <option value="Costa Rica ">Costa Rica</option> <option value="Côte d'Ivoire ">Côte d'Ivoire</option> <option value="Croatie ">Croatie</option> <option value="Cuba ">Cuba</option> <option value="Danemark ">Danemark</option> <option value="Djibouti ">Djibouti</option> <option value="Egypte ">Egypte</option> <option value="Emirats arabes unis ">Emirats arabes unis</option> <option value="Equateur ">Equateur</option> <option value="Erythrée ">Erythrée</option> <option value="Espagne ">Espagne</option> <option value="Estonie ">Estonie</option> <option value="Ethiopie ">Ethiopie</option> <option value="Fidji ">Fidji</option> <option value="Finlande ">Finlande</option> <option value="France ">France</option> <option value="Gabon ">Gabon</option> <option value="Gambie ">Gambie</option> <option value="Ghana ">Ghana</option> <option value="Grèce ">Grèce</option> <option value="Grenade ">Grenade</option> <option value="Guadeloupe ">Guadeloupe</option> <option value="Guatemala ">Guatemala</option> <option value="Guinée-Bissau ">Guinée-Bissau</option> <option value="Guinée équatoriale ">Guinéeéquatoriale</option> <option value="Guyane ">Guyane</option> <option value="Haïti ">Haïti</option> <option value="Hollande ">Hollande</option> <option value="Honduras ">Honduras</option> <option value="Hongrie ">Hongrie</option> <option value="Ile Maurice ">Ile Maurice</option> <option value="Inde ">Inde</option> <option value="Indonésie ">Indonésie</option> <option value="Irak ">Irak</option> <option value="Iran ">Iran</option> <option value="Irlande ">Irlande</option> <option value="Islande ">Islande</option> <option value="Israël ">Israël</option> <option value="Italie ">Italie</option> <option value="Jamaique ">Jamaique</option> <option value="Japon ">Japon</option> <option value="Jordanie ">Jordanie</option> <option value="Kazakhstan ">Kazakhstan</option> <option value="Kenya ">Kenya</option> <option value="Koweït ">Koweït</option> <option value="Laos ">Laos</option> <option value="Lesotho ">Lesotho</option> <option value="Liban ">Liban</option> <option value="Libéria ">Libéria</option> <option value="Libye ">Libye</option> <option value="Lituanie ">Lituanie</option> <option value="Luxembourg ">Luxembourg</option> <option value="Madagascar ">Madagascar</option> <option value="Malaisie ">Malaisie</option> <option value="Malawi ">Malawi</option> <option value="Mali ">Mali</option> <option value="Malte ">Malte</option> <option value="Maroc ">Maroc</option> <option value="Martinique ">Martinique</option> <option value="Mauritanie ">Mauritanie</option> <option value="Mexique ">Mexique</option> <option value="md">Moldavie</option> <option value="Monaco ">Monaco</option> <option value="Mongolie ">Mongolie</option> <option value="Mozambique ">Mozambique</option> <option value="Myanmar ">Myanmar</option> <option value="Namibie ">Namibie</option> <option value="Nicaragua ">Nicaragua</option> <option value="Niger ">Niger</option> <option value="Norvège ">Norvège</option> <option value="Nouvelle Calédonie ">Nouvelle Calédonie</option> <option value="Nouvelle Zéland ">Nouvelle Zéland</option> <option value="Pakistan ">Pakistan</option> <option value="Panama ">Panama</option> <option value="Papouasie - Nouvelle Guinée ">Papouasie - Nouvelle Guinée</option> <option value="Paraguay ">Paraguay</option> <option value="Pérou ">Pérou</option> <option value="Philippines ">Philippines</option> <option value="Pologne ">Pologne</option> <option value="Porto Rico ">Porto Rico</option> <option value="Portugal ">Portugal</option> <option value="Qatar ">Qatar</option> <option value="République Dominicaine ">République Dominicaine</option> <option value="Roumanie ">Roumanie</option> <option value="Russie ">Russie</option> <option value="Rwanda ">Rwanda</option> <option value="Salvador ">Salvador</option> <option value="Sao Tomé-et-Principe ">Sao Tomé-et-Principe</option> <option value="Sénégal ">Sénégal</option> <option value="Sierra Leone ">Sierra Leone</option> <option value="Singapoure ">Singapoure</option> <option value="Slovénie ">Slovénie</option> <option value="Soudan ">Soudan</option> <option value="Sri Lanka ">Sri Lanka</option> <option value="Suède ">Suède</option> <option value="Suisse ">Suisse</option> <option value="Surinam ">Surinam</option> <option value="Swaziland ">Swaziland</option> <option value="Syrie ">Syrie</option> <option value="Tadjikistan ">Tadjikistan</option> <option value="Taiwan ">Taiwan</option> <option value="Tanzanie ">Tanzanie</option> <option value="Tchad ">Tchad</option> <option value="Tchéquie ">Tchéquie</option> <option value="Thaïlande ">Thaïlande</option> <option value="Togo ">Togo</option> <option value="Trinité et Tobago ">Trinité et Tobago</option> <option value="Tunisie ">Tunisia</option> <option value="Turkménistan ">Turkménistan</option> <option value="Turquie ">Turquie</option> <option value="Ukraine ">Ukraine</option> <option value="Uruguay ">Uruguay</option> <option value="USA ">USA</option> <option value="Uzbekistan ">Uzbekistan</option> <option value="Vénézuela ">Vénézuela</option> <option value="Vietnam ">Vietnam</option> <option value="Yémen ">Yémen</option> <option value="Yougoslavie ">Yougoslavie</option> <option value="Zambie ">Zambie</option> <option value="Zimbabwe ">Zimbabwe</option>
												></select> 
											</div>
										</div>
										<div class="form-group">
											<label for="city" class="col-lg-2 control-label">City</label>
											<div class="col-lg-10">
												<input type="text" name="city" class="form-control" id="city" placeholder="City" required >
											</div>
										</div>
										<div class="form-group">
											<label for="birs_appointment_service" class="col-lg-2 control-label">Service</label>
											<div class="col-lg-10">
												<select class="form-control" id="birs_appointment_service" name="service" onchange="services(this.id,'birs_appointment_staff')">
												
												<option value="Consultation">Consultation</option>
  												<option value="Cosmetic dentistry">COSMETIC DENTISTRY</option>
  												<option value="Dental bridges">DENTAL BRIDGES</option>
 												<option value="Dental crows">DENTAL CROWNS</option>  
 												<option value="Extractions of teeth">Extractions of teeth</option>
  												<option value="Gum disease">GUM DISEASE</option>  
 												<option value="Dental implant">DENTAL IMPLANT</option>
 												<option value="Root canal">ROOT CANAL</option>
 												<option value="The dental hygientist">THE DENTAL HYGIENIST</option>
												</select> 
											</div>
										</div>
										<div class="form-group">
											<label for="birs_appointment_staff" class="col-lg-2 control-label">Provider</label>
											<div class="col-lg-10">
												<select class="form-control" id="birs_appointment_staff" name="staff" >
												<option value="SERINE BEN AMMAR">SERINE BEN AMMAR</option>
   												<option value="RANIA SDIRI">RANIA SDIRI</option>
												</select> 
											</div>
										</div>
										<div class="form-group">
											<label for="dob" class="col-lg-2 control-label">Reservation Date  </label>
											<div class="col-lg-10">
                                            <div class="input-group">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														<input type="date" class="form-control"  name="appointment_date" placeholder="Date of Birth" required>
													</div>											</div>
										</div>
										<div class="form-group">
											<label for="time" class="col-lg-2 control-label">time Date  </label>
											<div class="col-lg-10">
                                            <div class="input-group">
														<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
														<input type="time" class="form-control"  name="appointment_time" placeholder="Date of Birth" required>
													</div>											</div>
										</div>
                                        <div class="form-group">
											<label for="notes" class="col-lg-2 control-label"> Notes</label>
											<div class="col-lg-10">
												<input type="text" name="notes" class="form-control" id="notes" placeholder="Notes" >
											</div>
										</div>
										<div class="form-group">
											<label for="firstName" class="col-lg-2 control-label">First Name</label>
											<div class="col-lg-10">
												<input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name" required>
											</div>
										</div>
                                        <div class="form-group">
											<label for="lastName" class="col-lg-2 control-label">Last Name</label>
											<div class="col-lg-10">
												<input type="text" name="lastName" class="form-control" id="lastName" placeholder="Lastt Name" required>
											</div>
										</div>
										<div class="form-group">
											<label for="sexe" class="col-lg-2 control-label">sexe</label>
											<div class="col-lg-10">
												<select name="gender" class="form-control" id="sexe" ><option value="male">male</option><option value ="female">female</option></select> 
											</div>
										</div>
										<div class="form-group">
											<label for="email" class="col-lg-2 control-label"> Email</label>
											<div class="col-lg-10">
												<input type="email" name="client_email" class="form-control" id="email" placeholder="email" required>
											</div>
										</div>
										<div class="form-group">
											<label for="phone" class="col-lg-2 control-label"> Phone number</label>
											<div class="col-lg-10">
												<input type="number" name="client_phone" class="form-control" id="phone" placeholder="Phone number" required>
											</div>
										</div>
                                        <div class="form-group">
											<div class="col-lg-offset-2 col-lg-10">
												<input type="submit"  class="btn btn-success" name="book_btn" value="Create">
											</div>
										</div>
                                        
                                        <?php
            // if was submitted from the register button, validate the register
            // information and add a new user to the database
            


        if (isset($_POST["book_btn"])) {
                
                $registration_date ='20'.date('y').'-'.date('m').'-'.date('d');
                $country = $_POST["country"];
                $city = $_POST["city"];
                $service = $_POST["service"];
                $staff =$_POST["staff"];
                $appointment_date = $_POST["appointment_date"];
                $appointment_time = $_POST["appointment_time"];
                $notes =$_POST["notes"];
                $firstName =$_POST["firstName"];
                $lastName =$_POST["lastName"];
                $gender =$_POST["gender"];
                $client_email =$_POST["client_email"];
                $client_phone =$_POST["client_phone"];
                

                
                 if (($appointment_date > $registration_date) ||($appointment_date == $registration_date && $appointment_time>date("H:i")))
                    
                    {
    
                        DataSource::createAppointment($registration_date, $country, $city, 
            $service, $staff, $appointment_date,$appointment_time,$notes,$firstName,$lastName,$gender,$client_email,$client_phone);
                                ?>
                        <script > alert("regiter succesful")</script><?php

                    }
        }
                
            closeConnection();            
            ?>
			
    
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
	<script>
function services(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";

	if(s1.value == "consultation"){
		var optionArray = ["SERINE BEN AMMAR|SERINE BEN AMMAR","RANIA SDIRI|RANIA SDIRI"];
	} else if(s1.value == "Cosmetic dentistry"){
		var optionArray = ["MOURAD MHIRI|MOURAD MHIRI","SAHAR HAMDI|SAHAR HAMDI","SERINE BEN AMMAR|SERINE BEN AMMAR"];
	} else if(s1.value == "Dental bridges"){
		var optionArray = ["NIDHAL CHOUCHEN |NIDHAL CHOUCHEN","MONTASSER JAMAII|MONTASSER JAMAII"];
	} else if(s1.value == "Dental crows"){
		var optionArray = ["MOHAMMED MANSSOURI|MOHAMMED MANSSOURI"];
	} else if(s1.value == "Extractions of teeth"){
		var optionArray = ["RANIA SDIRI|RANIA SDIRI","AMIR LAHWEL|AMIR LAHWEL"];
	} else if(s1.value == "Gum disease"){
		var optionArray = ["AMIR LAHWEL|AMIR LAHWEL","SERINE BEN AMMAR|SERINE BEN AMMAR"];
	} else if(s1.value == "Dental implant"){
		var optionArray = ["MOUNIR HADDADI|MOUNIR HADDADI","MOURAD MHIRI|MOURAD MHIRI"];
	} else if(s1.value == "Root canal"){
		var optionArray = ["MONTASSER JAMAII|MONTASSER JAMAII","SERINE BEN AMMAR|SERINE BEN AMMAR"];
	} else if(s1.value == "The dental hygientist"){
		var optionArray = ["AMIR LAHWEL|AMIR LAHWEL","SAHAR HAMDI|SAHAR HAMDI"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>

</body>

<!-- Mirrored from superhero.phoonio.com/v1-2/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2016 00:57:26 GMT -->
</html>