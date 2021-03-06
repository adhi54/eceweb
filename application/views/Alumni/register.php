
<div class="ui grid">
	<div class="ui three wide column">
		
	</div>
	<div class="ui eight wide column">
	<h2 class="ui centered header">Alumni Registration Form</h2><br>
	<form class="ui form">

		<!--Get Personel Information form-->
		<h3 class="ui header underlined"><i class="ui inverted blue user icon"></i> Personal Information </h3>
		<div class="ui two fields">
			<div class="field">
				<lable>First Name</lable>
				<input placeholder="First Name" type="text" name="first_name" id="first_name">
			</div>
		
			<div class="ui field">
				<lable>Last Name</lable>
					<input placeholder="Second Name" type="text" name="last_name" id="last_name">
			</div>
		</div>

		<div class="ui two fields">
			<div class="ui field">
				<lable>University ID No:</lable>
					<input placeholder="First Name" type="text" name='student_id' id='student_id'>
			</div>
		</div>
		<div class="ui two fields">
			<div class="ui field">
				<lable>Gender</lable>
	  				<select class="ui fluid dropdown" name='gender' id='gender'>
	    					<option value="">--Select--</option>
	  					<option value="M">Male</option>
	  					<option value="F">Female</option>
	  				</select>
			</div>
			<div class="ui field">
  				<lable>Marital Status</lable>
	  				<select class="ui fluid dropdown" name='mstatus' id='mstatus'>
	    					<option value="">--Status--</option>
		  					<option value="M">Married</option>
		  					<option value="F">Un Married</option>
	  				</select>
			</div>
		</div>
		<!-- Images uploading-->
		<div class="ui field">
			<label>Photo</label>
			<input type="file" name="photo" id="photo">
		</div>

		
		<!--Get Present status-->
		<!--<h3 class="ui header underlined">Present Status</h3>
		<div class="ui field">
			<lable>Employment Type :</lable>
			<select class="ui fluid dropdown" name='estatus' id='estatus'>
				<option value="">--Select--</option>
				<option value="1">Salaried</option>
				<option value="2">Entrepreneur</option>
				<option value="3">HouseMaker</option>
				<option value="4">Yet to be Placed</option>
			</select>
		</div>-->

		<!--Educational details at RGUKT-Basar-->
		<h3 class="ui header underlined"><i class="ui inverted blue student icon"></i> Educational Status @ Rgukt Basar:</h3>
		<div class="ui three fields">
			<div class="field">
				<lable>Degree:</lable>
	  				<select class="ui fluid dropdown" name='degree' id='degree'>
						<option value="">--Select--</option>
						<option value="B.tech">B.tech</option>
						<option value="M.tech">M.tech</option>
					</select>
			</div>
			<div class="field">
				<lable>Branch:</lable>
    			<select class="ui fluid dropdown" name="branch" id="branch">
					<option value="">--Select--</option>
					<option value="Chem">Chemical Engineering</option>
					<option value="CE">Civil Engineering</option>
					<option value="Cse">Computer Science Engineering</option>
					<option value="ECE">Electronics and Communication Engineering</option>
					<option value="EE">Electrical Engineering</option>
					<option value="ME">Mechanical Engineering</option>
					<option value="MME">Material and Metalargical Engineering</option>
				</select>
			</div>
			<div class="field">
				<lable>Year of completion:</lable>
    			<select class="ui fluid dropdown" name="completeyear" id="completeyear">
					<option value="">--Selelct--</option>
					<option value="1">2013-14</option>
					<option value="2">2014-15</option>
					<option value="3">2015-16</option>
				</select>
			</div>
		</div>

		<!--Get Employment Details-->
		<h3 class="ui header underlined"><i class="ui inverted blue suitcase icon"></i> Employment Details</h3>
		<div class="ui field">
			<label>Position</label>
			<input placeholder="Position" type="text" name="emp_position" id="emp_postion">
		</div>
		<div class="ui field">
			<label>Working domain</label>
			<input placeholder="Working domain" type="text" name="emp_domain" id="emp_domain">
		</div>
		<div class="ui field">
			<label>Work location</label>
			<input placeholder="Work location" type="text" name="emp_location" id="emp_location">
		</div>

		<!--Special achievements-->
		<h3 class="ui header underlined">Special Achievements</h3>
		<div class="ui field">
			<label>Achievements</label>
			<input type="text" name="achievements" id="achievements">
		</div>
		<div class="ui field">
			<label>Long Term Goal</label>
			<input type="text" name="long_term_goal" id="long_term_goal">
		</div>

		<!--higher Studies details-->
		<h3 class="ui header underlined"><i class="ui inverted blue university icon"></i>Higher Studies details<span color='blue'>(If Any)</span></h3>
		<div class="ui field">
			<label>Present Status</label>
			<select class="ui fluid dropdown" name="p_status" id="p_status">
				<option value="">--Select--</option>
				<option value="1">Persuing</option>
				<option value="2">Completed</option>
			</select>
		</div>
	    <div class="ui field">
	    	<label>University Name</label>
	    	<input type="text" name="university_name" id="university_name">
	    </div>
	    <div class="ui field">
	   		 <label>City</label>
	    	 <input type="text" name="u_city" id="u_city">
	    </div>
	    <div class="field">
				<lable>State:</lable>
    			<select class="ui fluid dropdown" name="u_state" id="u_state">
					<option value="">--Select--</option>
					<option value="1">Telangana</option>
					<option value="2">Andrapradesh</option>
					<option value="3">Other</option>
				</select>
		</div>
	    <div class="ui field">
	   		 <label>Country</label>
	    	 <input type="text" name="u_country" id="u_country">
	    </div>
	    <!--Present Residential Details-->
	    <h3 class="ui header underlined"><i class="ui inverted blue home icon"></i> Present Residential Details</h3>
	    <div class="ui field">
	   		 <label>City</label>
	    	 <input type="text" name="p_city" id="p_city">
	    </div>
	    <div class="ui field">
			<lable>State</lable>
			<select class="ui fluid dropdown" name="p_state" id="p_state">
				<option value="">--Select--</option>
				<option value="1">Telangana</option>
				<option value="2">Andrapradesh</option>
				<option value="3">Other</option>
			</select>
		</div>
	    <div class="ui field">
	   		 <label>Country</label>
	    	 <input type="text" name="p_country" id="p_country">
	    </div>
	    <div class="ui two fields">
		    <div class="ui field">
		   		 <label>Phone1(office)</label>
		    	 <input type="text" name="off_phone" id="off_phone">
		    </div>
		    <div class="ui field">
		   		 <label>Phone2(Residence)</label>
		    	 <input type="text" name="res_phone" id="res_phone">
		    </div>
		</div>
	    <!--Login Details-->
	    <h3 class="ui header underlined"><i class="ui inverted blue users icon"></i> Login Details</h3>
	    <div class="ui field">
	   		 <label>User name</label>
	    	 <input type="text" name="user_name" id="user_name">
	    </div>
	    <div class="ui two fields">
	    	<div class="ui field">
	   		 	<label>Password</label>
	    	 	<input type="text" name="user_password" id="user_password">
	    	</div>
	    <div class="ui field">
	   		 <label>Confirm Password</label>
	    	 <input type="text" name="confirm_password" id="confirm_password">
	    </div>
	    </div>

		<!--End of Alumni form-->
		<input type="submit" name="sumbit" value="Submit" class="ui primary submit button">
	</form>
	</div>
	<div class="ui five wide column">
		
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url('includes/js/alumni_register_form_validation.js') ?>"></script>
