<div class="news-scroll" onMouseover="scrollspeed=0" onMouseout="scrollspeed=current" OnLoad="NewsScrollStart();">

	<!-- START NEWS FEED -->
	<div id="NewsDiv">
		<div class="scroll-text-if">

		<!-- SCROLLER CONTENT STARTS HERE -->

			<span class="scroll-title-if">
			News Scroller<br>
			</span>

			Add your news or other current info in this text window. This window uses an HTML IFrame and Javascript for the scrolling animation. 

			<a href="news.htm">Sample Link</a>.

			<br><br>

			<span class="scroll-title-if">
			Article Title<br>
			</span>

			Add your news or other current info in this text window. This window uses an HTML IFrame and Javascript for the scrolling animation. 

			<a href="news.htm">Sample Link</a>.

			<br><br>

			<span class="scroll-title-if">
			Article Three<br>
			</span>

			Add your news or other current info in this text window. This window uses an HTML IFrame and Javascript for the scrolling animation. 

			<a href="news.htm">Sample Link</a>.

			<br><br>

			<span class="scroll-title-if">
			Article Four<br>
			</span>

			Add your news or other current info in this text window. This window uses an HTML IFrame and Javascript for the scrolling animation. 

			<a href="news.htm">Sample Link</a>.

			<br>

			<!-- END SCROLLER CONTENT -->

		</div>
	</div>
	<!-- END NEWS FEED -->

</div>
<!-- YOU DO NOT NEED TO EDIT BELOW THIS LINE -->

<script type="text/javascript">

var startdelay 		= 2; 		// START SCROLLING DELAY IN SECONDS
var scrollspeed		= 1.1;		// ADJUST SCROLL SPEED
var scrollwind		= 1;		// FRAME START ADJUST
var speedjump		= 30;		// ADJUST SCROLL JUMPING = RANGE 20 TO 40
var nextdelay		= 0; 		// SECOND SCROLL DELAY IN SECONDS 0 = QUICKEST
var topspace		= "2px";	// TOP SPACING FIRST TIME SCROLLING
var frameheight		= 176;		// IF YOU RESIZE THE CSS HEIGHT, EDIT THIS HEIGHT TO MATCH

current = (scrollspeed);

function HeightData(){
	AreaHeight=dataobj.offsetHeight
	if (AreaHeight===0){
		setTimeout("HeightData()",( startdelay * 1000 ))
	}
	else {
		ScrollNewsDiv()
	}
}

function NewsScrollStart(){
	dataobj=document.all? document.all.NewsDiv : document.getElementById("NewsDiv")
	dataobj.style.top=topspace
	setTimeout("HeightData()",( startdelay * 1000 ))
}

function ScrollNewsDiv(){
	dataobj.style.top=scrollwind+'px';
	scrollwind-=scrollspeed;
	if (parseInt(dataobj.style.top)<AreaHeight*(-1)) {
		dataobj.style.top=frameheight+'px';
		scrollwind=frameheight;
		setTimeout("ScrollNewsDiv()",( nextdelay * 1000 ))
	}
	else {
		setTimeout("ScrollNewsDiv()",speedjump)
	}
}

</script>

