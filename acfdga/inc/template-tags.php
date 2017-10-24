<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package understrap
 */


if ( ! function_exists( 'understrap_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function understrap_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>, <time class="updated" datetime="%3$s">' . __( ' Edited %4$s', 'understrap' ) . '</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', 'understrap' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'understrap' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';

}
endif;

if ( ! function_exists( 'understrap_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function understrap_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( __( ', ', 'understrap' ) );
		if ( $categories_list && understrap_categorized_blog() ) {
			printf( '<small><span class="cat-links">' . __( 'Posted in %1$s', 'understrap' ) . '</span></small>', $categories_list );
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'understrap' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . __( 'Tagged %1$s', 'understrap' ) . '</span>', $tags_list );
		}
	}
	// uncomment if you want to leave comment on blog
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		//echo '<span class="comments-link">';
		//comments_popup_link( __( 'Leave a comment', 'understrap' ), __( '1 Comment', 'understrap' ), __( '% Comments', 'understrap' ) );
		//echo '</span>';
	}

		edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'understrap' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function understrap_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'understrap_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'understrap_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so understrap_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so understrap_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in understrap_categorized_blog.
 */
function understrap_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'understrap_categories' );
}
add_action( 'edit_category', 'understrap_category_transient_flusher' );
add_action( 'save_post',     'understrap_category_transient_flusher' );

/**
 * Display navigation to next/previous post when applicable.
 */
if ( ! function_exists( 'understrap_post_nav' ) ) :

	function understrap_post_nav() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous ) {
			return;
		}
		?>

		<div class="row text-center">
			<div class="col-md-12">
				<h2>View More Posts</h2>
				<hr>
				<nav class="navigation post-navigation">
					<h2 class="sr-only"><?php _e( 'Post navigation', 'understrap' ); ?></h2>
					<div class="nav-links">
						<div class="row">
							<?php
								if ( get_previous_post_link() ) {
									$prevPost = get_previous_post(true);
									$prevthumbnail = get_the_post_thumbnail_url($prevPost->ID, 'large');
									echo
									'<div class="col-sm-6">
										<div class="post-navigation-overlay">
											<div class="post-navigation-image-container" style="background: url(\'';
											echo $prevthumbnail;
									echo'\')">';
									echo
									'</div>
										<div class="post-navigation-text">
									';

									previous_post_link( '<h2><span class="nav-previous float-xs-left">%link</span></h2>', _x( '<i class="fa fa-angle-left"></i>&nbsp;%title', 'Previous post link', 'understrap' ));

									echo
												'</div>
											</div>
										</div>
									';

								}
							?>
							<?php
							if ( get_next_post_link() ) {
								$nextPost = get_next_post(true);
								$nextthumbnail = get_the_post_thumbnail_url($nextPost->ID, 'large');
								echo
								'<div class="col-sm-6">
									<div class="post-navigation-overlay">
										<div class="post-navigation-image-container" style="background: url(\'';
										echo $nextthumbnail;
								echo'\')">';
								echo
								'</div>
									<div class="post-navigation-text">
								';
								next_post_link( '<h2><span class="nav-next float-xs-right">%link</span></h2>', _x( '%title&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'understrap' ) );
								echo
											'</div>
										</div>
									</div>
								';
							}
							?>
						</div>
					</div><!-- .nav-links -->
				</nav><!-- .navigation -->
			</div>
		</div>
		<?php
	}
endif;