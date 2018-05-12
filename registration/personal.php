<?
session_start();

if(!isset($_SESSION['email'])){
	$_SESSION['msg'] = "Вы должны зайти в учетную запись сначала";
	header('location: login.php ');
}
?>

<? include('D:\openserver\ospanel\domains\Barbershop.com\personal\header-personal.php'); ?>
<body>
<div class="global-wrapper">
<? include('D:\openserver\ospanel\domains\Barbershop.com\inc\nav.php'); ?>

<div class="content">

<div class="client-content">
	<div class="header">
		<h2>Запись на прием </h2>
		<div class="client">
	  <!-- информация о зашедшем пользователе -->
		<? if(isset($_SESSION['email'])) : ?>
			<p>Добро пожаловать, <strong> <? echo $_SESSION['email']; ?></strong></p>
		<?endif?>
	</div>
	</div>

<form action="">
	<a href="/booking/team.php"><h3>Сотрудники</h3></a>
	<a href="/booking/service.php"><h3>Услуга</h3></a>
	<a href=""><h3>Дата и время</h3></a>
</form>
</div>
</div>
<? include('D:\OpenServer\OSPanel\domains\Barbershop.com\inc\footer.php'); ?>
</div>
</body>


