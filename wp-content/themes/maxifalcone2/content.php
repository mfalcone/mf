<?php
/**
 * @package maxifalcone2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<div class="meta-wrapper">
			<div class="dot"></div>
			<div class="datebubble"><?php maxifalcone2_posted_on(); ?></div>
			<div class="commentbubble">
			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { ?>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'maxifalcone2' ), __( '1 ', 'maxifalcone2' ), __( '% ', 'maxifalcone2' ) ); ?></span>
			<?php } else { ?>
				0
			<?php }; ?>
		</div><!-- comment bubble-->
			</div><!-- meta-wrapper >	
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Seguir leyendo <span class="meta-nav">&rarr;</span>', 'maxifalcone2' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'maxifalcone2' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'maxifalcone2' ) );
				if ( $categories_list && maxifalcone2_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'maxifalcone2' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'maxifalcone2' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'maxifalcone2' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		

		<?php edit_post_link( __( 'Edit', 'maxifalcone2' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
