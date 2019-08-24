
<div class="ui grid">

	<div class="ui one wide column">
		<div class="ui vertical icon menu">
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_full_url(); ?>&t=ECE_RGUKT-Basar" class="item"><i class="ui facebook f icon"></i></a>
			<a href="https://plus.google.com/share?url=<?php echo current_full_url(); ?>" class="item"><i class="ui google plus icon"></i></a>
			<a href="https://twitter.com/share?url=<?php echo current_full_url(); ?>&text=ECE_RGUKT-Basar" class="item"><i class="ui twitter icon"></i></a>
			<a href="#" class="item"><i class="ui pinterest icon"></i></a>
		</div>
	</div>

	<div class="ui three wide column">
		<?php echo $menu; ?>
	</div>

	<div class="ui twelve wide column">
		<center><h2 class="ui header"><?php echo $page_heading ?></h2></center>
		<?php echo $page_body; ?>
	</div>
	
</div>