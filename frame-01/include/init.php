<?php 
/*
file init.php
Initialization the frame
*/

// Initialization the current absolute path
// Replacewith a forward slash, linux/win support the forward slash, but linux does not support backslash
define ('ROOT',str_replace('\\', '/',dirname(dirname(__FILE__))) . '/');
define('DUBUG', true);

// require the database class and the configuration class
require(ROOT . 'include/db.class.php');
require(ROOT . 'include/conf.class.php');


// Set error level


if (defined('DEBUG')){
	error_reporting(E_ALL);
}else{
	error_reporting(0);
}



?>