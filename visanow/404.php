<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Visanow
 */

get_header(); ?>

	<div class="sub-navigation uk-hidden-small" data-uk-sticky="{top:74}">
		<div class="uk-container uk-container-center">
		
		<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'menu_class' => 'uk-subnav', 'container' => false ) ); ?>
		</div>
    </div>

	<div class="uk-visible-small uk-container uk-container-center">
		<span class="mobile-sub-navigation" data-uk-toggle="{target:'#red-menu', cls:'uk-visible'}">ABOUT US</span>
		<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'red-menu', 'container' => false ) ); ?>
	</div>

	<div class="heading-section">
		<div class="uk-container uk-container-center">			
			<div class="uk-grid">
				<div class="uk-width-medium-6-10 page-heading">
					<h1><?php the_field('top_left_text','option')?></h1>
				</div>
				<div class="uk-width-medium-4-10 helpful-links">
					<h4><?php the_field('menu_heading','option');?></h4>
					<?php wp_nav_menu( array( 'theme_location' => '404-menu', 'menu_id' => 'error-menu', 'container' => false ) ); ?>
				</div>
			</div>			
		</div>
	</div>
	<div class="uk-container uk-container-center">
		<div class="divider"></div>
	</div>
	
	<div class="main-section">
		<div class="uk-container uk-container-center">		
			<div class="uk-grid">
				<div class="uk-width-medium-7-10">
					<div class="featured-section">
						<h6><?php the_field('featured_report_heading','option')?></h6>
						<?php $epost_object = get_field('featured_post','option');?>
						<?php $post_id = $epost_object->ID;?>
						<div class="featured-detail">
							<div class="uk-grid">
								<div class="uk-width-medium-6-10">
									<a href="<?php echo get_permalink($post_id);?>"><?php echo get_the_post_thumbnail ($post_id, array(425,333));?></a>
								</div>
								<div class="uk-width-medium-4-10 featured-text">
									<h5><a href="<?php echo get_permalink($post_id);?>"><?php echo $epost_object->post_title;?></a></h5>
									 <?php $trim_excerpt = apply_filters('the_content', $epost_object->post_content);
												$short_excerpt = wp_trim_words( $trim_excerpt, $num_words = 26, $more = '' );
												echo '<p>' . $short_excerpt . '</p>'; ?>
									<a href="<?php echo get_the_permalink($post_id); ?>">Read the Full Article</a>
									
								</div>
							</div>
							
						</div>
					</div>

					<div class="divider"></div>

					<div class="featured-section influencer-section">
						<h6><?php the_field('member_section_heading','option');?></h6>
						<div class="uk-grid">
						
							<div class="uk-width-medium-7-10 ">
								<div class="influencer-image">
									<a href="<?php the_field('influencers_title_link','option');?>">
                                    	<img src="<?php the_field('member_image','option')?>" alt="">
                                    </a>
								</div>
								<div class="influencer-text">
									<h5><a href="<?php the_field('influencers_title_link','option');?>"><?php the_field('influencers_title','option')?></a></h5>
									<span><?php the_field('member_name','option')?></span>
									<p><?php the_field('member_content','option')?></p>
									<a href="<?php the_field('read_more_link','option')?>"><?php the_field('read_more_lebel','option')?></a>
								</div>
							</div>
							<div class="uk-width-medium-3-10">
								<div class="">
								<?php $right_image = get_field('right_side_image','option');?>
								<?php $right_image = wp_get_attachment_image_src($right_image, array(227,206));?>
								<?php $right_image = $right_image[0];?>
									<img src="<?php echo $right_image;?>" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="uk-width-medium-3-10">
					<div class="sidebar-module">
					<div class="module-heading uk-text-left">
						<h5><?php the_field('header_title','option');?></h5>
						<img class="uk-float-right" src="<?php the_field('header_icon','option');?>" alt="" data-uk-svg>
					</div>
					<div class="learn-module-text">
						<span class="module-text-heading"><?php the_field('release_time','option');?></span>
						<?php $newpost_object = get_field('newsroom_post','option');?>
						<?php $newpost_id = $newpost_object->ID; ?>
						<?php $author_id1 = $newpost_object ->post_author;?>
						  	<a href="<?php the_permalink();?>"><?php echo get_the_post_thumbnail($newpost_id, array(447,282));?></a>  										
							<h6><a href="<?php the_permalink();?>"><?php echo $newpost_object ->post_title;?></a></h6>
							<?php $time = get_the_time('F, n Y',$newpost_id);?>
							<span><?php echo $time; ?>  |</span>
							<span class="border"><?php the_author_meta( 'display_name', $author_id1 ); ?></span>
							
						   <?php $newtrimexcerpt = apply_filters('the_content', $newpost_object->post_content);
												$newshortexcerpt = wp_trim_words( $newtrimexcerpt, $num_words = 12, $more = '' );
												echo '<p>' . $newshortexcerpt . '</p>'; ?> 
						  <a href="#">READ MORE</a> 
						  										   
					</div> 
				</div>
				</div>
			</div>
		</div>
	</div>


<?php
get_footer();
