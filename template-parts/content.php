<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coolmat
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">


		<h1 class="entry-title">
			<?php 

			the_title(); 
		
			?>
			
		</h1>
		<div class="entry-price">
			<?php 
				the_content();	
			?>
		
		</div>
		
	
	</header><!-- .entry-header -->

	<?php coolmat_post_thumbnail(); ?>



</article><!-- #post-<?php the_ID(); ?> -->
