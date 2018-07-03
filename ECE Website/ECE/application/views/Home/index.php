   <!-- 
    <link href="<?php echo base_url('includes/css/metro.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('includes/css/news_scroll.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('includes/css/ece_home_window.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('includes/css/metro-icons.css'); ?>" rel="stylesheet">
-->
    <script src="<?php echo base_url('includes/js/metro.js'); ?>"></script>

<div class="example" data-text="">
    <div class="grid">
        <div class="cell">
            <div class="carousel square-bullets" data-height="200" data-role="carousel" data-direction="right">
                <div class="slide"><img src="<?php echo base_url('storage/Home/home_1.jpg'); ?>" data-role="fitImage" data-format="fill"></div>
                <div class="slide"><img src="<?php echo base_url('storage/Home/home_2.jpg'); ?>" data-role="fitImage" data-format="fill"></div>
                <div class="slide"><img src="<?php echo base_url('storage/Home/home_3.jpg'); ?>" data-role="fitImage" data-format="fill"></div>
                <div class="slide"><img src="<?php echo base_url('storage/Home/home_4.jpg'); ?>" data-role="fitImage" data-format="fill"></div>
                <div class="slide"><img src="<?php echo base_url('storage/Home/home_5.jpg'); ?>" data-role="fitImage" data-format="fill"></div>
            </div>
        </div>
    </div>
</div>

    <br><br>
    <br><br>

<div class="grid">
    <div class="row cells2">
        <div class="cell">

        <!-- START NEWS WINDOW -->
            <div id="news_window">
	            <div class="news_window-title">
	            ECE@RGUKT<br>
	            </div>
                <?php  $this->load->view('includes/about_ece_at_rgukt'); ?>

                <!--<iframe name="NewsIFrame" src="includes/ece_window.html" frameborder="0" scrolling="no"></iframe>-->
            </div>

        <!-- END NEWS WINDOW -->
        </div>
        <div class="cell">
        	<div id="news_iframe_scroll">
        		<div class="news_scroll-title">
        		News and Updates<br>
        		</div>
        		<!--<iframe name="NewsIFrame" src="includes/news_scroll.html" frameborder="0" scrolling="no"></iframe>-->
                <?php  $this->load->view('includes/recent_activities'); ?>
        	</div>
        </div>

    </div>
</div>