<!-- <?
	require 'config.php';
	require 'db.php';
	session_start();
	
	//инициализация переменных
	$f_name = "";
	$l_name = "";
	$email = "";
	$errors = array();

	
	

	
	if(isset($_POST['reg_user'])){
		$f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
		$l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']) ;
		$password = mysqli_real_escape_string($conn, $_POST['pass']);
		$c_pass = mysqli_real_escape_string($conn, $_POST['c_pass']);

		//Проверка правельности заполнения
		if(empty($f_name)) {array_push($errors, "Введите имя");}
		if(empty($l_name)) {array_push($errors, "Введите фамилию");}
		if(empty($email)) { array_push($errors, "Введите email"); }
		if(empty($password)) {array_push($errors, "Введите пароль");}
		if($password != $c_pass){array_push($errors, "Пароли не совподают");}


		//Проверка есть ли в базе уже сущесвтует пользователь с одинаковым email
		$user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1 ";
		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		if($user){ //если пользователь существует
			if($user['email'] === $email){
				array_push($errors, "Email занят");
			}
		}
		
		// Регестрируем пользователя, если нету ошибок в форме
		if(count($errors) == 0){
			$passwordv = md5($password);

			$query = "INSERT INTO users (f_name, l_name, email, pass) VALUES('$f_name', '$l_name', '$email', '$passwordv')";
			mysqli_query($conn,$query);
			$_SESSION['email'] = $email;
			$_SESSION['success'] = "Вы вошли";
			header('location: '.ROOT_URL.' ');
		}


	}

	if(isset($_POST['login_user'])){
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$passwordv = mysqli_real_escape_string($conn,$_POST['pass']);
		
		if(empty($email)){
			array_push($errors, "Введите email");
		}
		if(empty($passwordv)){
			array_push($errors, "Введите пароль");
		}

		if(count($errors) == 0){
			$passwordv = md5($passwordv);
			$query = "SELECT * FROM users WHERE email='$email' AND pass='$passwordv' ";
			$results = mysqli_query($conn, $query);
			if(mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "Вы зашли в систему";
				header('location: personal.php');
			}else{
				array_push($errors, "Неверный логин или пароль");
			}
		}
	}











?> -->