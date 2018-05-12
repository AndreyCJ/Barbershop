<?
	include('server.php');

?>








<? include('D:\OpenServer\OSPanel\domains\Barbershop.com\inc\headerreg.php'); ?>
<body>
<? include('D:\OpenServer\OSPanel\domains\Barbershop.com\inc\nav.php'); ?>

<div class="wrapper">
<div class="info"><h2>Для записи нужно войти в учетную запись</h2></div>
<form method="POST" action="<?$_SERVER['PHP_SELF'];?>">
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
  	</div>
  	<div class="input-group">
  	  <label>Пароль</label>
  	  <input type="password" name="pass">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="login_user">Войти</button>
  	</div>
  	<p>
  		Еще не зарегестрированы? <a href="reg.php">Зарегестрироваться</a>
  	</p> <br>
		<? include('errors.php') ?>
  </form>
	</div>
	</body>

<? include('D:\OpenServer\OSPanel\domains\Barbershop.com\inc\footer.php'); ?>