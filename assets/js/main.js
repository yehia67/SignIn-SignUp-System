
$(document)
.on("submit", "form.js-signup", function(event) {
	event.preventDefault();
     console.log("ana hnaa")
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
	$.ajax({
		type: 'POST',
		url: 'ajax/registration.php',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(data) {
		// Whatever data is 
		if(data.redirect !== undefined) {
			window.location = data.redirect;
		} else if(data.error !== undefined) {
			_error
				.text(data.error)
				.show();
		}
	})
	.fail(function ajaxFailed(e) {
		// This failed 
		console.log(e);
	})
	.always(function ajaxAlwaysDoThis(data) {
		// Always do
		console.log('Always');
	})
	return false;
})