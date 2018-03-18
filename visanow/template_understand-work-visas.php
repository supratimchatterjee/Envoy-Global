<?php
/**
Template Name: Understand Work Visas
 */

get_header(); ?>
	<?php $bcg_img=get_field('banner_image_work_visas');?>
    <div class="resource-banner workvisa-bg uk-flex uk-flex-middle" <?php if (!empty($bcg_img)){?>style="background-image: url(<?php echo $bcg_img; ?>);"<?php }?>>
            <div class="uk-container uk-container-center uk-position-relative">
                <span class="link-arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/link-arrow.png" alt=""></span>   	    	
                <div class="workvisa-caption">
                    <h1><?php the_field('banner_heading_work_visas');?></h1>
                   <p><?php the_field('banner_des_work_visas');?></p>
                    
               </div>
           </div>
       </div>
    	
        <section class="us-workvisa-detail uk-container uk-container-center">
        	<h3 class="uk-text-center"><span><?php the_field('uwv_heading');?></span></h3>
            <div class="uk-grid uk-grid-match">
			<?php if( have_rows('us_work_visas') ): ?>	   
			<?php while( have_rows('us_work_visas') ): the_row(); ?>
            	<div class="uk-width-large-1-4 uk-width-medium-1-2">
                	<div class="visa-deatil-box">
                    	<div class="visa-fix-height">
                           <div class="visa-detail-heading"><h4><?php the_sub_field('title_work');?></h4></div>
                            <div class="paragraph"><p><?php the_sub_field('description_Us_visas');?></p></div>
                        </div>
                        <a class="read-more uk-border-rounded" href="<?php the_sub_field('button_link_us_visas');?>"><?php the_sub_field('button_lebel_us_visas');?></a>
                        <a class="uk-position-cover" href="<?php the_sub_field('button_link_us_visas');?>"></a>
                    </div>
                </div>
				
			<?php endwhile;?>
			<?php endif;?>
             <div class="uk-text-center uk-width-1-1">
            	<?php the_field('end_note');?>
 			</div>
        </section>
    
   <section class="visa-locator uk-block-large lightblue-bg">
        	<div class="uk-container uk-container-center uk-text-center">
            	<h3><span>FIND A VISA</span></h3>
                <div class=" visa-location activated uk-block">
                    <div class="visa-info-image">
                        <?php the_field('visa_finder_iframe');?>                    
                    </div>
                    
                    <a class="learn-more uk-text-center uk-border-rounded" href="<?php the_field('button_link');?>"><?php the_field('button_label');?></a>
                </div>
            </div>
        </section>
	
	

		

<?php
get_footer();
