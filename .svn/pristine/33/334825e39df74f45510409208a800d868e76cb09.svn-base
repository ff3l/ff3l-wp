<?php get_header(); ?>
	<div id="main">

		<section id="one">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<header class="major">
				<h1><?php the_title(); ?></h1>
			</header>
			<h4>Posted on <?php the_time('F jS, Y') ?></h4>
			<p><?php the_content(__('(more...)')); ?></p>
			<hr> <?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		</section>

	</div>
<?php get_footer(); ?>