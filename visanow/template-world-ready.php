<?php
/**
 Template Name: World Ready
 */

get_header(); ?>
<?php $baner_image =get_field('banner_image_work_ready');?>
<?php $baner_image = wp_get_attachment_image_src($baner_image, 'large');?>
<?php $baner_image = $baner_image[0];?>

<div class="workforce-bg uk-position-relative uk-flex uk-flex-middle" style="background: url(<?php echo $baner_image;?>) no-repeat center top; background-size:cover;">
	<div class="uk-container uk-container-center ">
		<div class="workforce-caption">
			<?php $banner_vid = get_field('video_ready',false,false);?>
			<div class=" uk-text-center uk-container uk-container-center">
				<?php if(!empty($banner_vid)):?><a class="uk-hidden-small" data-uk-lightbox href="<?php echo $banner_vid;?>"><img src="<?php echo get_template_directory_uri(); ?>/images/worldready-playicon.png" alt=""></a>
				 <a class="uk-visible-small" data-uk-lightbox href="<?php echo $ban_vid;?>"><img src="<?php echo get_template_directory_uri();?>/images/play-icon.png" alt=""></a><?php endif;?>
				<h1><?php the_field ('heading_ready');?></h1>
				<p><?php the_field('description_ready');?></p>
			</div>
		</div>
	</div>
</div>

<section class="details uk-container uk-container-center">
	<div class="uk-grid uk-grid-divider">
		<div class="uk-width-medium-7-10">
			
			<div class="featured">
				<h3><span><?php the_field('featured_title_ready');?></span></h3>
				<div class="article_holder">
					<?php if(have_rows('featured_ready')):?>
					<?php while (have_rows('featured_ready')): the_row();?>
					<div class="workforce-featured-detail uk-grid">
					<?php $img_fea = get_sub_field('image_ready');?>
					<?php if($img_fea):?>
					<div class="uk-width-medium-3-10">
							<img src="<?php echo $img_fea; ?>" alt="">
						</div>
						<div class="uk-width-medium-7-10">
					<?php else:?>
						<div class="uk-width-medium-1-1">
					<?php endif;?>
							<h6><a href="<?php the_sub_field('title_link');?>"><?php the_sub_field('title_ready');?></a></h6>
							<?php the_sub_field('description_ready');?>
							<a href="<?php the_sub_field('button_link_ready');?>" class="learn-more"><?php the_sub_field('button_lebel_ready');?></a>
						</div>
					</div>
					<?php endwhile;?>
					<?php endif;?>
				</div>
			</div>
		</div>
		<div class="uk-width-medium-3-10 featured-sidebar">
		<?php $post_objects = get_field('post_ready');?>	
			<?php foreach( $post_objects as $post_object): ?>
			<?php $id = $post_object->ID; ?>	
			<div class="featured-widget">
				<a href="<?php echo get_permalink($id); ?>"><?php echo get_the_post_thumbnail($id, array('255','168'));?></a>
				<h6><a href="<?php echo get_permalink($id); ?>"><?php echo $post_object ->post_title;?></a></h6>
				<?php $trimcontent = apply_filters('the_content', $post_object->post_content);
				$shortcontent = wp_trim_words( $trimcontent, $num_words = 10, $more = '...' );
				echo '<p>' . $shortcontent . '</p>'; ?>
				<a href="<?php echo get_permalink($id); ?>">Read the Full Article</a>
			</div>
		<?php endforeach;?>	
			</div>
		</div>

	
</section>

<section> 
	<div class="work-detail uk-block uk-text-left">
		<div class=" uk-container uk-container-center ">
				<div class="work-detail-title uk-text-center">
					<h3><span><?php the_field('reality_heading_ready');?></span></h3>
					<?php the_field('reality_description_ready');?>
				</div>
					<div class="uk-grid uk-grid-medium visa-info-contaiiner uk-grid-match">
						
						<?php if(have_rows('reality')):  $count = 1; ?>
						<?php while(have_rows('reality')): the_row();?>
                        <?php $class = ($count % 2 == 0) ? 'bg-dark' : ''; ?>
						
						<div class="uk-width-medium-1-2">
							<div class="visa-info activated <?php echo $class; ?>" style="border-color:<?php the_sub_field('border_colour');?>;">
								<span><?php the_sub_field('number_ready');?></span>
								<p><?php the_sub_field('text_ready');?></p>
							</div>
						</div>
						
						<?php $count++; endwhile; ?>
						<?php endif;?>
					
						<div class="note"><?php the_field('reality_note');?></div>
					</div>
					
		</div>
	</div>
</section>

<section class="workforce-action uk-block uk-container uk-container-center ">	
		<div class="workforce-action-text">
			<h3><?php the_field('title_world_ready');?></h3>
			<?php the_field('description_world_ready');?>
			<div class="uk-grid uk-grid-match">
			<?php if(have_rows('workforce_ready')):?>
			<?php while(have_rows('workforce_ready')): the_row();?>
				<div class="uk-width-medium-1-2">
					<img src="<?php the_sub_field('image_work');?>" alt="">
					<h6><?php the_sub_field('heading_work');?></h6>
					<?php the_sub_field('description_work');?>
					<a href="<?php the_sub_field('read_study_link');?>"><?php the_sub_field('readstudy_label_work');?></a>
				</div>
			<?php endwhile;?>
			<?php endif;?>
			
			</div>
		</div>
		<div class="workforce-action-form">
			<h3><?php the_field('heading_form_ready');?></h3>
			<p><?php the_field('description_form_ready');?></p>
			<div class="workforce-form">
				<?php echo apply_filters('the_content', get_field('form_shortcode_form_ready') ); ?>
			</div>
		</div>	
</section>

<?php
get_footer();
