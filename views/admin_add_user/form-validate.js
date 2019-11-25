// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='new_user_form']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      fullname: "required",
      username: "required",
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      fullname: "Please enter your fullname",
      username: "Please enter your username",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
					var full_name = $("#fullname").val();
					var user_name = $("#username").val();
					var pass_word = $("#password").val();
					var privelage = $('input[name=privelage]:checked',).val();
					var ajaxurl = 'add_new_user_sql.php',
						data = {
							'full_name': full_name,
							'user_name': user_name,
							'pass_word': pass_word,
							'privel_age': privelage
						};
					$.post(ajaxurl, data, function(response) {
						if(response == "success"){
							$("#result").html("<div class='alert alert-success' role='alert'> New User Successfully added </div>");
						}else{
							$("#result").html("<div class='alert alert-danger' role='alert'> New User adding Failed </div>");
						}
						document.getElementById('fullname').value = '';
						document.getElementById('username').value = '';
						document.getElementById('password').value = '';
					});
      $(form).ajaxSubmit();
    }
  });
});
