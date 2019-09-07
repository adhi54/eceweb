$('form')
		.form({
			on: 'blur',
			inline: true,
			fields: {
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
				
				batch: {
					identifier: 'batch',
					rules: [
						{
							type: 'empty',
							prompt: 'Select your Year/Batch'
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
				
				estatus: {
					identifier: 'estatus',
					rules: [
						{
							type: 'empty',
							prompt: 'Select your employment type'
						}
					]
				},
				
				degree: {
					identifier: 'degree',
					rules: [
						{
							type: 'empty',
							prompt: 'Select your degree'
						},
					]
				}

			}
		});
