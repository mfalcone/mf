<?php
/*
Template Name:desarrollo
*/
?>

<?php get_header(); ?>

<p>Aca van los post de desarrollo</p>

<div id="content" class="site-content" role="main-menu">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
<?php get_footer(); ?>