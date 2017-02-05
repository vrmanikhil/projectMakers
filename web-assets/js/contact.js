$(document).ready(function () {
	var emailElem = $('.contact-us input[type="email"]');
	var emailErrMsgElem = $('.contact-us input[type="email"]~.text-danger');
	var emailErrMsg = 'Please enter a valid email id';
	var phoneElem = $('.contact-us input[type="tel"]');
	var phoneErrMsgElem = $('.contact-us input[type="tel"]~.text-danger');
	var phoneErrMsg = 'Please add a valid 10 digit contact number';
	var keyUpEmailListener, keyUpPhoneListener;

	function validateEmail(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}

	function validateNum(num) {
		var re = /^[7-9][0-9]{9}$/;
		return re.test(num);
	}

	function checkEmail() {
		var email = emailElem.val();
		if (!validateEmail(email)) {
			if(!keyUpEmailListener) {
				keyUpEmailListener = emailElem.on('keyup', checkEmail);
			}

			emailElem.css({'border-color': '#a94442'});
			return emailErrMsgElem.text(emailErrMsg);
		}

		emailElem.css({'border-color': '#cccccc'});
		emailErrMsgElem.text('');
	}

	function checkPhoneNum() {
		var num = phoneElem.val();
		if (!validateNum(num)) {
			if(!keyUpPhoneListener) {
				keyUpPhoneListener = phoneElem.on('keyup', checkPhoneNum);
			}

			phoneElem.css({'border-color': '#a94442'});
			return phoneErrMsgElem.text(phoneErrMsg);
		}

		phoneElem.css({'border-color': '#cccccc'});
		phoneErrMsgElem.text('');
	}

	emailElem.on('focusout', checkEmail);
	phoneElem.on('focusout', checkPhoneNum);
});
