(function($){
	
	/* TRANSLATE FORM START */
	function createLangListHtml(langs, currentHtml) {
		var html = currentHtml;

		var vals = [];
		$.each(langs, function (i, val) {
			vals.push(val);
		});
		vals.sort();

		for (var i = 0, l = vals.length; i < l; i++) {
			$.each(langs, function (ind, val) {
				if (val == vals[i]) {
					html += "<option value='" + ind + "'>" + val + "</option>";
				}
			});
		}
		return html;
	}
		
		
	 function translateControls() {
		var inputTranslateText = $.trim($(txtInputLanguage).val());

		if (inputLanguageCode == null ||
			inputLanguageCode == "") {
			$(infoMessages).text(INPUT_LANGUAGE_NOT_SELECTED)
			return false;
		}
		if (outputLanguageCode == null ||
			outputLanguageCode == "") {
			$(infoMessages).text(TRANSLATION_LANGUAGE_NOT_SELECTED);
			return false;
		}

		if (inputTranslateText == null ||
			inputTranslateText == "") {
			$(infoMessages).text(INPUT_TEXT_NOT_FOUND);
			return false;
		}
		return true;
	}
	
	
	var translateformcontrol = $(".translate-widget-form").is("div");
	if(translateformcontrol == "") { }
	else {
		 function translate(inputLang, outputLang) {
			if (translateControls()) {
				var url = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=" + apiKey + "&lang=" + inputLanguageCode + "-" + outputLanguageCode + "&text=" + $(txtInputLanguage).val();
				$.ajax({
					type: "GET",
					url: url,
					dataType: "json",
					success: function (msg) {
						var text = msg.text;
						$(txtOutputLanguage).val(text);
					},
					error: function (e) {
						$(infoMessages).text(ERROR_MESSAGE + " - " + e);
					}
				});
			}
		}
	}
	
	var translateformcontrol2 = $(".translate-widget-form").is("div");
	if(translateformcontrol2 == "") { }
	else {
		 function getLanguages() {
			var url = "https://translate.yandex.net/api/v1.5/tr.json/getLangs?key=" + apiKey + "&ui=" + userInterfaceId;
			$.ajax({
				type: "GET",
				url: url,
				dataType: "json",
				success: function (msg) {
					var langs = msg.langs;
					var langList = createLangListHtml(langs, $(selectInputLanguage).html());
					/* $(selectInputLanguage).html(langList);
					$(selectOutputLanguage).html(langList); */
				},
				error: function (e) {
					$(infoMessages).text(ERROR_MESSAGE + " - " + e);
				}
			});
			return null;
		}
	}
	

	
	function clearInputs() {
		var defaultLangSelectText = "<option value=\"\"></option>";
		/* var defaultLangSelectText = "<option value=\"\">" + DEFAULT_SELECTION_TEXT + "</option>";
		 $(inputLanguageSelect).html(defaultLangSelectText);
		$(outputLanguageSelect).html(defaultLangSelectText); */
		$(infoMessages).text("");
		$(txtInputLanguage).val("");
		$(txtOutputLanguage).val("");
	}
	

	function changeLanguage() {
		$(selectInputLanguage).val(outputLanguageCode);
		$(selectOutputLanguage).val(inputLanguageCode);
		var x = inputLanguageCode;
		inputLanguageCode = outputLanguageCode;
		outputLanguageCode = x;
	}
	
	$(function () {
		$.support.cors = true;
		clearInputs();
		
		var translateformcontrol2 = $(".translate-widget-form").is("div");
		if(translateformcontrol2 == "") { }
		else {
			getLanguages();
		}

		$(selectInputLanguage).on("change", function (e) {
			$(infoMessages).text("");
			inputLanguageCode = this.value;
		});

		$(selectOutputLanguage).on("change", function (e) {
			$(infoMessages).text("");
			outputLanguageCode = this.value;
		});

		$(btnChangeLanguage).click(function () {
			$(infoMessages).text("");
			changeLanguage();

			if ($(txtInputLanguage).val() != "") {
				translate();
			}
		});

		$(btnTranslate).click(function () {
			$(infoMessages).text("");
			translate();
		});

		$(txtInputLanguage).keyup(function (e) {
			$(infoMessages).text("");
			translate();
		});

	});

	
	var inputLanguageCode;
	var outputLanguageCode;

	//ID selectors
	var infoMessages = "#infoMessages";
	var txtInputLanguage = "#inputTextEntry";
	var txtOutputLanguage = "#outputTextEntry";

	var btnChangeLanguage = "#changeBtn";
	var btnTranslate = "#translateBtn";

	var selectInputLanguage = "#inputLanguageSelect";
	var selectOutputLanguage = "#outputLanguageSelect";
	
	/* TRANSLATE FORM END */
	
	/* TRANSLATE FORM KEYBOARD START */
	$('#inputTextEntry').keyboard( {
			layout: 'qwerty',
			stayOpen : false,
			openOn   : null,
		}
	);
	$('#outputTextEntry').keyboard( {
			layout: 'qwerty',
			stayOpen : false,
			openOn   : null,
		}
	);

	// QWERTY (mod) Text Area
	// ********************
	$('#qwerty-mod').keyboard({
		layout: 'custom',
		customLayout: {
			'normal': [
				'` 1 2 3 4 5 6 7 8 9 0 - = {bksp}',
				'{tab} q w e r t y u i o p [ ] \\',
				'a s d f g h j k l ; \' {enter}',
				'{shift} z x c v b n m , . / {shift}',
				'{accept} {space} {left} {right}'
			],
			'shift': [
				'~ ! @ # $ % ^ & * ( ) _ + {bksp}',
				'{tab} Q W E R T Y U I O P { } |',
				'A S D F G H J K L : " {enter}',
				'{shift} Z X C V B N M < > ? {shift}',
				'{accept} {space} {left} {right}'
			]
		}
	})
	
	$('#virtual-keyboard-input').click(function(){
	var kb = $('#inputTextEntry').getkeyboard();
	// close the keyboard if the keyboard is visible and the button is clicked a second time
	if ( kb.isOpen ) {
		kb.close();
	} else {
		kb.reveal();
	}
	});
	
	$('#virtual-keyboard-output').click(function(){
	var kbs = $('#outputTextEntry').getkeyboard();
	// close the keyboard if the keyboard is visible and the button is clicked a second time
	if ( kbs.isOpen ) {
		kbs.close();
	} else {
		kbs.reveal();
	}
	});
	/* TRANSLATE FORM KEYBOARD END */
		
	/* TOOLTIP */
	$(function () {
		$('#virtual-keyboard-input').tooltip();
		$('#virtual-keyboard-output').tooltip();
	})

} )( jQuery );