<!DOCTYPE HTML><html lang="ru">
	<head><meta charset="utf-8">
		<?php //Получаем посетителей — массив $ch[]
			require('graph-data.inc');
		?>
		<link rel="stylesheet" type="text/css" href="../chart/Chart.min.css">
		<script src="../chart/Chart.min.js"></script>
		<script src="../js/graph.js"></script>
	</head>
	<body onLoad="date_charts()">
			<fieldset>
				<legend>Статистика посетителей за
					<b id="b1">Проставляем текущую дату</b>
				</legend>
				<!-- Область построения -->
				<canvas style="width: 100%; height: 640px"
					style="border: 1px solid black" id="canvasline">
				</canvas>
			</fieldset>
				<!-- JSON-представление данных -->
				<b>Строка JSON: </b>
				<div id="dat"><?php echo json_encode($ch) ?></div>
			<figure>
				<button onClick=fjson();>Построить график</button>
			</figure>
			<script>
				function fjson(){
					//Посетители в формате JSON
					var str = document.getElementById('dat').innerHTML;
					//декодировать JSON-строку в массив
					var arr = JSON.parse(str);
					//Вызов ф-ции построения
					quadraticline(arr);
				}
				function date_charts(){
					//Создаём объект Дата и время
					const date= new Date();
					//Значение даты без времени
					document.getElementById("b1").innerHTML = date.toDateString();
				}
			</script>
	</body>
</html>