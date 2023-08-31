function open10(evt, id10) {
	var i, tabcontent, tablinks;
	//Перебрать все элементы с class="tabcontent" и скрыть их
	tabcontent = document.getElementsByClassName("tabcontent10");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	//Перебрать все элементы с class="tablinks" и удалите класс "active"
	tablinks = document.getElementsByClassName("tablinks10");
	for (i=0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	//Показать текущую вкладку и добавить "активный" класс к активной кнопке
	document.getElementById(id10).style.display = "block";
	evt.currentTarget.className += " active";
	//Клик по умолчанию на кнопку, когда весь HTML загружен
}
document.addEventListener('DOMContentLoaded', function() {
	//Программный планировщик
	setTimeout(function() {
		//клик на кнопку через 2 сек.
		document.getElementById('id-default').onClick();
	}, 2000);
});
