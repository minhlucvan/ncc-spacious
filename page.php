<?php
get_header(); ?>
<?php
do_action('spacious_before_body_content'); ?>
<div id="primary">
	<div id="content">

        <?php
query_posts('post_type=post&post_status=publish&posts_per_page=10&paged=' . get_query_var('paged')); ?>

	<?php

if (have_posts()): ?>

        <?php
	while (have_posts()):
		the_post(); ?>

	    <div id="post-<?php
		get_the_ID(); ?>" <?php
		post_class(); ?>>

        	<a href="<?php
		the_permalink(); ?>"><?php
		the_post_thumbnail(array(
			200,
			220
		)); ?></a>

                <h2><a href="<?php
		the_permalink(); ?>"><?php
		the_title(); ?></a></h2>


		<?php
		the_excerpt(__('Continue reading »', 'example')); ?>

            </div><!-- /#post-<?php
		get_the_ID(); ?> -->

        <?php
	endwhile; ?>

	<?php wpbeginner_numeric_posts_nav(); ?>

	<?php
else: ?>

		<div id="post-404" class="noposts">

		    <p><?php
	_e('None found.', 'example'); ?></p>

	    </div><!-- /#post-404 -->

	<?php
endif;
wp_reset_query(); ?>

	</div><!-- /#content -->
</div><!-- #primary -->
<?php spacious_sidebar_select(); ?>
<?php
get_footer(); ?>
