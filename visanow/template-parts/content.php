<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Visanow
 */

?>
<?php $newsroom_link = get_field('press_link'); ?>

<div id="post-<?php the_ID(); ?>" class="search-detail news-detail">
	<div class="uk-grid">
		<div class="uk-width-medium-4-10">
		<?php if($newsroom_link):?>
			<a target="_blank" href="<?php the_field('press_link');?>">
		<?php else:?>
			<a href="<?php the_permalink();?>">
		<?php endif;?>	
			<?php 
				if ( '' != get_the_post_thumbnail() ) {
					the_post_thumbnail( array(254,178));
				} else {
					echo '<img src="//placehold.it/254x178" />';
				}
			?>
            </a>

		</div>
		<div class="uk-width-medium-6-10">
			<?php if($newsroom_link):?>
			<h5><a target="_blank" href="<?php the_field('press_link');?>"><?php the_title();?></a></h5>
			<?php else:?>
				<h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
			<?php endif;?>
			
			<span class="sub-head"><?php the_field('publication_name');?></span>
            <?php the_excerpt(' '); ?>
			<?php if($newsroom_link):?>
			<a target="_blank" href="<?php the_field('press_link');?>">Read the Full Article</a>
			<?php else:?>
				<a href="<?php the_permalink();?>">Read the Full Article</a>
			<?php endif;?>
		</div>
	</div>  
</div>