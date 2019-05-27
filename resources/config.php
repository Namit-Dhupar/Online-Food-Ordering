<?php

ob_start(); // Enables output buffering and helps in redirection to some other link

session_start(); // enables storing data securely in the $_SESSION[] global array
//session_destroy();

defined("DS") ? null : define("DS",DIRECTORY_SEPARATOR);
//echo __DIR__;   //__DIR__ is magic costant means root of the file

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");
defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ . DS . "uploads");
   /************DEFINING DATABASE**************/
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "food_db");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); //Connects with the database created via phpmyadmin

require_once("functions.php"); //includes the file which can be required by this file

?> 