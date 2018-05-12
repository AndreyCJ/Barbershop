<?
session_start();

if(!isset($_SESSION['email'])){
	$_SESSION['msg'] = "Вы должны зайти в учетную запись сначала";
	header('location: login.php ');
}
?>

<? include('D:\openserver\ospanel\domains\Barbershop.com\personal\header-personal.php'); ?>
<body>
<? include('D:\openserver\ospanel\domains\Barbershop.com\inc\nav.php'); ?>




</body>
<? include('D:\OpenServer\OSPanel\domains\Barbershop.com\inc\footer.php'); ?>