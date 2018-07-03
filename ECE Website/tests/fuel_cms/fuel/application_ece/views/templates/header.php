<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta charset="utf-8" name="ECE" description="ECE Website"/>
		<link href='//fonts.googleapis.com/css?family=Almendra Display' rel='stylesheet'>
		<link href='//fonts.googleapis.com/css?family=Ewert' rel='stylesheet'>
		
		<link rel="stylesheet" href="<?php echo base_url('includes/semantic/dist/semantic.min.css'); ?>"/>
		<link rel="stylesheet" href="<?php echo base_url('includes/css/header.css'); ?>"/>
		<script type="text/javascript" src="<?php echo base_url('includes/js/jquery.min.js'); ?>"> </script>
		<script type="text/javascript" src="<?php echo base_url('includes/semantic/dist/semantic.min.js'); ?>"> </script>
	</head>

<body>

	<div class="ui main header">
		<div id="">
			<?php
			if (isset($this->session->userdata['isLoggedIn']) && $this->session->userdata['isLoggedIn'] == TRUE) { ?> 
				<div class="ui simple dropdown button right floated" id="log_buttons">
					<i class="ui user icon"></i><?php echo $this->session->userdata['username']; ?> <i class="ui right dropdown icon"></i>
					<div class="ui menu">
						<a href="<?php echo base_url('User/myProfile'); ?>" class="item">My Profile</a>
						<a href="<?php echo base_url('User/changePassword'); ?>" class="item">Change Password</a>
						
						<a href="<?php echo base_url('User/logout'); ?>" class="item">Logout</a>
					</div>
				</div>
			<?php
			}else{ ?>
				<div id="log_buttons" class="ui mini right floated buttons" tabindex="0">
					<a class="ui olive button" href="<?php echo base_url('User/login');?>"><i class="sign in icon"></i>Login</a>
						<div class="or"></div>
					<a class="ui olive button" href="<?php echo base_url('User/register');?>"><i class="add user icon"></i>Register</a>
				</div>
			<?php 
			} ?>
			<br>
			<div>
				<img src="ece_logo.jpg" alt="ece logo" width="10%" height="110px" style="float:left;background-opacity:0;margin-left:10px;margin-bottom:10px;">
			</div>
			<div id="v4">
				<h2 style="font-size:25px;margin-top: 20px;font-family: 'Almendra Display';"> Department of</h2>
				<h1 style="font-size: 30px;font-family: 'Ewert';margin-left: 100px;"> Electronics & Communiction Engineering</h1>
				<p style="float: right;color:white;margin-right: 350px;font-size: 18px;font-family:'URW Chancery L';">--Let's integrate the world...!!!</p>

			</div>
		<br>
			<div class="ui ten compact menu buttons">
				<div class="ui container">
			  		<a class="ui olive button" href="<?php echo base_url('Home/index'); ?>">
						<i class="home icon"></i>
			    			Home
			 		 </a>
					<div class="ui simple dropdown olive button">
			   		 	<i class="calendar icon"></i>ACADEMICS<i class="dropdown icon"></i>
						<div class="menu">
							<div class="ui simple drop down item">
								<i class="dropdown icon"></i>Basics

								<div class="menu">
									<a class="ui item">Network Theory</a>
									<a class="ui item">Basic Electronics</a>
								</div>
							</div>

							<div class="ui simple dropdown item">
								<i class="dropdown icon"></i>Communications
								<div class="menu">
									<a class="ui item">AC&DC</a>
									<a class="ui item">RF Technology</a>
									<a class="ui item">Wireless communication</a>
								</div>
							</div>
							<div class="ui item">
								<i class="dropdown icon"></i>Image&Signal processing

								<div class="menu">
									<a class="ui item">Signals&systems</a>
									<a class="ui item">DSP</a>
									<a class="ui item">DIP</a>
								</div>
							</div>
							<div class="ui item">
								<i class="dropdown icon"></i>IOT&Embedded systems

								<div class="menu">
									<a class="ui item">MC&MP</a>
									<a class="ui item">ESIOT</a>
								</div>
							</div>
							<div class="ui item"><i class="dropdown icon"></i>VLSI

								<div class="menu">
									<a class="ui item">Analog Electronics</a>
									<a class="ui item">EDC/SCD</a>
									<a class="ui item">Digital Electronics</a>
								</div>
							</div>
						</div>
					</div>

					<a class="ui olive button" href="<?php echo base_url('Forum/index'); ?>"> <i class="signal icon"></i>Forum</a>
					<div class="ui simple dropdown olive button">
						<i class="microchip icon"></i>Projects<i class="dropdown icon"></i>
						<div class="ui menu">
							<a href="#" class="simple dropdown item">Techfest Projects</a>
							<a href="#" class="simple dropdown item">R&D Projects</a>
						</div>
					</div>
					<a class="ui olive button"><i class="lab icon"></i>Labs</a>
					<div class="ui simple olive dropdown button">
						<i class="book icon"></i>Competitive Exams<i class="dropdown icon"></i>
						<div class="ui menu">
							<a href="<?php echo base_url('CompetitiveExams/exams/gate'); ?>" class="simple dropdown item">GATE</a>
							<a href="<?php echo base_url('CompetitiveExams/exams/ies'); ?>" class="simple dropdown item">IES</a>
							<a href="<?php echo base_url('CompetitiveExams/exams/isro'); ?>" class="simple dropdown item">ISRO</a>
							<a href="<?php echo base_url('CompetitiveExams/exams/jto'); ?>" class="simple dropdown item">JTO</a>
						</div>
					</div>
					<a href="#" class="ui olive button"><i class="student icon"></i> Alumni</a>
					<a class="ui olive button"><i class="info circle icon"></i>About ECE</a>

			  		<a class="ui medium right icon input"><input placeholder="Search" type="text"><i class="search icon"></i></a>
				</div>
		  
			</div>
		  
		</div>
		<div class="ui divider"></div>
	</div>