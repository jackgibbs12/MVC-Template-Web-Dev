<?php

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
switch ($uri) {
    case "/index.php/":
	require "View/home.php";

        break;

    case "/index.php/register":


	//This runs when the /register URL is entered and displays the following page:

	require "View/register.php";

    	break;

    case "/index.php/login":

	//This runs when the /login URL is entered and displays the following page:

	require "View/login.php";

    	break;

    default:
        header("HTTP/1.1 404 Not Found");
        echo $uri;
        echo "<html><body><h1>Page Not Found.</h1></body></html>";
}
