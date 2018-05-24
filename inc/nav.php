<? 
$url1 = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

if ($url1 === 'http://barbershop/'){
		include('/config/server.php');
	}else{
		include('../config/server.php');
	} 
?>
<nav>
		<div class="brand"><a href="<?echo ROOT_URL;?>"><p>BARBER SHOP</p></a></div>
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
