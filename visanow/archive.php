<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Visanow
 */

get_header(); ?>

<!--<div class="sub-navigation uk-hidden-small">
		<div class="uk-container uk-container-center">
			<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'menu_class' => 'uk-subnav', 'container' => false ) ); ?>
		</div>
    </div>-->
	
	<div class="uk-hidden-large uk-container uk-container-center">
		<span class="mobile-sub-navigation" data-uk-toggle="{target:'#red-menu', cls:'uk-visible'}">ABOUT US</span>
		<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'red-menu', 'container' => false ) ); ?>
	</div>

	<div class="divider"></div>
		<div class="privacy-statement white-bg uk-container uk-container-center visa-news">
			<?php if (is_author()):?>
			<h3><span>Author: <?php the_author();?></span></h3>
			<?php else:?>
			<h3><span>News &amp; Insights</span></h3>
			<?php endif;?>
			<div class="search-content immigration-content">
				<div class="uk-grid">
					<div class="uk-width-medium-3-10">
						<div class="search-sidebar immigration-sidebar">
							<?php get_sidebar(); ?>                                        
						</div>						
					</div>
					<div class="uk-width-medium-7-10">
					<?php if(is_author()):?>
					<h5>Articles By <?php the_author();?></h5>
					<?php else:?>
						<h5>Envoy in the news</h5>
						<?php endif;?>
								<?php
		if ( have_posts() ) : ?>



			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();?>

			
				<?php get_template_part( 'template-parts/content', get_post_format() );?>

					<?php endwhile; ?>
		
					<div class="search_navigation"><?php wp_pagenavi(); ?></div>
		
				<?php else : ?>
		
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
		
				<?php endif; ?>

							
					</div>
				</div>
			</div>
		</div>	
	
	
	
<?php
get_footer();
