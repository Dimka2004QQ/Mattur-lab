
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
		<title>Tortotoro</title>
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">
		<!--Описание стилей для меню, контента, подвала-->
		<link rel="stylesheet" href="../css/style-1.css">
		<link rel="stylesheet" href="../css/tabs.css">
		<!--Обмен данными с веб-сервером с помощью AJax-->
		<script src="js/index.js"></script>
		<script src="js/dom.js"></script>
		<script src="js/tabs.js"></script>
		<script src="js/timer.js"></script>
	</head>
 <body>
		<!--Верхний блок страницы: Меню-->
		<header>
			<div class="logo1">
			<div class="logo11">
				<?php 
					$id = $_GET['id'];
					mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
					$connect = mysqli_connect('localhost', 'root', '', 'sweetshop');
	
					$user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$id'");
					$selected_user = mysqli_fetch_assoc($user);
					$img = $selected_user['photo_file'];
                	$imageData = base64_encode($img);
					$imageSrc = "data:{$imageSize['mime']};base64,{$imageData}";
					if (!isset($img)) {
						$imageSrc = '../img/user1.png';
					}
					?>
				<div class="logo2">
					<img src="<?=$imageSrc?>" width="55" height="50">
				</div>
				<p><?= $selected_user['email']; ?></p><br><br>
				<p class="role">
					Администратор
				</p>
			     </div>
			</div>
				<a href="logout.php" class="logout">Выйти</a>
			<div class="nav-scroll">
			<div class="nav-scroll">
				<nav class="nav-scroll_items">
					<!--Ссылки на все вкладки-->
					<a class="nav-scroll_item" href="admin.php?id=<?= $id ?>">Главная</a>
					<a class="nav-scroll_item" href="order_list.php?id=<?= $id ?>" onclick="linkcontent('zakazi.php');">Формы</a>
					<a class="nav-scroll_item" href="registration.php?id=<?= $id ?>">Регистрация нового сотрудника</a>
					<a class="nav-scroll_item" href="employee_list.php?id=<?= $id ?>">Сотрудники</a>
					<!--Конец ссылок-->
				</nav>
			</div>
			</div>
		</header>
		<!--Средний блок: Контент -->
		<main>
			<div class="container">
				<div class="page">
					<div class="page__warning">
						Регистрация
					</div>
					<div class="page__registrations">
						<form action="register.php" method="POST" enctype="multipart/form-data">
							<div class="page__name page__line">
								<span class="page__label">Имя пользователя</span>
								<div class="page__field">
									<input type="text" class="page__input" name="name" placeholder="Введите имя" required>
								</div>
							</div>
							<div class="page__login page__line">
								<span class="page__label">Логин пользователя</span>
								<div class="page__field">
									<input type="text" class="page__input" name="login" placeholder="Введите логин" required>
								</div>
							</div>
							<div class="page__login page__line">
								<span class="page__label">Почта пользователя</span>
								<div class="page__field">
									<input type="email" class="page__input" name="email" placeholder="Введите email" required>
								</div>
							</div>
							<div class="page__login page__line">
								<span class="page__label">Пароль пользователя</span>
								<div class="page__field">
									<input type="password" class="page__input" name="password" placeholder="Введите пароль" required>
								</div>
							</div>
							<div class="page__login page__line">
								<span class="page__label">Фото пользователя</span>
								<div class="page__field">
									<input type="file" class="page__photo" name="photo">
								</div>
							</div>
							<div class="page__login page__line">
								<span class="page__label">Пароль пользователя</span>
								<div class="page__field">
									<select id="role_id" name="role" class="page__input page__select">
										<option value="1">Администратор</option>
									</select>
								</div>
							</div>
							<input type="hidden" value="<?=$id?>" name="my_id">
							<div class="page__login page__line">
								<div class="page__link">
									<button type="submit" class="page__register">Зарегистрировать</button>
									<?php
										if ($_GET['success']) {
											?>
												<span class="page__success">Пользователь зарегистрирован!</span>
											<?php
										} else if ($_GET['error'] == 1) {
											?>
												<span class="page__error page__cut">Короткий логин!</span>
											<?php
										} else if ($_GET['error'] == 2) {
											?>
												<span class="page__error page__cut">Короткий пароль!</span>
											<?php
										}
									?>                                            
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</main>



</div>
</center>
	<!-- Блок сообщений пользователю -->
	<div id="loading" style="display: none">Идёт загрузка...</div>
	<!--Нижний блок (подвал): авторские права-->
	<footer>
		<center><div class="text-block">© 2023 Klod Mane. Все права защищены.</div></center>
	</footer>
 </body>
</html>