$(document).ready(function() {
	/*Так как команда bold изначально поддерживается API, то наш объект command представляет собой всего лишь небольшой враппер.*/
	function Command(command, editDoc) {
	  this.execute = function() {
		editDoc.execCommand(command, false, null); 
	  };
	  this.queryState = function() {
		return editDoc.queryCommandState(command)
	  };
	}
	
	/*span связан с объектом command посредством контроллера:*/
	function TogglCommandController(command, elem) {	
		this.updateUI = function() {
			var state = command.queryState();
			elem.className = state?"active":"";
	  	}
		elem.click(function(){
			command.execute(); 	
			updateToolbar();
		}); 
	}
	/*Из листинга выброшен код, который отвечал за сохранение фокуса окном редактирования при нажатии на кнопку на панели управления.Ниже мы вызываем функцию ToggleCommandController для синхронизации состояния кнопки и начертания текста с учетом двух их состояний. Когда происходит нажатие на кнопку, выполняется команда. Когда вызывается событие updateUI, то span получает класс «active», или теряет его, в зависимости от состояния текста. CSS свойства, определяющие внешний вид кнопки:*/
	/*Компоненты связаны следующим образом:*/
	
	editDoc = document.getElementById("editable");
	var command = Command("Bold", editDoc);
	var elem = $("#boldButton");	
	var controller = new TogglCommandController(command, elem);
	/*updateListeners.push(controller);*/
	/*Коллекция updateListeners содержит контроллеры для панели управления. Функция updateToolbar перебирает список и вызывает метод updateUI для каждого контроллера, что бы все элементы управления точно находились в актуальном состоянии. Мы прикрепляем события так, что бы updateToolbar вызывался каждый раз, когда изменяется выделение документа:*/
	/*bindEvent(editDoc, "keyup", updateToolbar);
	bindEvent(editDoc, "mouseup", updateToolbar);*/
	/*Так же, как показано выше, updateToolbar вызывается когда выполняется команда. Почему мы обновляем всю панель управления после выполнения каждой команды, вместо того что бы обновлять только ту кнопку, которая связана с командой? Так как состояния других элементов управления в результате выполнения команды тоже могут измениться. Например если мы применим команду выравнивания по правому краю, то изменится так же состояние кнопки выравнивания по левому краю и кнопки центрирования. Вместо отслеживания всех возможных зависимостей проще обновить всю панель управления.Теперь у нас есть базовый интерфейс для команд с двумя состояниями. С использованием получившегося фреймворка реализованы команды Bold, Italic, JustifyLeft, JustifyRight, и JustifyCenter.*/
});