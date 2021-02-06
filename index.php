<?php
//Get the URL path.
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

//Page router based on URL path.
switch ($uri) {

  //Route to the main page
  case "/":
    require "View/home.php";
    break;

  //Route to the main page
  case "/index.php/":
    require "View/home.php";
    break;

  //Route to the register page
  case "/index.php/register":
    require "View/register.php";
    break;

  //Route to the login page.
  case "/index.php/login":
    require "View/login.php";
    break;

  //If any other URL path is entered, display 404 Page Not Found error.
  default:
    header("HTTP/1.1 404 Error Not Found");
    echo "<html><body><h1>Page Not Found.</h1></body></html>";
}
