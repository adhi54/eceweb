<link rel="stylesheet" href="<?php echo base_url('includes/css/206792.css'); ?>" type="text/css" media="screen">
<script src="<?php echo base_url('includes/js/track.js'); ?>"></script>
<script src="<?php echo base_url('includes/js/js-quicktags.js'); ?>" type="text/javascript"></script>

<!--Textarea script starts-->
<script type="text/javascript">
	var old = '';
	function update()
	{
	  var textarea = document.f.body_ta;
	  var d = parent.dynamicframe.document;
	  if (old != textarea.value)
	  {
	    old = textarea.value;
	    d.open();
	    d.write(old);
	    d.close();
	  }
	  window.setTimeout(update, 150);
	}

	function _(name) {
		//alert(document.getElementsByName(name)[0].value);
		return document.getElementsByName(name)[0].value;
	}

	function get_checkbox_val(name) {
		if (document.getElementsByName(name)[0].checked) {
			return 1;
		} 
		return 0;
	}

	function submit_form() {
		$.post( <?php echo "'".base_url('Cms/developer')."'"; ?>,
				{'page_title': _('page_title'), 'page_path': _('page_path'), 'page_menu': _('page_menu'), 'page_parent_menu': _('page_parent_menu'), 'has_sub_items': get_checkbox_val('has_sub_items'), 'page_name': _('page_name'), 'page_heading': _('page_heading'), 'body_ta': _('body_ta')},
				function(data){
					window.location("<?php echo base_url('cms/developer'); ?>");
				});
	}
</script>
<!--Textarea script ends-->
	

<div class="ui page grid">
	
	<div class="row">
		<h3 style="color:#0404ff;">Developer Page</h3>
	</div>
	<form class="ui form" name="f" target="dynamicframe" method="post" action="">
		<div class="ui top four attached tabular menu">
			<a class="active item" data-tab="first">Page Setup</a>
			<a class="item" data-tab="second">Page Body</a>
		</div>
		<div class="ui bottom attached tab segment" data-tab="first">
			
				<div class="ui field">
					<label>Page Title</label>
					<input type="text" name="page_title">
				</div>

				
				<div class="ui field">
					<label>Page path</label>
					<input type="text" name="page_path">
				</div>
				<div class="ui two fields">
					<div class="ui field">
						<label>Page Menu</label>
						<select class="ui dropdown" name="page_menu">
							<option value="">Select</option>
							<!--<option value="techfest_projects">Techfest Projects</option>
							<option value="rd_projects">R&D Projects</option>
							<option value="labs">Labs</option>
							<option value="tools">Project Tools</option>
							<option value="developer">Developer</option>-->
							<?php echo $form_menus; ?>
						</select>
					</div>
					<!--<div class="ui field">
						<label>Page Parent Menu</label>
						<select class="ui dropdown" name="page_parent_menu">
							<option value="">Select</option>
							<option value="techfest_projects">Techfest Projects</option>
							<option value="rd_projects">R&D Projects</option>
							<option value="labs">Labs</option>
							<option value="tools">Project Tools</option>
							<option value="developer">Developer</option>
							
						</select>
					</div>-->
				</div>
				<div class="ui inline fields">
				<label>Does it have Sub items? </label>
					<div class="ui field">
						<div class="ui radio checkbox">
    						<input type="radio" name="has_sub_items" tabindex="0" class="hidden">
    						<label>Yes</label>
      					</div>
					</div>
					<div class="ui field">
						<div class="ui radio checkbox">
    						<input type="radio" checked="" name="has_sub_items" tabindex="0" class="hidden">
    						<label>No</label>
      					</div>
					</div>
				</div>
				<div class="ui field">
					<label>Page name</label>
					<input type="text" name="page_name">
				</div>

				<div class="ui field">
					<label>Page Heading</label>
					<input type="text" name="page_heading">
				</div>
		</div>
		
		<div class="ui bottom attached tab segment" data-tab="second">
			<div class="ui field">
				<label>Body</label>
				<script type="text/javascript">edToolbar('canvas');</script><div id="ed_toolbar_canvas"><span><input type="button" id="ed_h1_canvas" accesskey="1" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 0);" value="H1"><input type="button" id="ed_h2_canvas" accesskey="2" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 1);" value="H2"><input type="button" id="ed_h3_canvas" accesskey="3" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 2);" value="H3"><input type="button" id="ed_h4_canvas" accesskey="4" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 3);" value="H4"><input type="button" id="ed_p_canvas" accesskey="p" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 4);" value="P"><input type="button" id="ed_bold_canvas" accesskey="b" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 5);" value="B"><input type="button" id="ed_italic_canvas" accesskey="i" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 6);" value="I"><input type="button" id="ed_link_canvas" accesskey="a" class="ed_button" onclick="edInsertLink(&#39;canvas&#39;, 7);" value="Link"><input type="button" id="ed_img_canvas" accesskey="m" class="ed_button" onclick="edInsertImage(&#39;canvas&#39;);" value="IMG"><input type="button" id="ed_ul_canvas" accesskey="u" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 9);" value="UL"><input type="button" id="ed_ol_canvas" accesskey="o" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 10);" value="OL"><input type="button" id="ed_li_canvas" accesskey="l" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 11);" value="LI"><input type="button" id="ed_block_canvas" accesskey="q" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 12);" value="B-QUOTE"><input type="button" id="ed_close_canvas" class="ed_button" onclick="edCloseAllTags(&#39;canvas&#39;);" value="Close Tags"><input type="button" id="ed_spell_canvas" class="ed_button" onclick="edSpell(&#39;canvas&#39;);" value="Dict"><input type="button" id="ed_extra_show_canvas" class="ed_button" onclick="edShowExtra(&#39;canvas&#39;)" value="»"></span><br><span id="ed_extra_buttons_canvas" style="display: none;"><input type="button" id="ed_extra_hide_canvas" class="ed_button" onclick="edHideExtra(&#39;canvas&#39;);" value="«"><input type="button" id="ed_code_canvas" accesskey="c" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 13);" value="CODE"><input type="button" id="ed_pre_canvas" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 14);" value="PRE"><input type="button" id="ed_dl_canvas" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 15);" value="DL"><input type="button" id="ed_dt_canvas" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 16);" value="DT"><input type="button" id="ed_dd_canvas" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 17);" value="DD"><input type="button" id="ed_table_canvas" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 18);" value="TABLE"><input type="button" id="ed_tr_canvas" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 19);" value="TR"><input type="button" id="ed_td_canvas" class="ed_button" onclick="edInsertTag(&#39;canvas&#39;, 20);" value="TD"><input type="button" id="ed_footnote_canvas" accesskey="f" class="ed_button" onclick="edInsertFootnote(&#39;canvas&#39;);" value="Footnote"><input type="button" id="ed_via_canvas" accesskey="v" class="ed_button" onclick="edInsertVia(&#39;canvas&#39;);" value="Via"></span></div>

				<textarea id="canvas" name="body_ta" rows="10" cols="140">
				</textarea>

			</div>
		</div>
		<input type="submit" value="Submit" class="ui secondary submit button" onclick="submit_form();">
	</form>
</div>
<!--Preview frame-->
<iframe name="dynamicframe" id="dynamicframe" src="javascript:&#39;-&#39;" src="./Online HTML Editor_ Real time online with preview_files/saved_resource.html"></iframe>
<!--Preview frame ends-->



<!--script to enable tabs selection-->
<script>
$('.menu .item').tab();
$('.ui.accordion').accordion();
$('.ui.dropdown').dropdown();
$('#othercliked').click(function(){
	$('#showother').show();
})
$('#first').show();
</script>
<!--script to enable tabs selection ends-->

<!--Script to enable htmlize the form body context-->
<!--<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>-->
<script src="<?php echo base_url('includes/js/ga.js'); ?>"></script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-168084-13");
pageTracker._trackPageview();
} catch(err) {}</script>


<script>
(function() { // Redistats, track version 1.0
	var global_id = 2; // Global ID
	var property_id = 4; // Property ID, change this
	var url = encodeURIComponent(window.location.href.split('#')[0]);
	var referrer = encodeURIComponent(document.referrer);
	var x = document.createElement('script'), s = document.getElementsByTagName('script')[0];
	x.src = '//redistats.com/track.js?gid='+global_id+'&pid='+property_id+'&url='+url+'&referrer='+referrer;
	s.parentNode.insertBefore(x, s);
})();
</script>

<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=4600478; 
var sc_invisible=1; 
var sc_partition=56; 
var sc_click_stat=1; 
var sc_security="c7a5ea4a"; 
var sc_remove_link=1; 
</script>

<script type="text/javascript" src="<?php echo base_url('includes/js/counter.js'); ?>"></script><noscript>&lt;div
class="statcounter"&gt;&lt;img class="statcounter"
src="http://c.statcounter.com/4600478/0/c7a5ea4a/1/"
alt="wordpress stats plugin" &gt;&lt;/div&gt;</noscript>
<!-- End of StatCounter Code -->



<script>
(function() { // Redistats, track version 1.0
	var global_id = '1vuzggrg';
	var property_id = 206792;
	var url = encodeURIComponent(window.location.href.split('#')[0]);
	var referrer = encodeURIComponent(document.referrer);
	var x = document.createElement('script'), s = document.getElementsByTagName('script')[0];
	x.src = '//redistats.com/track.js?gid='+global_id+'&pid='+property_id+'&url='+url+'&referrer='+referrer;
	s.parentNode.insertBefore(x, s);
})();
</script>
<!--Htmlizing ends-->
<script type="text/javascript">
		update(); document.f.body_ta.select();
</script>