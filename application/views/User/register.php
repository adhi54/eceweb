<?php $star = "<span style='color: red'>*</span>"; ?>

<script type="text/javascript">
function check_username() {
	document.getElementById('username_status_span').innerHTML = "<p style='color: brown;'>cheking..</p>";
	$.post( <?php echo "'".base_url('User/check_ajax_uname')."'"; ?> , 
			{'username': document.getElementById('uname').value},
			function( data ) {
				data = data.trim();
				if (data.localeCompare('"failure"') == 0) {
					document.getElementById('username_status_span').innerHTML = "<p style='color:green;'><i class='ui checkmark icon'></i>Username OK</p>";
				}else{
					document.getElementById('username_status_span').innerHTML = "<p style='color:red;'><i class='ui remove icon'></i>Username already exist</p>";
				}
			});
}
</script>

<?php echo $error_success_message; ?>

<h2 class="ui centered header">Student Registration Form</h2>
<div class="ui page grid">
	<form class="ui form success" method="POST">
		<div class="two fields">
			<div class="field">
				<label>University ID<?php echo($star); ?></label>
				<input placeholder="Ex:B111XXX" type="text" name="student_id" id="student_id">
			</div>
			<div class="field">
				<label>Year/Batch<?php echo($star); ?></label>
				<select class="ui dropdown" name="batch" id="batch">
					<option value=""></option>
					<option value="e1">B.Tech I<sup>st</sup> Year</option>
					<option value="e2">B.Tech II<sup>nd</sup> Year</option>
					<option value="e3">B.Tech III<sup>rd</sup> Year</option>
					<option value="e4">B.Tech IV<sup>th</sup> Year</option>
					<option value="m1">M.Tech I<sup>st</sup> Year</option>
					<option value="m2">M.Tech II<sup>nd</sup> Year</option>
				</select>
			</div>
		</div>
		
		<div class="two fields">
				<div class="field">
					<label>First name</label>
					<input name="fname" placeholder="First name" type="text" id="first_name">
				</div>
				<div class="field">
					<label>Last name</label>
					<input name="lname" placeholder="Last name" type="text" id="last_name">
				</div>
		</div>
		<div class="field">
			<label>Email<?php echo($star);?></label>
			<input placeholder="youremail@website.com" type="text" name="email" id="email">
		</div>
		<div class="field">
			<label>Username<?php echo($star);?></label>
			<input placeholder="Username" type="text" name="uname" id="uname" onblur="check_username();">
			<span id="username_status_span"></span>
		</div>
		<div class="two fields">
			<div class="field">
					<label>Password<?php echo($star);?></label>
					<input placeholder="password" type="password" name="passwd" id="passwd">
				</div>
				<div class="field">
					<label>Re-type password<?php echo($star);?></label>
					<input placeholder="Re-type password" type="password" name="cpasswd" id="cpasswd">
				</div>
		</div>
		<div class="field">
	        <label>Gender</label>
	        <select class="ui dropdown" name="gender" name="gender">
	            <option value=""></option>
	            <option value="m">Male</option>
	            <option value="f">Female</option>
	        </select>
	    </div>
		<label><strong>Adress</strong></label>
		<div class="two fields">
			<div class="field">
				<input placeholder="First Line" type="text" name="addr_first_line">
			</div>
			<div class="field">
				<input placeholder="Second Line" type="text" name="addr_second_line">
			</div>
		</div>
		
		<div class="field">
			<label>Pincode</label>
			<input type="text" name="pincode" id="pincode" placeholder="EX : 505529">
		</div>
		<div class="two fields">
			<div class="field">
				<label>State</label>
				<select class="ui fluid dropdown" name="state" id="state">
					<option value="">State</option>
						<?php $this->load->view('includes/states.php'); ?>
				</select>
	   		 </div>
	   		 <div class="field">
				<label>country</label>
				<div class="ui gray horizontal large label" size=15px>India</div>
			</div>
	    </div>

	    <label><strong>Phone number</strong></label>
	    <div class="two fields">
	    	<div class="field">
	    		<input type="text" size="3" value="+91" disabled="true">
	    	</div>
	    	<div class="field">
	    		<input placeholder="EX:9999999999" size="12" type="text" name="phone" id="phone">
	    	</div>
	    </div>
		<div class="ui slider checkbox">
				<input tabindex="0" name="public_or_private" type="checkbox" name="private" id="private">
				<label>Private</label>
		</div>
				<div class="ui left pointing label">
					Turn it ON to keep your details private
				</div>
		<br>
		<input class="ui primary submit button" value="Register" type="submit">
		<div id="ld" class="ui inverted dimmer">
        	<div class="ui text loader">Loading...</div>
    	</div>
		<div class="ui error message"></div>
			<!--<div class="ui active inline loader" style="display: none;"></div>-->
	</form>
</div>

<script type="text/javascript" src="<?php echo base_url('includes/js/register_form_validation.js'); ?>"></script>
