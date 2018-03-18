<?php
/**
 Template Name: News Topic
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php $bg_img=get_field('banner_image','option');?>
	<div class="resource-banner uk-flex uk-flex-middle" <?php if (!empty($bg_img)){?>style=" background-image: url(<?php echo $bg_img; ?>); "<?php }?>>
		<div class="uk-container uk-container-center">
			<div class="resource-caption">
				<h1><?php the_field('banner_text','option');?></h1>
			</div>
		</div>      
    </div>
    


	<section class="resource-detail uk-container uk-container-center">    	
		
		<div class="sub-menu uk-text-center uk-clearfix uk-hidden-small">
			<?php wp_nav_menu( array( 'theme_location' => 'news_insights', 'menu_id' => 'news_insights', 'container' => false ) ); ?>
		</div>
		<div class="uk-visible-small filter-dropdown-for-mobile uk-container uk-container-center">
      <div class="filter">
          <div class="uk-width-1-1 uk-text-center filter-heading uk-position-relative">
            Category
            <span>Filter</span> 
          </div>
          <ul class="filter-options uk-margin-bottom-remove">
            <li>
              <a>feature</a>
            </li>
            <li>
              <a>category</a>
              <ul id="filter" class="filter-more-option uk-text-left">
                  <li><input name="b-visas" value=".b-visas" id="b-visas" type="checkbox"><label for="case-studies">Case Studies</label></li>
                
                  <li><input name="e-visas" value=".e-visas" id="e-visas" type="checkbox"><label for="events">Events</label></li>

                  <li><input name="global" value=".global" id="global" type="checkbox"><label for="research-reports">Research Reports</label></li>

                  <li><input name="green-cards-eb-visas" value=".green-cards-eb-visas" id="green-cards-eb-visas" type="checkbox"><label for="tactics">Tactics</label></li>

                  <li><input name="h-visas" value=".h-visas" id="h-visas" type="checkbox"><label for="tutorials">Tutorials</label></li>
                              
              </ul>
            </li>
            <li>
              <a>topic</a>
              <ul id="filter" class="filter-more-option uk-text-left">
                  <li><input name="b-visas" value=".b-visas" id="b-visas" type="checkbox"><label for="hr-tips">HR Tips</label></li>
                
                  <li><input name="e-visas" value=".e-visas" id="e-visas" type="checkbox"><label for="immigration">immigration</label></li>

                  <li><input name="global" value=".global" id="global" type="checkbox"><label for="strategy-insights">Strategy & Insights</label></li>

                  <li><input name="green-cards-eb-visas" value=".green-cards-eb-visas" id="green-cards-eb-visas" type="checkbox"><label for="tech-culture">Tech & Culture</label></li>
                              
              </ul>
            </li>
            <li>
              <a>type</a>
              <ul id="filter" class="filter-more-option uk-text-left">
                  <li><input name="b-visas" value=".b-visas" id="b-visas" type="checkbox"><label for="b-visas">B Visas</label></li>
                
                  <li><input name="e-visas" value=".e-visas" id="e-visas" type="checkbox"><label for="e-visas">E Visas</label></li>

                  <li><input name="global" value=".global" id="global" type="checkbox"><label for="global">Global</label></li>

                  <li><input name="green-cards-eb-visas" value=".green-cards-eb-visas" id="green-cards-eb-visas" type="checkbox"><label for="green-cards-eb-visas">Green Cards (EB Visas)</label></li>

                  <li><input name="h-visas" value=".h-visas" id="h-visas" type="checkbox"><label for="h-visas">H Visas</label></li>

                  <li><input name="h-1b-visas" value=".h-1b-visas" id="h-1b-visas" type="checkbox"><label for="h-1b-visas">H-1B Visas</label></li>

                  <li><input name="l-visas" value=".l-visas" id="l-visas" type="checkbox"><label for="l-visas">L Visas</label></li>

                  <li><input name="o-visas" value=".o-visas" id="o-visas" type="checkbox"><label for="o-visas">O Visas</label></li>

                  <li><input name="p-visas" value=".p-visas" id="p-visas" type="checkbox"><label for="p-visas">P Visas</label></li>

                  <li><input name="tn-visas" value=".tn-visas" id="tn-visas" type="checkbox"><label for="tn-visas">TN Visas</label></li>
              </ul>
            </li>
          </ul>
      </div>
    </div>

		<div class="resource-content uk-container uk-container-center uk-text-center">
			<em class="uk-hidden-small"><img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" alt=""></em>
			<div class="submenu-checkbox uk-hidden-small">
				<?php $news_taxs = get_terms('topic' ); ?>
				<ul id="filters"> 
					<?php foreach($news_taxs as $news_tax) : ?>
					<?php $term_id = $news_tax->term_id; ?>
                    	
                        <li><input type="checkbox" name="<?php echo $news_tax->slug;?>" value=".<?php echo $news_tax->slug;?>" id="<?php echo $news_tax->slug;?>"><label for="<?php echo $news_tax->slug;?>"><?php echo $news_tax->name;?></label></li>
					
					<?php endforeach;?>
				</ul>              
			</div>
	   
			<div id="container" class="uk-grid box-modules" data-uk-grid-margin="">
            	<div class="grid-sizer uk-width-1-4 uk-width-medium-1-4"></div>
                
		  	<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 1, 'meta_key' => '_is_ns_featured_post', 'meta_value' => 'yes', 'taxonomy' => 'topic' ); ?>
			<?php $query = new WP_Query($args); ?>
			<?php if ($query->have_posts()) : ?>
				<?php while ($query->have_posts()) : $query->the_post(); ?>
					<?php $id = $query->post->ID; ?>
					<?php $post_terms = wp_get_post_terms( $post->ID, 'topic' ); ?>
					<?php $isotope_class = ''; ?>
					<?php foreach ($post_terms as $post_term) : ?>
                    	<?php $isotope_class .= ' '. $post_term->slug; ?>
					<?php endforeach; ?>
		
					<div class="uk-width-large-3-4 bottom-gap item featured-item <?php echo $isotope_class; ?>">
						<div class="module-heading uk-text-left activated">
							<h5><?php the_field('posttype_heading');?></h5>
							  <?php $post_icon = get_field ('icon');?>
							<img alt="" class="uk-float-right" src="<?php echo $post_icon;?>" data-uk-svg>                         
						</div>
						<div class="box-content">
							<div class="uk-grid" data-uk-grid-margin="">
								<div class="uk-width-medium-7-10">
									<div class="featured_img"><?php the_post_thumbnail(  array( 518,373 ) ); ?></div>
								</div>
								<div class="uk-width-medium-3-10 featured_text">
									<div class="fix-height uk-text-left">
									  <h6><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h6>
									<?php $option = get_field('post_option');?>
									<?php if ($option):?>
										<span><?php the_field('custom_post_date');?> | </span>
										<?php the_field('place_resource');?>
									<?php else:?>
										<span><?php the_time('M, j Y');?>  | </span>
										 <span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
										   <?php the_author();?></a></span>
									<?php endif;?>  
									<?php $trimexcerpt = get_the_excerpt();?>
                    <?php $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 24, $more = '… ' );?>
                    
                    <?php if($news_excerpt): ?>
                    	<?php echo $news_excerpt; ?>
                    <?php else: ?>
                    	<?php echo '<p>' . $shortexcerpt . '</p>';?>	
                    <?php endif; ?>                  	
									</div>
								<?php $btn_text = get_field('more_button_label'); ?>
                    		<a class="read-more uk-border-rounded" href="<?php the_permalink(); ?>">
								<?php if($btn_text): ?><?php echo $btn_text; ?><?php else: ?>Read More<?php endif; ?>
                            </a>
								</div>
							</div>
							
						</div>
					</div>
			
			<?php endwhile; ?>
			<?php endif; wp_reset_query(); ?>
			
			<?php $all_terms = array(); ?>
			<?php $terms = get_terms('topic'); ?>
			<?php foreach($terms as $term) : ?>
				<?php $all_terms[] = $term->slug; ?>
			<?php endforeach; ?>
            <?php $news_excerpt = get_field('news_excerpt'); ?>
			
			<?php $args = array( 'post_type' => 'post', 'posts_per_page' => -1, 'meta_key' => '_is_ns_featured_post', 'meta_compare' => 'NOT EXISTS', 'taxonomy' => 'topic' ); ?>
			<?php $query = new WP_Query($args); ?>
			<?php if ($query->have_posts()) : $postno = 0; ?>
			<?php while ($query->have_posts()) : $query->the_post(); ?>
				<?php $id = $query->post->ID; $postno++; ?>
				<?php $post_terms = wp_get_post_terms( $post->ID, 'topic' ); ?>
				<?php $isotope_class = ''; ?>
				<?php foreach ($post_terms as $post_term) : ?>
                	<?php $isotope_class .= ' '. $post_term->slug; ?>
				<?php endforeach; ?>
				<?php if ($postno == 2):?>
					<div class="uk-width-large-1-4 bottom-gap item <?php echo $isotope_class; ?>">               
						<div class="box-content round-border">
							<div class="fix-height stay_informed uk-text-left">
								<div class="widget-detail">
									<?php echo do_shortcode ('[gravityform id="3" title="true" description="false" ajax="true"]');?>
								</div>                   	
							</div>                   
						</div>
					</div>
			
					<div class="uk-width-large-2-4 bottom-gap item <?php echo $isotope_class; ?>">
						<div class="module-heading uk-text-left activated">
							<h5><?php the_field('posttype_heading');?></h5>
							<?php $post_icon = get_field ('icon');?>
							<img alt="" class="uk-float-right" src="<?php echo $post_icon;?>" data-uk-svg>                        
						</div>
						<div class="box-content">
							<div class="uk-grid" data-uk-grid-margin="">
								<div class="uk-width-medium-5-10" >
									<div class="featured_img"><?php the_post_thumbnail(  array( 214,358 ) ); ?></div>
								</div>
								<div class="uk-width-medium-5-10 featured_text">
									<div class="fix-height uk-text-left">
										<h6><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h6>
										
								<?php $option = get_field('post_option');?>
								<?php if ($option):?>
									<span><?php the_field('custom_post_date');?> | </span>
									<?php the_field('place_resource');?>
								<?php else:?>
									<span><?php the_time('M, j Y');?>  | </span>
									<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
									<?php the_author();?></a></span>
								<?php endif;?>
								      <?php $trimexcerpt = get_the_excerpt();?>
							<?php $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 24, $more = '… ' );?>
                            
                            <?php if($news_excerpt): ?>
								<?php echo $news_excerpt; ?>
                            <?php else: ?>
                                <?php echo '<p>' . $shortexcerpt . '</p>';?>	
                            <?php endif; ?>              	
									</div>
									<a class="read-more uk-border-rounded" href="#">Get the news</a>
								</div>
							</div>
						</div>
					</div>
			
        	<?php else:?>
				<div class="uk-width-large-1-4 bottom-gap item <?php echo $isotope_class; ?>">
					<div class="module-heading uk-text-left activated">
					   
						 <h5><?php the_field('posttype_heading');?></h5>
					  <?php $post_icon = get_field ('icon');?>
						<img alt="" class="uk-float-right" src="<?php echo $post_icon;?>" data-uk-svg>                        
					</div>
					<div class="box-content">
						<div class="fix-height uk-text-left">
							<h6><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h6>
							
						<?php $option = get_field('post_option');?>
						<?php if ($option):?>
							<span><?php the_field('custom_post_date');?> | </span>
							<?php the_field('place_resource');?>
						<?php else:?>
							<span><?php the_time('M, j Y');?>  | </span>
							<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
							<?php the_author();?></a></span>
						<?php endif;?>
						
							<?php $news_excerpt = get_field('news_excerpt'); ?>
							<?php $trimexcerpt = get_the_excerpt();?>
							<?php $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 24, $more = '… ' );?>
                            
                            <?php if($news_excerpt): ?>
								<?php echo $news_excerpt; ?>
                            <?php else: ?>
                                <?php echo '<p>' . $shortexcerpt . '</p>';?>	
                            <?php endif; ?>               	
						</div>
						<?php $btn_text = get_field('more_button_label'); ?>
                    		<a class="read-more uk-border-rounded" href="<?php the_permalink(); ?>">
								<?php if($btn_text): ?><?php echo $btn_text; ?><?php else: ?>Read More<?php endif; ?>
                            </a>
					</div>
				</div>
			<?php endif;?>
          
		  <?php endwhile; ?>
		  
		<?php endif; wp_reset_query(); ?>
		   
                </div>
            </div>
            
 
</section>



<?php endwhile;?>
		
<script type="text/javascript">
var url = window.location.href;
jQuery(document).ready(function($) {
	//isotop//
	var $container = $('#container'),
		$checkboxes = $('#filters input');
	$container.isotope({
		itemSelector: '.item',
		percentPosition: true,
		masonry: {
			columnWidth: '.grid-sizer'
		}
	});
	$checkboxes.change(function() {
		var filters = [];
		// get checked checkboxes values
		$checkboxes.filter(':checked').each(function() {
			filters.push(this.value);
		});
		// ['.red', '.blue'] -> '.red, .blue'
		filters = filters.join(', ');
		
		var newUrl = url.split('?');
		
		var param = filters.split(".").join("").split(" ").join("");
			
		history.pushState('', '', newUrl[0] + '?' + param);
		
		$container.isotope({
			filter: filters
		});
	});

	function checkParamsAndSelect() {
		var param = url.split('?');
		
		if(!param[1])
			return;
		
		param = param[1];
		param = param.split(',');
		$.each(param, function(index, value){
			console.log($('#filters').find('[name="' + value + '"]'));
			$('#filters').find('[name="' + value + '"]').trigger('click');
		});
	}
	
	checkParamsAndSelect();
	$container.one( 'arrangeComplete', function() {
		console.log('arrangeComplete');
		
	});	
	
	$('#shuffle').click(function() {
		$container.isotope('shuffle');
	});
	//****************************
	// Isotope Load more button
	//****************************
	var initShow = 9; //number of items loaded on init & onclick load more button
	var counter = initShow; //counter for load more button
	var iso = $container.data('isotope'); // get Isotope instance
	loadMore(initShow); //execute function onload
	function loadMore(toShow) {
		$container.find(".hidden").removeClass("hidden");
		var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function(item) {
			return item.element;
		});
		$(hiddenElems).addClass('hidden');
		$container.isotope('layout');
		//when no more to load, hide show more button
		if (hiddenElems.length == 0) {
			jQuery("#load-more").hide();
		} else {
			jQuery("#load-more").show();
		};
	}
	//append load more button
	$container.after('<span id="load-more" class="learn-more uk-border-rounded">Load More</span>');
	//when load more button clicked
	$("#load-more").click(function() {
		if ($('#filters input').data('clicked')) {
			//when filter button clicked, set initial value for counter
			counter = initShow;
			$('#filters input').data('clicked', false);
		} else {
			counter = counter;
		};
		counter = counter + initShow;
		loadMore(counter);
	});
	//when filter button clicked
	$("#filters").click(function() {
		$(this).data('clicked', true);
		loadMore(initShow);
	});
});
</script>		
<?php
get_footer();
