<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Visanow
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
		<?php $bg_img=get_field('banner_image','option');?>
	<div class="resource-banner" <?php if (!empty($bg_img)){?>style=" background-image: url(<?php echo $bg_img; ?>); "<?php }?>>
	    	
        	<div class="resource-caption">
            	<h1><?php the_field('banner_text','option');?></h1>
            </div>      
    </div>
    


<section class="resource-detail uk-container uk-container-center">    	
    <div class="sub-menu uk-text-center uk-clearfix">
	
	
        <ul>
            <li><a href="#">FEATURED</a></li>
            <li><a href="#">CATEGORY</a></li>
            <li><a href="#">TOPIC</a></li>
            <li><a href="#">VISA TYPE</a></li>        
        </ul>
    </div>


	<div class="resource-content uk-container uk-container-center uk-text-center">
    <em><img src="images/up-arrow.png" alt=""></em>
        <div class="submenu-checkbox">
		<?php $taxs = get_terms('resource_topic'); ?>
        	<ul id="my-module">  
		<?php foreach($taxs as $tax) : ?>
	   <?php $term_id = $tax->term_id; ?>  
                <li><input type="checkbox" placeholder="" data-uk-filter="filter-<?php echo $tax->slug;?>"><label><?php echo $tax->name;?></label></li>
				
               
				<?php endforeach;?>
            </ul>              
        </div>
    	

       
	   
	   
	    <div class="uk-grid box-modules" data-uk-grid="{controls: '#my-module'}">
        	
 		
          
		  	<?php

			$args = array(
				'post_type'         =>		'resource',
				'posts_per_page'    =>		1,
				'meta_key'		=> 'featured',
				'value'			=> '1'
			
			
			);
			
			$query = new WP_Query($args);
			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
				$id    =    $query->ID; 
			?>
			
			 <?php $post_terms = wp_get_post_terms( $post->ID, 'resource_topic' ); ?>
            <?php $isotope_class = ''; ?>
            <?php foreach ($post_terms as $post_term) : ?>
				 
                <?php $isotope_class .= ','.'filter-' . $post_term->slug; ?>
            <?php endforeach; ?>
			
			
			 <div class="uk-width-medium-3-4 bottom-gap" data-uk-filter="<?php echo ltrim($isotope_class, ',');?>">
                <div class="module-heading uk-text-left activated">
                     <?php $t_post = get_field('type');?>
      
      
							  <?php if($t_post=='White Paper'):?>
							   <h5>White Paper</h5>
							  <?php elseif($t_post =='Infographic'): ?>
							  <h5>Infographic</h5>
							  <?php elseif($t_post =='Webinar'): ?>
							  <h5>Webinar</h5>
							  <?php elseif($t_post =='Case Study'): ?>
							  <h5>Case Study</h5>
							  <?php elseif($t_post =='Tutorial'): ?>
							  <h5>Tutorial</h5>
							  <?php elseif($t_post =='Research Report'): ?>
							  <h5>Research Report</h5>
							  <?php elseif($t_post =='Trade Show'): ?>
							  <h5>Trade Show</h5>
							  <?php else:?>
							  <h5>Conference</h5>
							  <?php endif;?>
							 
							  <?php $post_icon = get_field ('icon');?>
                    <img alt="" class="uk-float-right" src="<?php echo $post_icon;?>" data-uk-svg>                        
                </div>
                <div class="box-content">
                	<div class="uk-grid">
                    	<div class="uk-width-7-10">
                        	<div class="featured_img">
							<?php $f_thumb = get_the_post_thumbnail();?>
							<?php if ($f_thumb):?>
							<?php the_post_thumbnail(  array( 518,373 ) ); ?>
							<?php else:?>
							<img src="http://placehold.it/518x373">
							<?php endif;?>
							</div>
                        </div>
                        <div class="uk-width-medium-3-10 featured_text">
                            <div class="fix-height uk-text-left">
                               <h6><?php the_title();?></h6>
								<span><?php the_time('M,j,Y');?>  | </span>
								<span><?php the_author();?></span>
								<span>1:00 pm EST</span>
                                 <?php $trimexcerpt = get_the_excerpt();?>
							<?php $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 17, $more = '… ' );?>
							<?php echo '<p>' . $shortexcerpt . '</p>';?>                	
                            </div>
                    		<a class="read-more uk-border-rounded" href="<?php the_permalink();?>">READ MOre</a>
                        </div>
                    </div>
                	
                </div>
            </div>
			 
			<?php endwhile; ?>
			<?php endif; wp_reset_query(); ?>

		  
         	
            <?php while ( have_posts() ) : the_post(); ?>
            <?php $post_terms = wp_get_post_terms( $post->ID, 'resource_topic' ); ?>
            <?php $isotope_class = ''; ?>
            <?php foreach ($post_terms as $post_term) : ?>
				 
                <?php $isotope_class .= ','.'filter-' . $post_term->slug; ?>
            <?php endforeach; ?>
		
		
		
	
	
	
    <div class="uk-width-medium-1-4 bottom-gap" data-uk-filter="<?php echo ltrim($isotope_class, ',');?>">
                <div class="module-heading uk-text-left activated">
                     <?php $type_post = get_field('type');?>
      
      
							  <?php if($type_post=='White Paper'):?>
							   <h5>White Paper</h5>
							  <?php elseif($type_post =='Infographic'): ?>
							  <h5>Infographic</h5>
							  <?php elseif($type_post =='Webinar'): ?>
							  <h5>Webinar</h5>
							  <?php elseif($type_post =='Case Study'): ?>
							  <h5>Case Study</h5>
							  <?php elseif($type_post =='Tutorial'): ?>
							  <h5>Tutorial</h5>
							  <?php elseif($type_post =='Research Report'): ?>
							  <h5>Research Report</h5>
							  <?php elseif($type_post =='Trade Show'): ?>
							  <h5>Trade Show</h5>
							  <?php else:?>
							  <h5>Conference</h5>
							  <?php endif;?>
							  
							  <?php $post_icon = get_field ('icon');?>
                    <img alt="" class="uk-float-right" src="<?php echo $post_icon;?>" data-uk-svg>                        
                </div>
               
			   
			    <div class="box-content">
                	<div class="fix-height uk-text-left">
                    	<h6><?php the_title();?></h6>
                        <span><?php the_time('M,j,Y');?>  | </span>
                        <span><?php the_author();?></span>
                        <span>1:00 pm EST</span>
						
                        <?php $trimexcerpt = get_the_excerpt();?>
							<?php $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 17, $more = '… ' );?>
							<?php echo '<p>' . $shortexcerpt . '</p>';?>                 	
                    </div>
                    <a class="read-more uk-border-rounded" href="#">READ MOre</a>
                </div>
            </div>
		
			
		<?php endwhile;?>
	
            
                </div>
                <a class="learn-more uk-border-rounded" href="#">Load MOre</i></a>
            </div>
            
 
</section>



<?php endif;?>





<section>
    	<div class="social-share uk-conatainer uk-container-center uk-text-center">
        	<div class="uk-block">
                <a class="share-heading" href="#">SHARE THIS VIA:</a>
                <div class="share-option">
                	<?php echo do_shortcode('[sharethis]'); ?>     
                 
                </div>
               <p><?php the_field ('news_note','option');?></p> 
        	</div>
        </div>
    </section>
		

	
<?php
get_footer();
