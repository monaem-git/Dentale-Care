<?php
require_once("../requires/functions.php");
require_once("../requires/config.php");
require_once("../requires/datasource.php");

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
    <title>Login - Dental Care</title>
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
		<section id="form" class="animated fadeInDown">
			<div class="container">    
				<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
					<div class="panel white-alpha-90" >
						<div class="panel-heading">
							<div class="panel-title text-center"><h2>Sign In to <span class="text-primary">Dental Care</span></h2></div>
						</div>     
						<div class="panel-body" >
							<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
								<form id="loginform" class="form-horizontal" role="form" method="post">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input id="login-username" type="email" class="form-control" name="email" value="" placeholder="email" required>                                        
								</div>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
								</div>
								<div class="input-group col-xs-12 text-center login-action">
								  <div class="checkbox">
									<label>
									  <input id="login-remember" type="checkbox" name="autologin" value="1" style="margin-top: 10px;"> Remember me &nbsp;
                                        <input type="submit" class="btn btn-succes" name="loginsubmit" value="Login" />
									  
									</label>
								  </div>
								</div>
								<div style="margin-top:10px" class="form-group">
									<div class="col-sm-12 controls">
									  
									</div>
								</div>
							</form>     
                            
                            
                            <?php
                // if was submitted from the log in button, hash the password as md5
                // 128 bit format, then compare the username and password in the database
                // if match, log the user in, else display the error
                if (isset($_POST["loginsubmit"])) {
                    $email = escapeValue(trim($_POST["email"]));
                    $password = (trim($_POST["password"]));
                    $post_autologin = $_POST['autologin'];
                    $salt = "@|-°+==00001ddQ";
                    $password_cry =  md5( $password . $salt . $email .  $salt . $email . $email  );
                    $selection = "email = '{$email}' ";
                    $selection .= "AND password = '{$password_cry}';";
                    $result = DataSource::getUser($selection);
                    $row = $result->fetch_assoc();
                    if ($row != NULL) {
                        // user found, log in successfully
                        
                        $_SESSION["currentUser"] = $row["email"];
                        $_SESSION["pofilePic"] = $row["profilePhoto"];
                        $_SESSION["currentName"] = $row["firstName"] ;
                        
                        // Autologin Requested?

                        if($post_autologin == 1)
	                       {
                       
	                           setcookie ($cookie_name, 'currentUser='.$row["email"].'&pofilePic='.$row["profilePhoto"] .'&currentName='.$row["firstName"], time() + $cookie_time);
	                       }

                        if ($row["email"] == "root@admin.com") {
                        	redirectTo("../connected/panel/index.php");
                        }
                        else
                        {
                        	redirectTo("../connected/index.php");
                        }
                        
                        
                    } else {?>
                        <script>alert ("Error: incorrect email/password");</script>
                        <?php
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
				  Haven't registered yet? <a href="register.php" class="btn btn-primary"> Register Here </a> or
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
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53918379-1', 'auto');
	  ga('send', 'pageview');

	</script>
  </body>

</html>