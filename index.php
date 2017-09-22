<?php
/**
    the main template file
 */

get_header(); ?>

  <div class="container">
      <div class="row">
    <div id="content" role="main">

			<?php 
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                	get_template_part( 'content-single', get_post_format() );
                
                	if ( comments_open() || get_comments_number() ) :
                	  comments_template();
                	endif;
                
                endwhile; ?>
			<nav>
	<ul class="pager">
		<li><?php next_posts_link( 'Previous' ); ?></li>
		<li><?php previous_posts_link( 'Next' ); ?></li>
	</ul>
</nav>
			<?php endif; ?>
    </div><!-- #content -->
  </div><!-- #primary -->

    
<?php
/**
    the main template file
 */

get_footer(); ?>