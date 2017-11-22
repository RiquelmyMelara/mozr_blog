<?php
/*
Template Name: MOZR Single Template
*/

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );
			echo '</main><!-- .site-main -->			</div><!-- .content-area -->';
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			}

			// End of the loop.
		endwhile;
		?>

	

	<div class=" gray-line2"></div>
		<div class="row">

			<div class="col-md-12 post-cont">
			<div class="relatedposts">
			<h3>Related posts</h3>
				<?php
				$orig_post = $post;
				global $post;
				$tags = wp_get_post_tags($post->ID);
				
				if ($tags):
				$tag_ids = array();
				foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
				$args=array(
				'tag__in' => $tag_ids,
				'post__not_in' => array($post->ID),
				'posts_per_page'=>4, // Number of related posts to display.
				'caller_get_posts'=>1
				);
				
				$my_query = new wp_query( $args );
				
				while( $my_query->have_posts() ) {
						$my_query->the_post();
						?>
						
						<div class="col-xs-12 col-md-4 relatedthumb">
							<a rel="external" href="<?php the_permalink()?>"><?php the_post_thumbnail(array(150,100)); ?><br />
							<?php the_title(); ?>
							<p class="rread">Read this post</p>
							</a>
						</div>
						
						<?php 
				}
				endif;
				$post = $orig_post;
				wp_reset_query();
				?>
			</div>
		</div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
