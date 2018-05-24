<?
	require 'config.php';
	require 'db.php';
//инициализация переменных
	session_start();
	$f_name = '';
	$l_name = '';
	$email = '';
	$errors = array();

	if(isset($_POST['reg_user'])){
		//проверка на наличия заполнения
		$f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
		$l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pass = mysqli_real_escape_string($conn, $_POST['pass']);
		$c_pass = mysqli_real_escape_string($conn, $_POST['c_pass']);

		//Проверка правельности заполнения
		if(empty($f_name)){array_push($errors, 'Введите имя!');}
		if(empty($l_name)){array_push($errors, 'Введите фамилию!');}
		if(empty($email)){array_push($errors, 'Введите email!');}
		if(empty($pass)){array_push($errors, 'Введите пароль!');}
		if($pass != $c_pass){array_push($errors, 'Пароли не совпадают!');}

		//Проверка есть ли в базе уже сущесвтует пользователь с одинаковым email
		$user_check = "SELECT * FROM users WHERE email='$email' LIMIT 1 ";
		$result = mysqli_query($conn, $user_check);
		$user = mysqli_fetch_assoc($result);

		if($user){
			if($user['email'] === $email){
				array_push($errors, 'Пользователь с таким Email уже существует!');
			}
		}

		
		if(count($errors) == 0){
			$hashedpass = md5($pass);

			$query = "INSERT INTO users (f_name, l_name, email, pass) VALUES ('$f_name', '$l_name', '$email', '$hashedpass') ";
			mysqli_query($conn, $query);
			$_SESSION['f_name'] = $f_name;
			$_SESSION['success'] = "Вы вошли";
			header('location: '.ROOT_URL.' ');
		}


	}

	//логин
	if(isset($_POST['login_user'])){
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$hashedpass = mysqli_real_escape_string($conn, $_POST['pass']);

	
	if(empty($email)){
		array_push($errors, "Введите Email!");
	}
	if(empty($hashedpass)){
		array_push($errors, "Введите пароль");
	}
	
	if(count($errors) == 0){
		$hashedpass = md5($hashedpass);
		$query = "SELECT * FROM users WHERE email='$email' AND pass='$hashedpass'";
		$results = mysqli_query($conn,$query);
		if(mysqli_num_rows($results) == 1){
			$_SESSION['email'] = $email;
			$_SESSION['success'] = "Вы вошли в аккаунт";
			header("location: personal.php ");
		}else{
			array_push($errors, "Неправельный email или пароль");
		}
	}
}


	?>