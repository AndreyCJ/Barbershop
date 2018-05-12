<?require 'D:\openserver\ospanel\domains\Barbershop.com\config\config.php';?>
<nav>
		<div class="brand"><p>BARBER SHOP</p></div>
			<ul>
				<li><h3><a href="<?echo ROOT_URL;?>">ДОМОЙ</a></h3></li>
				<li><h3><a href="/registration/personal.php">ЗАПИСЬ</a></h3></li>
				<li><h3><a href="">ГАЛЕРЕЯ</a></h3></li>
				<?
				if(!isset($_SESSION['email'])){
					echo ('<li><h3><a href="/registration/reg.php">РЕГИСТРАЦИЯ</a></h3></li>');
				}else{
					echo('<li><h3><a href="/registration/logout.php">ВЫЙТИ</a></h3></li>');
				}
				?>
			</ul>
</nav>
