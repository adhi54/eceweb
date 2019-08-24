<div class="ui page grid">
	<form class="ui form" method="POST" action="">
		<div class="ui field">
			<label>
				Cuurent password
			</label>
			<input type="password" name="current_pass" id="current_pass">
		</div>
		<div class="ui field">
			<label>
				New password
			</label>
			<input type="password" name="new_pass" id="new_pass">
		</div>
		<div class="ui field">
			<label>
				Confirm password
			</label>
			<input type="password" name="confirm_pass" id="confirm_pass">
		</div>
		<input class="ui primary submit button" value="Change my Password" type="submit">
	</form>
</div>

<script type="text/javascript">
	$('form')
		.form({
			on: 'blur',
			inline: true,
			fields: {
				current_pass: {
					identifier: 'current_pass',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter current password'
						}
					]
				},
				new_pass: {
					identifier: 'new_pass',
					rules: [
						{
							type: 'empty',
							prompt: 'Enter new password'
						},
						{
							type: 'minLength[6]',
							prompt: 'Password should be atleast 6 characters'
						}
					],
				},
				condirm_pass: {
					identifier: 'confirm_pass',
					rules: [
						{
							type: 'match[new_pass]',
							prompt: 'Password fields does not match'
						}
					]
				}
			}
		});
</script>