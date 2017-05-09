<?php
require_once("../requires/functions.php");
require_once("../requires/config.php");

// end the current session and log the user out
$_SESSION["currentName"]  = "";
$_SESSION["currentUser"] = "";


if(isset($_COOKIE[$cookie_name]))
{
// remove 'site_auth' cookie
setcookie ($cookie_name, '', time() - $cookie_time);
}
session_destroy();
redirectTo("login.php");
?>