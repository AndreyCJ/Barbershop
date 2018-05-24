<?
	include('../config/server.php');
?>



<? include('../inc/headerreg.php'); ?>

<body>
<? include('../inc/nav.php'); ?>



<div class="wrapper">
<div class="info"><h2>Создайте свою учетную запись</h2></div>
<form method="post" action="<? $_SERVER['PHP_SELF'];  ?>">
  	
  	<div class="input-group">
  	  <label>Имя</label>
  	  <input type="text" name="f_name" value="<?php echo $f_name;?>">
	</div>
	<div class="input-group">
  	  <label>Фамилия</label>
  	  <input type="text" name="l_name" value="<?php echo $l_name;?>">
  	</div>  
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email;?>">
  	</div>
  	<div class="input-group">
  	  <label>Пароль</label>
  	  <input type="password" name="pass">
  	</div>
  	<div class="input-group">
  	  <label>Подтвердите пароль</label>
  	  <input type="password" name="c_pass">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Зарегестрироваться</button>
  	</div>
  	<p>
  		Уже зарегестрированы? <a href="login.php">Войти</a>
  	</p><br>
		<? include('errors.php'); ?>
  </form>
	</div>

</body>

<? include('../inc/footer.php'); ?>