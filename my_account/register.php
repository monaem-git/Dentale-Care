<?php
require_once("../requires/functions.php");
require_once("../requires/datasource.php");
require_once("../requires/config.php");

if (!isLoggedIn()) {
} else {
    redirectTo("../connected/index.php");
}

// check to see if the register information input was previously submitted
// if so, display the submitted information, otherwise display blank inputs

?>


<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Dental Care</title>
        <link rel="icon" type="image/png" href="../wp-content/uploads/2016/05/guaranteed.png" > 


    <!-- Bootstrap -->
	<script src="js/pace.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700,400|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<link href="css/theme-loading-bar.css" rel="stylesheet" />

  </head>
  <body>
	<div class="container" id="container" style="display:none;">
		<header>
			<!-- Main comapny header -->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			  <div class="container">
				<div class="navbar-header">
				  <a class="navbar-brand top-navbar-brand" href="#"><img src="images/logo2.png"/> DentalCare</a>
				</div>
				<ul class="nav navbar-nav navbar-right bigger-130 hidden-xs">
					<li><a href="#"><i class="fa fa-google"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				</ul>
			  </div>
			</nav>
		</header>
		<section id="form">
			<div class="container">    
				<div id="registertext" class="mainbox col-xs-12 col-sm-6">  
					<div class="jumbotron black-alpha-90 animated fadeInLeft">
						<h2>Be a member of DentalCare</h2>
						<p>You are just one step away from entering an awesome world.</p>

					</div>
				</div>
				<div id="loginbox" class="mainbox col-xs-12 col-sm-6 animated zoomInDown">                    
					<div class="panel white-alpha-90" >
						<div class="panel-heading">
							<div class="panel-title text-center"><h2>Sign In to <span class="text-primary">DentalCare</span></h2></div>
						</div>     
						<div class="panel-body" >
							<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
								<form id="loginform" class="form-horizontal" enctype="multipart/form-data"  method="post">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input id="fisrtname" type="text" class="form-control" name="firstname" value="" placeholder="Fist name" required>
								</div>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input id="lastname" type="text" class="form-control" name="lastname" value="" placeholder="Last name" required>
								</div>
								<div class="input-group col-xs-6">
									<span class="input-group-addon"><i class="fa fa-male"></i></span>
									<span class="input-group-addon"> Male </span>
									<input id="login-username" type="radio" class="form-control" name="sexe" value="male" checked >
								</div>
								<div class="input-group col-xs-6">
									<span class="input-group-addon"><i class="fa fa-female"></i></span>
									<span class="input-group-addon">Female </span>
									<input id="login-username" type="radio" class="form-control" name="sexe" value="female">
								</div>
								<div class="input-group col-xs-12  ">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<input id="dob" type="date" class="form-control" name="dob" placeholder="Date of Birth" required>
								</div>
								<div class="input-group col-xs-12  ">
									<span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
									<input id="adress" type="text" class="form-control" name="adress" placeholder="Residential/Permanent Address" required>
								</div>
                                    <div class="input-group col-xs-12  ">
									<span class="input-group-addon"><i class="fa fa-picture-o"></i></span>
                                        <span class="input-group-addon">Profile Picture </span>
									<input id="profilephoto" type="file" class="form-control" name="profilephoto"  required>
								</div>
								<div class="input-group col-xs-12">
									<span class="input-group-addon">@</span>
									<input id="login-username" type="email" class="form-control" name="email" value="" placeholder="email" required>
								</div>
                                <div class="input-group col-xs-12">
									<span class="input-group-addon"><i class="fa fa-phone"></i></span>
									<input id="login-phone" type="number" class="form-control" name="phone" value="" placeholder="Phone number" required>
								</div>
								<div class="input-group col-xs-6">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
								</div>
								<div class="input-group col-xs-6">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input id="login-password" type="password" class="form-control" name="cpassword" placeholder="Confirm your Password" required>
								</div>
								<div class="input-group  ">
									<span class="input-group-addon"><i class="fa fa-file-text"></i></span>
									<textarea name="notes" class="textarea" placeholder="Notes"></textarea>
								</div>
								
								
								<div class="input-group col-xs-12 text-center login-action">
								  <div class="checkbox">
									<label>
									  <input id="login-remember" type="checkbox" name="remember" value="1" style="margin-top: 10px;"> I agree to terms and conditions &nbsp;
									  <input type="submit" class="btn btn-succes" name="registersubmit" value="Register" />
									</label>
								  </div>
								</div>
								<div style="margin-top:10px" class="form-group">
									<div class="col-sm-12 controls">
									  
									</div>
								</div>
							</form>     
                            
                            
                            <?php
            // if was submitted from the register button, validate the register
            // information and add a new user to the database
            
            
            
            if (isset($_POST["registersubmit"])) {
                
                $firstName =$_POST["firstname"];
                $lastName = $_POST["lastname"];
                $sexe = $_POST["sexe"];
                $dob = $_POST["dob"];
                $adress =$_POST["adress"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $password =$_POST["password"];
                $confirmpassword =$_POST["cpassword"];
                $notes =$_POST["notes"];
                $ajour='20'.date('y').'-'.date('m').'-'.date('d');

                
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
                        <script > alert("Error: User already exis")</script><?php
                    } else {
                        
                        $content_dir = 'profile_photos/'; // dossier où sera déplacé le fichier

                $tmp_file = $_FILES['profilephoto']['tmp_name'];

                if( !is_uploaded_file($tmp_file) )
                    {
                        ?>
                        <script > alert("Le fichier est introuvable")</script><?php
                        
                    }

                // on vérifie maintenant l'extension
                $type_file = $_FILES['profilephoto']['type'];

                if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
                    {
                        ?>
                        <script > alert("Le fichier n'est pas une image")</script><?php
                    }
                
                // on copie le fichier dans le dossier de destination
   
                $name_file = md5(uniqid(rand(), true)).'.png';

                if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
                    {
                        ?>
                        <script > alert("Impossible de copier le fichier")</script><?php
                    }
                        
                        $salt = "@|-°+==00001ddQ";
                        $password_cry =  md5( $password . $salt . $email .  $salt . $email . $email  );
                        DataSource::createUser($firstName,$lastName, 
                                $sexe,'patient', '', $dob, $adress, $email,$phone, $password_cry , $notes,$name_file,$ajour);
                                ?>
                        <script > alert("regiter succesful")</script><?php
                        $_SESSION["currentUser"] = $email;
                        $_SESSION["pofilePic"] = $name_file;
                        $_SESSION["currentName"] = $firstName  ;                
                        redirectTo("../connected/index.php");

                    }
                }
            }
            closeConnection();            
            ?>
                            
                            
						</div>                     
					</div>  
				</div>
			</div>
		</section>
		<footer>
			<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
			  <div class="container text-center">
				<div class="footer-content">
				  Already registered? <a href="login.php" class="btn btn-primary"> Sign In </a> or
                                      <a href="../index.php" class="btn btn-success"> Back to Dental Care </a>
				</div>
			  </div><!-- /.container-fluid -->
			</nav>
		</footer>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.backstretch.min.js"></script>
	<script>
		Pace.on('hide', function(){
		  $("#container").fadeIn('1000');
		  $.backstretch([
				"images/dental-photo-1.jpg",
				"images/dental-photo-2.jpg",
				"images/dental-photo-3.jpg",
				"images/dental-photo-4.jpg",
				"images/dental-photo-5.jpg"
			], {duration: 2500, fade: 1000});
		});		
	</script>
  </body>

</html>