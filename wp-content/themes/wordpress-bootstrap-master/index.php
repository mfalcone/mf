<?php get_header(); ?>
	<div class="cover col-sm-12 clearfix" id="cover">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<?php $args = array ( 'category_name' => 'carousel', 'posts_per_page' => -1 ); ?>
		<?php $my_query = new WP_Query($args);?>
		<ol class="carousel-indicators">
		<?php if( $my_query->have_posts() ) {
		while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<?php $index = $my_query->current_post;?>
		<li data-target="#myCarousel" data-slide-to="<?php echo $index ?>" class="<?php if($index==0){?>active<?php }?>"></li>
		<?php endwhile; ?>	
		<?php }; ?>
		</ol>
		<div class="carousel-inner">
		<?php 
		if( $my_query->have_posts() ) {
		while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<?php $index = $my_query->current_post;?>		

		<?php 
		  if ( has_post_thumbnail()) {
			  $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
			}else{
				$full_image_url = array();
			}
		?>
		<div class="item <?php if($index==0){?>active<?php }?>" style="background-image:url(<?php echo $full_image_url[0] ?>)">
		 
		<div class="container">
		<div class="carousel-caption">
		  <h1><?php the_title(); ?></h1>
		  <?php the_content(); ?>
		</div>
		</div>
		</div>
		<?php endwhile; ?>	
		<?php }; ?>
		<?php wp_reset_query(); ?>

		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div><!-- end of carousel -->

		<div class="hint-wrapper">
		<a class="gweb-smoothscroll-control" href="#start">
        	<div class="icon icon-arrow-hint animated-arrow-1"></div>
    	</a>
    	</div>
	</div><!--end of cover-->
		
		<div class="container" id="container-full">		
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 clearfix" role="main">
					<?php query_posts(array ( 'category_name' => 'home', 'posts_per_page' => -1 )); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<header>
						
							<div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
							
							<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php the_content( __("Read more &raquo;","wpbootstrap") ); ?>
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', ''); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="pager">
								<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
								<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				
    
			</div> <!-- end #content -->

<?php get_footer(); ?>