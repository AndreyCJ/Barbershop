<?
	session_start();
	session_destroy();
	include('../config/config.php');
	header('location: '.ROOT_URL.' ');


?>