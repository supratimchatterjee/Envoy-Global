<?php/** * Template part for displaying posts. * * @link https://codex.wordpress.org/Template_Hierarchy * * @package Visanow */?><div id="post-<?php the_ID(); ?>" class="search-detail news-detail">	<div class="uk-grid">		<div class="uk-width-medium-4-10">			<a target="_blank" href="<?php the_field('press_link');?>">			<?php 				if ( '' != get_the_post_thumbnail() ) {					the_post_thumbnail( array(254,178));				} else {					echo '<img src="//placehold.it/254x178" />';				}			?>            </a>		</div>		<div class="uk-width-medium-6-10">			<h5><a target="_blank" href="<?php the_field('press_link');?>"><?php the_title();?></a></h5>			<span class="sub-head"><?php the_field('publication_newsroom');?></span>			<?php the_content();?>            <a target="_blank" href="<?php the_field('press_link');?>">Read the Full Article</a>		</div>	</div>  </div>