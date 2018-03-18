<?php
/**
 Template Name: Our Solutions & Services
 */

get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();?>


<?php $bg_img=get_field('banner_image_cm');?>
<div class="resource-banner management-bg uk-flex uk-flex-middle" <?php if (!empty($bg_img)){?>style=" background-image: url(<?php echo $bg_img; ?>); "<?php }?>> 
		<div class="uk-container uk-container-center">   	    	
			<div class=" uk-width-3-4 resource-caption management-caption">
				<h1><?php the_field('banner_heading_cm');?></h1>
				<p><?php the_field('banner_description_cm');?></p>

				<div class="apply-sec">
					<div class="apply-image">
						<img src="<?php the_field('small_image_cm');?>" alt="">
					</div>
					<div class="apply-text">
						<p><?php the_field('image_description_cm');?></p>
						<a href="<?php the_field('button_link_ban_cm');?>" class="learn-more uk-border-rounded"><?php the_field('button_lebel_ban_cm');?></a>
					</div>
				</div>
								
			</div>
		</div>      
</div>
	
	<section>
		<div class="uk-container uk-container-center">
			<div class="visa-detail casestudy-visa-detail">
				<div class="uk-grid visa-spacing">
					<div class="uk-width-medium-6-10 visa-desc">
							<?php the_field('case_management');?>
					</div>
					<div class="uk-width-medium-4-10 uk-text-center">
						<div class="visa-info activated">
								<span><?php the_field('nps_title_cm');?></span>
								<p><?php the_field('nps_description');?></p>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="result-bg">
		<div class="mackbook-image" style="background-image:url(<?php the_field('image_facility'); ?>);">
			<div class="mobile-mackbook-images">
				<img src="<?php echo get_template_directory_uri(); ?>/images/responsive-mackbook.png" alt="">
			</div>
			<div class="uk-container uk-container-center">
				<div class="uk-grid">
					<div class="uk-width-medium-1-2">
					</div>
					<div class="uk-width-medium-1-2">
					<?php the_field('image_description_faciliti');?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
        <section class="lightblue-bg management-approach">
        	<div class="uk-container uk-container-center">
            	<div class="uk-grid">                	
                    <div class="uk-width-medium-2-6 uk-push-4-6">
                    	<div class="circle-image">
                        	<img src="<?php the_field('image_approach');?>" alt="">
                        </div>
                    </div>
					<div class="uk-width-medium-4-6 uk-pull-2-6">
					<?php the_field ('image_description_approach');?>
                    	
                    </div> 
                </div>
            </div>
        </section>
        
		<section class="workload">
			<div class="tab-image" style="background-image:url(<?php the_field('image_workload'); ?>);">
				<div class="mobile-tab-image"><img src="<?php echo get_template_directory_uri(); ?>/images/responsive-tab.png" alt=""></div>
				<div class="uk-container uk-container-center">
					<div class="uk-grid">
						<div class="uk-width-medium-1-2">
						</div>
						<div class="uk-width-medium-1-2">
						<?php the_field('image_description_workload');?>
						</div>
					</div>
				</div>
			</div>        	
		</section>

	
	
	
	<div class="uk-container uk-container-center"> 
		<div class="work-detail why-visa  uk-text-center ">
			<h3><span><?php the_field('envoy_heading');?></span></h3>
			<div class="uk-grid uk-grid-medium uk-container">
			<?php if( have_rows('why_visa_now_cm') ): ?>
<?php while( have_rows('why_visa_now_cm') ): the_row(); ?>
				<div class="uk-width-medium-1-2">
					<div class="visa-info activated" style="background:url(<?php echo get_template_directory_uri(); ?>/images/visa-info-background1.jpg) no-repeat center center; background-size:cover;">
						<span><?php the_sub_field('credentials_cm');?></span>
						<p><?php the_sub_field('type_of_credential_cm');?></p>
					</div>
				</div>
				<?php endwhile;?>
				<?php endif;?>
			</div>
			<?php $envoy_button = get_field('envoy_button_label');?>
			<?php if(!empty($envoy_button)){?>
		<a class="learn-more uk-border-rounded" href="<?php the_field('envoy_button_link');?>"><?php echo $envoy_button;?></a><?php }?>
		</div>
	</div>

	
	<?php $backgrnd_image = get_field('background_image');?>
	<?php $backgrnd_image = wp_get_attachment_image_src($backgrnd_image, 'large');?>
	<?php $backgrnd_image = $backgrnd_image[0];?>
	<div data-uk-grid-margin="" class="uk-grid  blog marketin-blog uk-block-large" <?php if(!empty($backgrnd_image)) { ?>style="background-image:url(<?php echo $backgrnd_image; ?>)"<?php } ?>>
			<div class="uk-width-medium-1-1 uk-row-first">            
				<div class="uk-text-center">                    
						<div class=" uk-container uk-container-center">
							<h3><span><?php the_field('lm_heading');?></span></h3>                                                                              
								<div class="uk-grid box-modules">  
								<?php $post_objects = get_field('learn_more_post_cm');?>
                                <?php $postno = 0 ; ?>	
								<?php foreach( $post_objects as $post_object): $postno++; ?>
								<?php $post_id = $post_object->ID; ?>
								<?php $author_id1 = $post_object ->post_author;?>
								                          
									<div data-uk-filter="filter-infographics" class="uk-width-medium-1-4 bottom-gap">
										<div class="module-heading uk-text-left">
										<h5><?php echo get_field('type', $post_id);?></h5>
										<img class="uk-float-right" src="<?php the_field('icon',$post_id);?>" alt="" data-uk-svg="">
										</div>
										<?php $thumb = get_the_post_thumbnail($post_id);?>
										<?php echo get_the_post_thumbnail($post_id, array('255','120'));?>
										<?php if ($thumb):?>                                 
                                        	<div class="box-content tm-content">
											<?php else:?>
											<div class="box-content">
											<?php endif;?>
											<div class="fix-height uk-text-left">
												<h6><a href="<?php the_permalink($post_id);?>"><?php echo $post_object ->post_title;?></a></h6>
												
												<?php $option = get_field('post_option', $post_id);?>
												<?php if ($option == 1):?>
													<span><?php the_field('custom_post_date', $post_id);?> | </span>
													<?php the_field('place_resource', $post_id);?>
												<?php else:?>
													<span><?php echo get_the_time('M j, Y',$post_id);?>  | </span>
													 <span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
													   <?php the_author();?></a></span>
												<?php endif;?>
												
                                                <?php if($thumb):?>
												<?php $trimexcerpt = apply_filters('the_content', $post_object->post_content);
												$shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 14, $more = '' );
												echo '<p>' . $shortexcerpt . '</p>'; ?>
												<?php else:?>
												<?php $trimexcerp = apply_filters('the_content', $post_object->post_content);
												$shortexcerp = wp_trim_words( $trimexcerp, $num_words = 28, $more = '' );
												echo '<p>' . $shortexcerp . '</p>'; ?>
												<?php endif;?>               
											</div>
											<?php $rm_text= get_field('button_text',$post_id);?>
											<a href="<?php the_permalink($post_id);?>" class="read-more uk-border-rounded">
											<?php if ($rm_text):?>
												<?php echo $rm_text;?>
											<?php else:?>
												Read More
											<?php endif;?>
											</a>
										</div>
									</div> 
									
								<?php endforeach;?>	 
							</div>
								 <a href="<?php the_field('lm_button_link');?>" class="learn-more uk-border-rounded"><?php the_field('lm_button_label');?></a>
							</div>
									   
				</div>
			</div>
		</div> 
	
	<section class="testimonial uk-block uk-block-large uk-text-center testimonial-back">
		<div class="uk-container uk-container-center">
		 <?php $test_objects = get_field('testimonial_cm');?>	
			<?php $id = $test_objects->ID; ?>
			<div class="testimonial-deatil">
			<div class="testimonial-image uk-margin-bottom uk-border-circle"><?php echo get_the_post_thumbnail($id, array('296','296'));?></div>
			<blockquote>
				<?php echo $test_objects ->post_content;?>
			</blockquote>
			<div class="author-name uk-block">
				<span><?php echo $test_objects ->post_title;?></span>
				<p><?php the_field('position',$id);?></p>
			</div><img alt="" src="<?php the_field('company_logo',$id);?>"></div>
			
		</div>
	</section>	
	
	
	
	<?php endwhile;?>
	<?php endif;?>

<?php
get_footer();
