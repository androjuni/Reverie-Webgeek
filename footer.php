</div><!-- Container End -->
<div id="footer-wrap" class="container">
	<!-- 		this can be dynamic, via WP sidebar or nav menu -->
	<!-- 		i don't like using lists, btw -->
	<footer class="links row">
		<div class="three columns">
			<div class="linkcat">
				Main Menu
			</div>
			<a href="">Forum</a> <br/>
			<a href="">Our Team</a>  <br/>
			<a href="">Announcements</a>  <br/>
			<a href="">Link to us</a>  <br/>
			<a href="">Contact</a>  <br/>
		</div>
		<div class="three columns">
			<div class="linkcat">
				WebGeek Hub
			</div>
			<a href="">Job Board</a>  <br/>
			<a href="">Event Calendar</a>  <br/>
			<a href="">iPhone App</a>  <br/>
			<a href="">Android App</a>  <br/>
			<a href="">Facebook App</a>  <br/>
		</div>
		<div class="three columns">
			<div class="linkcat">
				Support 
			</div>
			<a href="">Help Desk</a>  <br/>
			<a href="">Feedback</a>  <br/>
		</div>
		<div class="three columns">
			<div class="linkcat">
				Get Connected
			</div>
		</div>
	</footer>
</div>
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script>
window.jQuery || document.write('<script src="<?php echo get_template_directory_uri();?>
	/js/libs / jquery - 1.6
	.4.min.js"><\/script>')
</script>
<!-- Included JS Files of Foundation -->
<script src="<?php echo get_template_directory_uri();?>/js/foundation.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/app.js"></script>
<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7]>
<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
<?php wp_footer();?>
</body> </html>