<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package maxifalcone2
 */
?>

	</div><!-- #main -->
<?php if (! is_front_page() ) : ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<p>Este obra está bajo una licencia de Creative Commons Reconocimiento-NoComercial-CompartirIgual 3.0 Unported. </p>
	</footer><!-- #colophon -->
<?php endif; ?>	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>