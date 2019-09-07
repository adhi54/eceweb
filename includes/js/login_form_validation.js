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
							type: 'empty',
							prompt: 'Student ID should not be empty'
						},
						{
							type: 'minLength[7]',
							prompt: 'Student ID must have 7 characters'
						},
						{
							type: 'regExp[/^B[0-9]*$/]',
							prompt: 'Please enter a valid Student id'
						}
					]
				},
				username: {
					identifier: 'username',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter username here'
						}
					]
				},
				password: {
					identifier: 'password',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter Password'
						}
					]
				}
			}
		});