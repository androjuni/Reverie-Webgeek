<?php get_header(); ?>
<div id="content-wrap" class="container">
	<!-- Row for main content area -->
	<div id="content" class="row">
	
		<div id="main" class="eight columns" role="main">
			<div class="post-box">
				<?php get_template_part('loop', 'single'); ?>
			</div>
		</div><!-- /#main -->

		<aside id="sidebar" class="four columns" role="complementary">
			<div class="sidebar-box">
				<?php get_sidebar(); ?>
			</div>
		</aside><!-- /#sidebar -->

	</div><!-- End main row -->
</div>
	
<?php get_footer(); ?>