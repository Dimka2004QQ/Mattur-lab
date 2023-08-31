<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>I. Внутренняя оптимизация.</title>
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">
		<!--Описание стилей для меню, контента, подвала-->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/tabs.css">
		<!--Обмен данными с веб-сервером с помощью AJax-->
		<script src="js/index.js"></script>
		<script src="js/dom.js"></script>
		<script src="js/auth.js"></script>
		<script src="js/circle.js"></script>
		<script src="js/math.js"></script>
		<script src="js/tabs.js"></script>
	</head>
 <body>
		<!--Верхний блок страницы: Меню-->
		<header>
		<div class="logo1">
				<div class="logo11">
				<div class="logo2">
					<img src="img/официант.webp" width="50" height="50">
				</div>
				<p>Официант</p><br><br>
				<p>Dmitriy_0073@mail.ru</p>
			     </div>
			</div>
				<button style="width: 100px;
	height: 50px;"><a href="#"></a>Выйти</button>
			<div class="nav-scroll">
				<nav class="nav-scroll_items">
					<!--Ссылки на все вкладки-->
					<a class="nav-scroll_item" href="#" onclick="linkcontent('ofiziant-first.html');">Главная</a>
					<a class="nav-scroll_item" href="#" onclick="linkcontent('ofiziant-new.html');">Создание заказа</a>
					<a class="nav-scroll_item" href="#" onclick="linkcontent('ofizian-zacazs.html');">Заказы</a>
					<!--Конец ссылок-->
				</nav>
			</div>
      </header>
	  <center><div class="content" id="content">
		<h3>Здравствуйте, уважаемый официант!!!</h3>
		<p><img src="img/Oficiant.jpg" width="300" height="150" class="leftimg"></p>
		<div class="text1" >
		<b><p>Обязанности официанта<br></b></br>


&#160; &#8226; Обслуживание клиентов заведения;<br><br>
&#160; &#8226; Соблюдение чистоты в зале;<br><br>
&#160; &#8226; Подчинение повару;<br><br>
&#160; &#8226; Распределением обязанностей между коллегами;<br><br>
&#160; &#8226; Несет ответственность за работу в зале;<br><br>
&#160; &#8226; Обеспечивает пожарную безопасность;<br><br>
&#160; &#8226; Отслеживает работоспособность подчиненных;<br><br>
&#160; &#8226; Осмотр чистоты посуды;<br><br>
&#160; &#8226; Поддержка постоянного опрятного вида;<br><br>
&#160; &#8226; Соблюдение дисциплины;<br><br>
&#160; &#8226; Возможность обратиться к руководству;<br><br>
&#160; &#8226; Возможность самостоятельно составления графика работы;<br><br>

</p>
</div>
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