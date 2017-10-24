<?php
/**
 * Template Name: Front Page Template
 *
 *
 * @package Understrap
 */

get_header(); ?>

<?php if (get_theme_mod('themeslug_fheader_select') == 'value1') : ?>
	
	<!-- the static header -->
	<?php get_template_part( 'partials/header', 'static' ); ?>
		
<?php elseif (get_theme_mod('themeslug_fheader_select') == 'value2') : ?>
	
	<!-- the carousel header -->
	<?php get_template_part( 'partials/header', 'carousel' ); ?>
		
<?php elseif (get_theme_mod('themeslug_fheader_select') == 'value3') : ?>
	
	<!-- the video header -->
	<?php get_template_part( 'partials/header', 'video' ); ?>
		
<?php endif; ?>

<?php if (get_theme_mod ( 'themeslug_bar_logos_on') == 'value1'  ) : ?>
	<?php get_template_part( 'partials/bar', 'logos' ); ?>
<?php endif; ?>


<?php if (get_theme_mod ( 'themeslug_bar_announcement_on') == 'value1'  ) : ?>
	<?php get_template_part( 'partials/bar', 'announcement' ); ?>
<?php endif; ?>


<?php if (get_theme_mod ( 'themeslug_fboxes_on') == 'value1'  ) : ?>
	<?php get_template_part( 'partials/feature', 'boxes' ); ?>
<?php endif; ?>

<div class="wrapper">
	<div class="container">
		<div class="row">
		  	<div class="col-md-9 offset-md-0">
				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part( 'loop-templates/content', 'page' ); ?>
				
						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
				
				<?php endwhile; // end of the loop. ?>
				
				&nbsp;
				
				<div class="row">
					<?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<div class="col-md-6">
						<h5><a href="<?php the_permalink() ?>" class="recent-post-title"><?php the_title(); ?></a></h5>
						<img src="<?php the_post_thumbnail_url( $size ); ?>" alt="" style="margin-bottom: .5rem;" />
						<small><?php the_excerpt(); ?></small>
					</div>
						<?php 
						endwhile;
						wp_reset_postdata();
						?>
				</div>
				
				<a href="<?php bloginfo('url'); ?>/blog" class="btn btn-primary">Read Our Blog</a>
			
			</div>
			
			<div id="homeSidebar" class="col-10 offset-1 col-md-3 offset-md-0 clearfix">
				<div class="review-us">
					<a href="<?php bloginfo('url'); ?>/reviews" title="Submit a review for <?php bloginfo('name'); ?>">
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br />
						Review Us Online
					</a>
				</div><!-- /.review-us -->
			</div>
		</div>
	</div><!-- /.container -->
</div><!-- /.wrapper -->

<?php get_footer(); ?>