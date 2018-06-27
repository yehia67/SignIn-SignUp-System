
$(document)
.on("submit", "form.js-register", function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $(".js-error", _form);

	var dataObj = {
        username: $("input[type='text']", _form).val(),
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};
	 if(dataObj.email.length < 16){
		_error
			.text("Please enter a valid email address")
			.show();
		return false;
	} else if (dataObj.password.length < 11) {
		_error
			.text("Please enter a passphrase that is at least 11 characters long.")
			.show();
		return false;
	} 
   // start the ajax process
	_error.hide();

	return false;
})