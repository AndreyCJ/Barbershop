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
<div class="wrapper-personal">
<div class="content">
	<div class="client-content">
	<div class="header">
		<h3>Запись на прием </h3>
		<div class="client">
	  <!-- информация о зашедшем пользователе -->
		<? if(isset($_SESSION['email'])) : ?>
			<p><h3>Добро пожаловать, </h3>  <h4> <? echo $_SESSION['email']; ?></h4></p>
		<?endif?>
	</div>
	</div>

<div class="cards">
	<div class="card1"><a href="/booking/team.php"><h3>Сотрудники</h3></a></div>
	<div class="card2"><a href="/booking/service.php"><h3>Услуги</h3></a></div>
	<div class="card3"> <a href="/booking/datentime.php"><h3>Дата и время</h3></a></div>
</div>

<div class="cards-output">
	<div class="card-output1"><h4>Иван</h4></div>
	<div class="card-output2"></div>
	<div class="card-output3"></div>
</div>


asdas

</div>
</div>
</div>
<? include('D:\OpenServer\OSPanel\domains\Barbershop.com\inc\footer.php'); ?>
</div>

</body>


