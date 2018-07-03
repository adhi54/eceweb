<?php

$root = $_SERVER['DOCUMENT_ROOT'];
$que_ans = "questions";

//if($mode == 1) $que_ans = "answers";

$content1 = "<object width='900' height='800' data='".base_url("storage/CompetitiveExams/".$exam."/questions/".$year.".pdf")."'></object>";
$content2 = "<object width='900' height='800' data='".base_url("storage/CompetitiveExams/".$exam."/answers/".$year.".pdf")."'></object>";
if (! file_exists($root."/ECE/storage/CompetitiveExams/".$exam."/questions/".$year.".pdf") )
	$content1 = "<h4 class='ui header'>Sorry, The paper you are looking for is not exist<h4>";

if (! file_exists($root."/ECE/storage/CompetitiveExams/".$exam."/answers/".$year.".pdf") )
	$content2 = "<h4 class='ui header'>Sorry, The paper you are looking for is not exist<h4>";

$index = "";
foreach ($yearIndex as $year) {
	$index .= "<div class='ui vertical segment' style='font-size: 12px;'><a href='/ECE/index.php/CompetitiveExams/exams/".$exam."/".$year."'>".$examstr."-ECE ".$year."</a></div>";
}
?>

<div class="ui grid">
	<div class="two wide column"></div>
	<div class="two wide column">
		<div class="ui segment">
			<?php echo $index; ?>
		</div>
	</div>
	<div class="twelve wide column">
		<div class="ui top attached tabular menu">
			<a class="active item" data-tab="first">Question Paper</a>
			<a class="item" data-tab="second">Answer Paper</a>
		</div>
		<div class="ui bottom attached active tab segment" data-tab="first">
			<?php echo $content1; ?>
		</div>
		<div class="ui bottom attached tab segment" data-tab="second">
			<?php echo $content2; ?>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.tabular.menu .item').tab({history:false});
	});
</script>