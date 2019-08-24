<script type="text/javascript">
	function show_hide_input() {
		if ($('#domain').value == 'others') {
			$('#other_input').style.display = 'block';
		}
		
	}
</script>
<div class="ui page grid">
	<div class="ui top four attached tabular menu">
		<a class="item" data-tab="first">Search</a>
		<a class="item" data-tab="second">Recent Posts</a>
		<a class="item" data-tab="third">Submit Question</a>
		<a class="item" data-tab="fourth">See All</a>
	</div>
	<div class="ui bottom attached tab segment" data-tab="first">
		<center>
		<div class="ui action input">
			<input placeholder="Search..." type="text" style="width: 300px;">
			<button class="ui blue button">Search</button>
		</div>
		</center>
	</div>
	<div class="ui bottom attached tab segment" data-tab="second">
	  <!--accordian -->
		<center>
			<?php echo $recent_posts; ?>
			<!--<div class="ui styled fluid accordion" style="width: 600px;">
				<div class="title" style="margin-right: 500px;">
					<i class="dropdown icon"></i>
						Basics
				</div>
				<div class="content">
					<p class="transition hidden">para about basics</p>
				</div>
			</div>
			<br>
			<div class="ui styled fluid accordion" style="width: 600px;">
				<div class="title" style="margin-right: 430px;">
					<i class="dropdown icon"></i>
						Communications

				</div>
				<div class="content">
					<p class="transition hidden">para about Communications</p>
				</div>
			</div>
			<br>
			<div class="ui styled fluid accordion" style="width: 600px;">
				<div class="title" style="margin-right: 510px;">
					<i class="dropdown icon"></i>
						VLSI

				</div>
				<div class="content">
					<p class="transition hidden">para about VLSI</p>
				</div>
			</div>
			<br>
			<div class="ui styled fluid accordion" style="width: 600px;">
				<div class="title" style="margin-right: 380px;">
					<i class="dropdown icon"></i>
						Signal & Image Process

				</div>
				<div class="content">
					<p class="transition hidden">para about Signal & Image Process </p>
				</div>
			</div>
			<br>
			<div class="ui styled fluid accordion" style="width: 600px;">
				<div class="title" style="margin-right: 360px;">
					<i class="dropdown icon"></i>
						Embedded Systems & IoT

				</div>
				<div class="content">
					<p class="transition hidden">para about Embedded Systems & IoT</p>
				</div>
			</div>
			-->
		</center>
	<!--accordian-->
	</div>

	<div class="ui bottom attached tab segment" data-tab="third">
		<br>
		<form class="ui form" method="POST">
			<div class="two fields">
				<div class="ui three wide field">
					<label>Domain</label>
					<select class="ui dropdown" name="domain" onchange="show_hide_input();" id="domain">
						<i class="dropdown icon"></i>
						<option class="default text" value="">Select...</option>
						<option value="Basics">Basics</option>
						<option value="Communications">Communications</option>
						<option value="VLSI">VLSI</option>
						<option value="Singal & Image Processing">Singal & Image Processing</option>
						<option value="Embedded Systems & IoT">Embedded Systems & IoT</option>
						<option value="others">Others</option>
					</select>
				</div>
				<div class="ui field" >
					<input type="text" name="other_domain" style="display: none;" id="other_input">
				</div>
			</div>
		
			<div class="ui field" style="margin-right: 100px;">
				<label>Question Title</label>
				<textarea rows="2" style="width: 300px;" name="title"></textarea>
			</div>

			<div class="ui field" style="margin-right: 160px;">
					<label>Question Description</label>
					<textarea rows="5" style="width: 300px;" name="desc"></textarea>
			</div>
			<button class="ui centered blue submit button">Submit</button>
		</form>
	</div>

</div>

<script>
$('.menu .item').tab();
$('.ui.accordion').accordion();
$('.ui.dropdown').dropdown();
$('#othercliked').click(function(){
	$('#showother').show();
})


</script>