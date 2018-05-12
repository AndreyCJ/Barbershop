<?
	session_start();
	session_destroy();
	include('D:\openserver\ospanel\domains\Barbershop.com\config\config.php');
	header('location: '.ROOT_URL.' ');


?>