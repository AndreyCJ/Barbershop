<?
session_start();

if(!isset($_SESSION['email'])){
	$_SESSION['msg'] = "Вы должны зайти в учетную запись сначала";
	header('location: login.php ');
}
?>

<? include('D:\openserver\ospanel\domains\Barbershop.com\inc\header-time.php'); ?>
<body>
<? include('D:\openserver\ospanel\domains\Barbershop.com\inc\nav.php'); ?>

<div id='myCalendarContainer'></div>


<div class="footer-datentime">
	<? include('D:\OpenServer\OSPanel\domains\Barbershop.com\inc\footer.php'); ?>
</div>

</div>
</body>
