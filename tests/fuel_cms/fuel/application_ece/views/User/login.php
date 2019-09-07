<div class="ui page grid">
	<div class="row">
		<h3 class="ui dividing centered header">Login Form</h3>
	</div>
	<div class="row">
			<form class="ui form" method="POST">
				<!--<div class="four wide field">
					<label>Student ID</label>
					<div class="ui left icon input">
						<input placeholder="University ID" type="text" name="student_id" id="student_id">
						<i class="user icon"></i>
					</div>
					
			    </div>-->

		    	<div class="four wide field">
		    	<div class="ui horizontal divider">or</div>
					<label>Username</label>
					<div class="ui left icon input">
						<input placeholder="Username" type="text" name="username" id="username">
						<i class="user icon"></i>
					</div>
			    </div>
				<div class="four wide field">
					<label>Password</label>
					<div class="ui left icon input">
						<input placeholder="password" type="password" name="password" id="password">
				  		<i class="lock icon"></i>
					</div>
					<a href="<?php echo base_url('User/forgotPassword'); ?>" style="text-align: right;">forgot password</a>
				</div>
				
				<input class="ui primary submit button" value="Login" type="submit">
				<div id="ld" class="ui inverted dimmer">
        			<div class="ui text loader">Logging In...</div>
    			</div>
				<div class="ui error message"></div>
			</form>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url('includes/js/login_form_validation.js'); ?>"></script>