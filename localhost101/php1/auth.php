<?php
	//проверка пустых значений на сервере
	if (!empty($_POST["login"] && !empty($_POST["password"]))){
		print "Аутентификация прошла успешно!<br>";
		print "Ваш логин: ".$_POST['login']."<br>";
		print "Ваш пароль: ".$_POST['password']."<br>";
	}
	else {
		//Получаем URL откуда пришли
		$back = $_SERVER['HTTP_REFERER'];
		//редирект на прежнюю страницу
		header("Location: $back");
		//прекращение выполнения
		exit();
	}
?>