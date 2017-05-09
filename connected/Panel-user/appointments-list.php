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

<!-- Mirrored from superhero.phoonio.com/v1-2/users.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2016 00:57:14 GMT -->
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Users - Dental Care</title>
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
			<a href="../../index.php" id="logo" class="navbar-brand col-md-3 col-sm-3 col-xs-12">
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
							<li class="active" >
								<a href="#" class="dropdown-toggle">
									<i class="fa fa-plus-circle"></i>
									<span>My Appointements </span>
									<i class="fa fa-chevron-circle-down drop-icon"></i>
								</a>
								<ul class="submenu">
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
									</ul>
									</li>
						</ul>
					</div>
				</section>
			</div>
			<div class="col-md-10" id="content-wrapper">
				<div class="row">
					<div class="col-lg-12">
					
						<div class="clearfix">
							<h1 class="pull-left">Appointments</h1>
							
							<div class="pull-right top-page-ui">
								<a href="add-appointment.php" class="btn btn-primary pull-right">
									<i class="fa fa-plus-circle fa-lg"></i> Add Appointment
								</a>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-12">
								<div class="main-box clearfix">
									<div class="table-responsive">
										<table class="table user-list">
											<thead>
												<tr>
												<th></th>
													<th><span>Order ID</span></th>
													<th><span>Service</span></th>
													<th><span>Staff </span></th>
													<th><span>Appointment Date</span></th>
													<th><span>Appointment Time</span></th>
													<th><span>Fisrt Name</span></th>
													<th><span>Last Name</span></th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
												</tr>
											</thead>
                                            <?php

                                            $confirmed = $_GET["confirmed"];
                                            $email = $_SESSION["currentUser"];
                                            $ajour='20'.date('y').'-'.date('m').'-'.date('d');
                                            try {
	                                               $bdd=new PDO('mysql:host=localhost;dbname=db_dentalclinic;charset=utf8','root','');
                                                } 
                                            catch (Exception $e) 
                                                {
	                                               die('Erreur: ' .$e->getMessage());
                                                }

	                                               $reponse=$bdd->query("SELECT * FROM appointments WHERE  confirmed = '$confirmed' && client_email ='$email' &&  appointment_date >= '$ajour' ");
                                            
                                                while ($donnees=$reponse->fetch())
                                                {
                                            ?>
                                            
                                            
											<tbody><?php echo '
												<tr>
													<td>
													<img src="../../wp-content/uploads/2016/05/Appointment-logo.jpg" width="50" height="50" alt=""/>
													</td>
													<td class="text-center">
														
														<a href="#">#';  echo $donnees["id"].'</a>
													</td>
													<td>
														';
														echo $donnees["service"] ;
                                                    echo'
													</td>
													<td class="text-center">';
														echo $donnees["staff"] ;
                                                    echo'
													</td>
													<td class="text-center">';
														echo $donnees["appointment_date"] ;
                                                    echo'
													</td>
													<td class="text-center">';
														echo $donnees["appointment_time"] ;
                                                    echo'
													</td>
													<td class="text-center">';
														echo $donnees["firstName"] ;
                                                    echo'
													</td>
													<td class="text-center">';
														echo $donnees["lastName"] ;
                                                    echo'
													</td>
													<td style="width: 20%;">
														<a href="appointment-info.php?id=';echo $donnees["id"] ; echo'" class="table-link">
															<span class="fa-stack">
																<i class="fa fa-square fa-stack-2x"></i>
																<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
															</span>
														</a>';

				
														 echo '
														
														<a  id="delete_btn';echo $donnees["id"] ; echo'0" class="table-link danger" onclick="myFunction(\'delete_btn';echo $donnees["id"] ; echo'\')">
															<span class="fa-stack">
																<i class="fa fa-square fa-stack-2x"></i>
																<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
															</span>
														</a>'; 

														echo'
                                                    </td>
                                                    <td>
                                                        <form method=\'POST\' action=\'appointments-list.php?confirmed='.$_GET['confirmed'].'\'>
                                                        <button name="delete_btn';echo $donnees["id"] ; echo'" id="delete_btn';echo $donnees["id"] ; echo'"  class="btn btn-danger" style="visibility:hidden">
									                       Yes ,Cancel this Appointment ';
									                       $id1 =$donnees["id"];
                                                    if(isset($_POST['delete_btn'.$id1]))
                                                    {
                                                     
                                                        $idd =$donnees["id"];
                                                       $reponse1=$bdd->query("UPDATE appointments SET Confirmed = 2 WHERE id = '$idd'");
                                                        redirectTo('appointments-list.php?confirmed='.$_GET['confirmed']);
                                                        $reponse1->closeCursor(); 
                                                        
                                                    }
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    echo'
                                                           
								                        </a>
                                                        </form>
                                                    </td>
													
												</tr>';} ?>
												
											</tbody>
										</table>
									</div>
									<ul class="pagination pull-right">
										<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
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

	
	<!-- theme scripts -->
	<script src="js/scripts.js"></script>
    <script>
    
        function myFunction(btn) {
    var x = document.getElementById(btn);
    if (x.style.visibility === 'hidden') {
        x.style.visibility = 'visible';
    } else {
        x.style.visibility = 'hidden';
    }
}
    
    </script>
	
	<!-- this page specific inline scripts -->
	
</body>

<!-- Mirrored from superhero.phoonio.com/v1-2/users.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2016 00:57:16 GMT -->
</html>