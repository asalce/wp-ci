

(function($) {
	$.fn.validationEngineLanguage = function() {};
	$.validationEngineLanguage = {
		newLang: function() {
			$.validationEngineLanguage.allRules = 	{"required":{    			// Add your regex rules here, you can take telephone as an example
						"regex":"none",
						"alertText":"* Este campo es requerido",
						"alertTextCheckboxMultiple":"* Por favor seleccione una opcion",
						"alertTextCheckboxe":"* Este cuadro es requerido"},
					"length":{
						"regex":"none",
						"alertText":"* Entre ",
						"alertText2":" y ",
						"alertText3": " caracteres permitidos"},
					"maxCheckbox":{
						"regex":"none",
						"alertText":"* Opciones requeridas exedidas"},	
					"minCheckbox":{
						"regex":"none",
						"alertText":"* Por favor seleccione ",
						"alertText2":" opciones"},	
					"confirm":{
						"regex":"none",
						"alertText":"* Su campo no concuerda"},		
					"telephone":{
						"regex":"/^[0-9\-\(\)\ ]+$/",
						"alertText":"* Numero telefonico invalido"},	
					"email":{
						"regex":"/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/",
						"alertText":"* Correo electronico invalido"},	
					"date":{
                         "regex":"/^[0-9]{4}\-\[0-9]{1,2}\-\[0-9]{1,2}$/",
                         "alertText":"* Fecha invalida, debe ser en formato año-mes-día"},
					"onlyNumber":{
						"regex":"/^[0-9\ ]+$/",
						"alertText":"* Solo numeros"},	
					"noSpecialCaracters":{
						"regex":"/^[0-9a-zA-Z]+$/",
						"alertText":"* Caracteres especiales no permitidos"},	
					"ajaxUser":{
						"file":"validateUser.php",
						"extraData":"name=eric",
						"alertTextOk":"* Este usuario esta disponible",	
						"alertTextLoad":"* Cargando por favor espere",
						"alertText":"* Este usuario ya existe"},	
					"ajaxName":{
						"file":"validateUser.php",
						"alertText":"* Este nombre ya existe",
						"alertTextOk":"* Este nombre esta disponible",	
						"alertTextLoad":"* Cargando, por favor espere"},		
					"onlyLetter":{
						"regex":"/^[a-zA-Z\ \']+$/",
						"alertText":"* Solo letras"}
					}	
		}
	}
	
	$(function() {
		jQuery.validationEngineLanguage.newLang();
	});
	
})(jQuery);