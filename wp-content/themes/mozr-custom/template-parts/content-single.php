 <?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
 		<span class="links">
		<?php
		
			$posttags = get_the_tags();
			
			if ($posttags) {
				$last_key = end(array_keys($posttags));
			foreach($posttags as $key => $tag) {
				if ($key == $last_key || $key > 3) {
					echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
					break;
				} else {
					echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a> / ';
				}
				 
			}
			}
		?>
		</span>
		<div class="row">
			<div class="col-xs-12 col-md-8">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
			<div class="col-xs-12 col-md-4 text-right title-right">
				<span>
					<i class="fa fa-comment-o" aria-hidden="true"></i>
					<?php $comments_count = wp_count_comments(); echo $comments_count->total_comments?>
				</span>
			</div>
		</div>
		
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); 
	?>
	<div class="under-thumb">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<?php get_template_part( 'template-parts/biography' ); ?>
			</div>
			<div class="col-xs-12 col-md-6 text-right" id="under-thumb-right">
				<span class="entry-date"><?php echo get_the_date(); ?></span> | 
				<span class="black">
				<?php if(function_exists('bac_post_word_count')) { bac_post_word_count(); }?>
				min read
				</span> | 
			</div>
		</div>
	
	</div>
	<div class="row">
	<div class="col-xs-12 col-md-8 col-md-offset-2 post-cont">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			
		?>
	</div><!-- .entry-content -->
	</div>
	
	<div class="row" id="btnautor">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<!-- -->
				<div class="author-info2">
					<div class="author-avatar">
						<?php
						/**
						* Filter the Twenty Sixteen author bio avatar size.
						*
						* @since Twenty Sixteen 1.0
						*
						* @param int $size The avatar height and width size in pixels.
						*/
						$author_bio_avatar_size = apply_filters( 'twentysixteen_author_bio_avatar_size', 60 );

						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div><!-- .author-avatar -->

					<div class="author-description">
					
						<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
							<p class="author-title"><span class="author-heading">About </span> <?php echo get_the_author(); ?></p>
							<p style="color: #353535;"><?php the_author_meta( 'description' ); ?></p>
						</a>
					</div><!-- .author-description -->
				</div><!-- .author-info -->
				<!-- -->
				
			</div>
	</div>
	<?php echo do_shortcode( '[mailchimpform]' ); ?>
	
	<!--<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer> .entry-footer -->
</article><!-- #post-## -->
