<?
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	//Проверка подключения
	if(mysqli_connect_errno()){
		//Ошибка подключения
		echo 'Failed to connect to db'.mysqli_connect_errno();
	}

	

?>