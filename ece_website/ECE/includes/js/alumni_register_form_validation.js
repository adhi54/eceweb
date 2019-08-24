$('form')
		.form({
			on: 'blur',
			inline: true,
			fields: {

/*Personal Information*/

				first_name: {
					identifier: 'first_name',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter your first name here'
						}
					]
				},

				student_id: {
					identifier: 'student_id',
					rules: [
						{
							type: 'regExp[/^B[0-9]{6}$/]',
							prompt: 'Enter a valid ID'						
						}
					]				
				},

				gender: {
					identifier: 'gender',
					rules: [
						{
							type: 'empty',
							prompt: 'Select your gender'
						}
					]				
				},
				
				mstatus: {
					identifier: 'mstatus',
					rules: [
						{
							type: 'empty',
							prompt: 'Select your marital status'
						}
					]
				},

/*Educational status @Basar*/
								
				degree: {
					identifier: 'degree',
					rules: [
						{
							type: 'empty',
							prompt: 'Select your degree type'
						}
					]
				},
				
				branch: {
					identifier: 'branch',
					rules: [
						{
							type: 'empty',
							prompt: 'Select your Branch/Department'
						},
					]
				},

				completeyear: {
					identifier: 'completeyear',
					rules: [
						{
							type: 'empty',
							prompt: 'Select your completed year'
						},
					]
				},

/*For employment detalis*/

				emp_position: {
					identifier: 'emp_position',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter your employment position'
						},
					]
				},
				
				emp_domain: {
					identifier: 'emp_domain',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter your working domain'
						},
					]
				},

				emp_location: {
					identifier: 'emp_location',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter your working location'
						},
					]
				},

/*Special Achievements*/
				achievements: {
					identifier: 'achievements',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter your Achievements'
						},
					]
				},

				long_term_goal: {
					identifier: 'long_term_goal',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter your Long term goal'
						},
					]
				},

/*Higher Studies details*/

				p_status: {
					identifier: 'p_status',
					rules: [
						{
							type: 'empty',
							prompt: 'Select your presenrt status'
						},
					]
				},

				university_name: {
					identifier: 'university_name',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter your present University Name'
						},
					]
				},

				u_city: {
					identifier: 'u_city',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter your present Education City'
						},
					]
				},

				u_state: {
					identifier: 'u_state',
					rules: [
						{
							type: 'empty',
							prompt: 'Select your present Education State'
						},
					]
				},

				u_country: {
					identifier: 'u_country',
					rules: [
						{
							type: 'empty',
							prompt: 'Select your present Education Country'
						},
					]
				},

/* Present Residential Details*/

				p_city: {
					identifier: 'p_city',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter your present Residential City'
						},
					]
				},

				p_state: {
					identifier: 'p_state',
					rules: [
						{
							type: 'empty',
							prompt: 'Select your present Residential State'
						},
					]
				},

				p_country: {
					identifier: 'p_country',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter your present Residential Country'
						},
					]
				},

				off_phone: {
					identifier: 'off_phone',
					rules: [
						{
							type: 'empty',
							prompt: 'Please enter your present Office Phone'
						},
					]
				},

				res_phone: {
					identifier: 'res_phone',
					rules: [
						{
							type: 'empty',
							prompt: 'Please enter your present Residential Phone'
						},
					]
				},

/*Login Details*/

				user_name: {
					identifier: 'user_name',
					rules: [
						{
							type: 'empty',
							prompt: 'Please enter your User Name'
						},
					]
				},

				user_password: {
					identifier: 'user_password',
					rules: [
						{
							type: 'empty',
							prompt: 'Please enter your Password'
						},
					]
				},

				confirm_password: {
					identifier: 'confirm_password',
					rules: [
						{
							type: 'empty',
							prompt: 'Please confirm your password'
						},
					]
				},



			}
		});
