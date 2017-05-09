<?php
require_once("functions.php");
require_once("datasource.php");


if(isSet($cookie_name))
{
	// Check if the cookie exists
if(isSet($_COOKIE[$cookie_name]))
	{
	parse_str($_COOKIE[$cookie_name]);

		// Register the session

		$_SESSION["currentUser"] = $currentUser;
        $_SESSION["pofilePic"] = $pofilePic;
        $_SESSION["currentName"] = $currentName;
		}
	
}
?>