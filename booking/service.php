<?
session_start();

if(!isset($_SESSION['email'])){
	$_SESSION['msg'] = "Вы должны зайти в учетную запись сначала";
	header('location: login.php ');
}
?>

<? include('D:\openserver\ospanel\domains\Barbershop.com\personal\header-personal.php'); ?>
<body>
<div class="global-wrapper-sevice">
<? include('D:\openserver\ospanel\domains\Barbershop.com\inc\nav.php'); ?>


<div class="content-service">

<div class="client-content">
	<div class="header">
		<h3>Услуги</h3>
		<div class="client">
	  	<!-- информация о зашедшем пользователе -->
		<? if(isset($_SESSION['email'])) : ?>
			<p><h3>Добро пожаловать, </h3>  <h4> <? echo $_SESSION['email']; ?></h4></p>
		<?endif?>
		</div>
	</div>
</div>

<div class="service-block">
	<div class="service-card">
		<div class="service-cell">
			<div class="service">
				<div class="box">
					<a href="">Стрижка Мужская</a>
				
				</div>
			</div>
		</div>
	</div>

	<div class="service-footer">
		<div class="price">
			<span>700</span>
		</div>
	</div>

</div>

<div class="service-block">
	<div class="service-card">
		<div class="service-cell">
			<div class="service">
				<div class="box"><a href="">Стрижка Женская</a></div>
			</div>
		</div>
	</div>


<div class="service-footer">
	<div class="price">
		<span>1000</span>
	</div>
</div>
</div>



<div class="service-block">
	<div class="service-card">
		<div class="service-cell">
			<div class="service">
				<div class="box"><a href="">Бритьё</a></div>
			</div>
		</div>
	</div>


<div class="service-footer">
	<div class="price">
		<span>500</span>
	</div>
</div>
</div>

<div class="service-block">
	<div class="service-card">
		<div class="service-cell">
			<div class="service">
				<div class="box"><a href="">Укладка волос</a></div>
			</div>
		</div>
	</div>


<div class="service-footer">
	<div class="price">
		<span>600</span>
	</div>
</div>
</div>

<div class="service-block">
	<div class="service-card">
		<div class="service-cell">
			<div class="service">
				<div class="box"><a href="">Покраска</a></div>
			</div>
		</div>
	</div>


<div class="service-footer">
	<div class="price">
		<span>600</span>
	</div>
</div>
</div>











	<div class="content">
		<div class="navigation-service">
			<div class="back"><a href="/registration/personal.php">Назад</a></div>
			<div class="skip"><a href="">Пропустить выбор сотрудника</a></div>
		</div>
	</div>



</div>








<? include('D:\OpenServer\OSPanel\domains\Barbershop.com\inc\footer.php'); ?>
</div>
</body>
