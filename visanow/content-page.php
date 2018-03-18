<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Visanow
 */

?>
	<div id="post-<?php the_ID(); ?>" class="privacy-statement white-bg uk-container uk-container-center">
		<div class="privacy-heading">
			<h4><?php the_title();?></h4>
		</div>
	
		<?php the_content();?>
	
	</div>








