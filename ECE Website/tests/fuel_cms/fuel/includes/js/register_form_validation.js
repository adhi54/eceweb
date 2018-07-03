function register_click() {
	$("#ld").addClass("active");
    setTimeout(function(){
        $("#ld").removeClass("active");
    },3000);
}

	$('form')
		.form({
			on: 'blur',
			inline: true,
			fields: {
				student_id: {
					identifier: 'student_id',
					rules: [
						{
							type: 'regExp[/^B[0-9]{6}$/]',
							prompt: 'Please enter a valid Student id'
						}
					]
				},
				first_name: {
					identifier: 'fname',
					rules: [
						{
							type: 'empty',
							prompt: 'Please specify your name'
						}
					]
				},
				email: {
					identifier: 'email',
					rules: [
						{
							type: 'regExp[/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/]',
							prompt: 'Enter valid Email'
						}
					]
				},
				batch: {
					identifier: 'batch',
					rules: [
						{
							type: 'empty',
							prompt: 'Select Year of study'
						}
					]
				},
				username: {
					identifier: 'uname',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter Username'
						},
						{
							type: 'minLength[5]',
							prompt: 'Username must have atleast 5 characters'
						}
					]
				},
				password: {
					identifier: 'passwd',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter password'
						},
						{
							type: 'minLength[6]',
							prompt: 'Password must have atleast 6 characters'
						}
					]
				},
				password_match: {
					identifier: 'cpasswd',
					rules: [
						{
							type: 'match[passwd]',
							prompt: 'Password fields doesn\'t match'
						}
					]
				},
				gender: {
					identifier: 'gender',
					rules: [
						{
							type: 'empty',
							prompt: 'Select gender'
						}
					]
				},
				pincode: {
					identifier: 'pincode',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter Pincode here'
						},
						{
							type: 'minLength[6]',
							prompt: 'Enter valid pincode'
						},
						{
							type: 'number',
							prompt: 'Enter valid pincode'
						}
					]
				},
				state: {
					identifier: 'state',
					rules: [
						{
							type: 'empty',
							prompt: 'Select state from list'
						}
					]
				},
				phone: {
					identifier: 'phone',
					rules: [
						{
							type: 'number',
							prompt: 'Enter valid phone number'
						},
						{
							type: 'minLength[10]',
							prompt: 'Enter valid phone number'
						}
					]
				}
			}
		});
		//$('.ui.form').form(validationRules, { onSuccess: submitForm });

		/*function submitForm() {
			alert('Please fill this form');
			$.post("<?php echo base_url('User/register'); ?>",{},
				function(data) {
					alert();
			},"json")
		}
		*/
