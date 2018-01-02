/* Captcha */
window.setTimeout(function () {
    $("#captcha").val(getDate());
}, 10000);

function getDate(){
	var d = new Date();	var y = d.getFullYear();	var m = d.getMonth() + 1;	var day = d.getDate();
	return y + m + day;
}
/*
Validates form values
*/
$("#contact-form").validator({  
  submitHandler: function (form) { 
    return form.valid();
  }
});

/*
Overide submit function with this
*/

/*
Sends the contact form information
*/
$("#contact-form").submit(function(e)	{
	e.preventDefault();
	var name = $("#name").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var message = $("#message").val();
	var captcha = $("#captcha").val();
	var url = $("#url").val();	
	var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone + '&message=' + message + '&captcha=' + captcha + '&url=' + url ;	
	
	$.ajax({
		type: "POST",
		url: "js/bin/sendform.php",
		data: dataString,
		success: function() {
			$('#contact-form-container').html("<div id='success-message' class='text-center'></div>");
			$('#success-message').html("<h2>Thank you for your mail!</h2>")
			.append("<p>We will be in touch soon.</p>")
			.hide()
			.fadeIn(300);
		}
	});
});

 