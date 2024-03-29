<!-- Container End -->
<div id="footer-wrap" class="container">
	<!-- 		this can be dynamic, via WP sidebar or nav menu -->
	<!-- 		i don't like using lists, btw -->
	<footer class="links row">
		<div class="three columns">
			<div class="linkcat">
				Main Menu
			</div>
			<a href="">Forum</a>
			<br/>
			<a href="">Our Team</a>
			<br/>
			<a href="">Announcements</a>
			<br/>
			<a href="">Link to us</a>
			<br/>
			<a href="">Contact</a>
			<br/>
		</div>
		<div class="three columns">
			<div class="linkcat">
				WebGeek Hub
			</div>
			<a href="">Job Board</a>
			<br/>
			<a href="">Event Calendar</a>
			<br/>
			<a href="">iPhone App</a>
			<br/>
			<a href="">Android App</a>
			<br/>
			<a href="">Facebook App</a>
			<br/>
		</div>
		<div class="three columns">
			<div class="linkcat">
				Support
			</div>
			<a href="">Help Desk</a>
			<br/>
			<a href="">Feedback</a>
			<br/>
		</div>
		<div class="three columns">
			<div class="linkcat">
				Get Connected
			</div>
			<a rel="nofollow" class="social fb" href="http://www.facebook.com/webgeek">&nbsp;</a>
			<a rel="nofollow" class="social tw" href="http://twitter.com/webgeekph">&nbsp;</a>
			<a rel="nofollow" class="social gp" href="https://plus.google.com/u/0/b/104311734781725044698/">&nbsp;</a>
			<a class="social rss" href="#"></a>
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
<script type="text/javascript">
	$('ul.top-nav li').hover(function() {
		var target = $(this).children('ul');
		$.browser.msie ? target.hide() : target.slideDown(80);
	}, function() {
		var target = $(this).children('ul');
		$.browser.msie ? target.show() : target.slideUp(80);
	});

	$(document).mousemove(function(e) {
		var offWidth = $(window).width() / 2
		var offHeight = $(window).height() / 2;
		var offX = e.pageX - offWidth;
		var offY = e.pageY - offHeight;
		$('.joinrow.row').css('background-position', (offX/30*-1) + 'px ' + (offY/40*-1) +'px');
	});

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