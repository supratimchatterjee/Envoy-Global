<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Visanow
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>
 <?php while ( have_posts() ) : the_post(); ?>




<section class="lightgrey-bg">
	<div class="white-bg uk-container immigration-report uk-container-center">
		<div class="uk-grid uk-block">
			<div class="uk-width-large-2-10 right-sidebar news-detail uk-visible-large">
				<div class="widget-detail">
					<h6>PUBLISHED</h6>
					<span><?php the_time('M j , Y');?></span>
				</div>
				<div class="widget-detail">
					<h6>AUTHOR</h6>
					<div class="widget-image uk-text-center  testimonial-image uk-border-circle">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 200 ); ?>

					</div>

					<span>
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author();?></a>
						<?php the_field('author_title', 'user_' . get_the_author_meta( 'ID' )); ?>
					</span>

				</div>
				 
				
			</div>
			<div class="uk-width-large-6-10 immigration-deatils">
				<h1 class="single-title"><?php the_title();?></h1>
				<div class="widget-detail uk-hidden-large">
					<h6>HIGHLIGHTS</h6>
					<?php the_field('highlighted_points');?>
				</div>
				<?php the_post_thumbnail('large');?>
				<?php the_content();?>
			 </div>



			<div class="uk-width-large-2-10 left-sidebar">
				<div class="widget-detail uk-visible-large">
					<h6>HIGHLIGHTS</h6>
				   <?php the_field('highlighted_points');?>
				</div>
				<div class="widget-detail widget-share uk-clearfix">
					<h6>SHARE THIS</h6>
						<div class="share-option">

							<?php echo do_shortcode('[sharethis]'); ?>

						</div>
				</div>
				

			</div>
		</div>
		

   </div>
</section>


 <?php endwhile;?>
 <?php endif;?>

<?php
get_footer();
