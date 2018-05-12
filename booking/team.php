<?
session_start();

if(!isset($_SESSION['email'])){
	$_SESSION['msg'] = "Вы должны зайти в учетную запись сначала";
	header('location: login.php ');
}
?>

<? include('D:\openserver\ospanel\domains\Barbershop.com\personal\header-personal.php'); ?>
<body>
<div class="global-wrapper1">
<? include('D:\openserver\ospanel\domains\Barbershop.com\inc\nav.php'); ?>



<div class="content">
	<div class="client-content">
	<div class="header">
		<h3>Сотрудники</h3>
		<div class="client">
	  <!-- информация о зашедшем пользователе -->
		<? if(isset($_SESSION['email'])) : ?>
			<p><h3>Добро пожаловать, </h3>  <h4> <? echo $_SESSION['email']; ?></h4></p>
		<?endif?>
	</div>
	</div>




</div>



<div class="wrapper">
<div class="person-block">
<div class="master-card">
<div class="person-cell">
	<div class="person">
			<a href=""><img src="/img/team/person2.jpeg" alt="" ></a>
			<div class="name">
				<a href=""><h3>Ашот</h3></a>
				<h4>Мастер</h4>
			</div>
		</div>
	
</div>

</div>
<div class="person-footer">
	<div class="sessions">
		<span>Ближайшие сеансы : </span> 
	</div>
	<div class="time">
		<a href="">09:10</a>
	</div>
	<div class="time">
		<a href="">10:00</a>
	</div>
	<div class="time">
		<a href="">11:20</a>
	</div>
</div>

</div>

<div class="person-block">
<div class="master-card">
<div class="person-cell">
	<div class="person">
			<img src="/img/team/person2.jpeg" alt="">
			<div class="name">
			<a href=""><h3>Евпатий</h3></a>
				<h4>Мастер</h4>
			</div>
		</div>
	
</div>

</div>
<div class="person-footer">
	<div class="sessions">
		<span>Ближайшие сеансы : </span> 
	</div>
	<div class="time">
		13:00
	</div>
	<div class="time">
		14:10
	</div>
	<div class="time">
		15:30
	</div>
</div>

</div>

<div class="person-block">
<div class="master-card">
<div class="person-cell">
	<div class="person">
			<img src="/img/team/person2.jpeg" alt="">
			<div class="name">
			<a href=""><h3>Иван</h3></a>
				<h4>Мастер</h4>
			</div>
		</div>
	
</div>

</div>
<div class="person-footer">
	<div class="sessions">
		<span>Ближайшие сеансы : </span>  
	</div>
	<div class="time">
		18:00
	</div>
	<div class="time">
		17:00
	</div>
	<div class="time">
		16:00
	</div>
</div>
</div>

	<div class="content">
	<div class="navigation-team">
	<div class="back"><a href="/registration/personal.php">Назад</a></div>
	<div class="skip"><a href="">Пропустить выбор сотрудника</a></div>


</div>
</div>
</div>
</body>
<? include('D:\OpenServer\OSPanel\domains\Barbershop.com\inc\footer.php'); ?>
</div>


