<?php
/**
 Template Name: Resource Topic
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php $bg_img=get_field('image_resource','option');?>
	<div class="resource-banner uk-flex uk-flex-middle" <?php if (!empty($bg_img)){?>style=" background-image: url(<?php echo $bg_img; ?>); "<?php }?>>
		<div class="uk-container uk-container-center">
			<div class="uk-text-center resource-caption">
				<h1><?php the_field('banner_text_resource','option');?></h1>
			</div>
		</div>      
    </div>
    
						<!--	Show taxonomy terms-->


    <section class="resource-detail uk-container uk-container-center">    	
         <div class="sub-menu uk-text-center uk-clearfix uk-hidden-small">
		  <?php wp_nav_menu( array( 'theme_location' => 'visa_resource', 'menu_id' => 'visa-resource-menu', 'container' => false ) ); ?>
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
				<li>
					<a>category</a>
					<ul id="filter" class="filter-more-option uk-text-left">
							<li><input name="b-visas" value=".b-visas" id="b-visas" type="checkbox"><label for="case-studies">Case Studies</label></li>
            
                        	<li><input name="e-visas" value=".e-visas" id="e-visas" type="checkbox"><label for="events">Events</label></li>

                        	<li><input name="global" value=".global" id="global" type="checkbox"><label for="infographics">Infographics</label></li>

                        	<li><input name="green-cards-eb-visas" value=".green-cards-eb-visas" id="green-cards-eb-visas" type="checkbox"><label for="research-reports">Research Reports</label></li>

                        	<li><input name="h-visas" value=".h-visas" id="h-visas" type="checkbox"><label for="tutorials">Tutorials</label></li>

                        	<li><input name="h-1b-visas" value=".h-1b-visas" id="h-1b-visas" type="checkbox"><label for="white-papers">White Papers</label></li>
                        	
					</ul>
				</li>
				<li>
					<a>visa type</a>
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
            <em><img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" alt=""></em>
                <div class="submenu-checkbox">
                <?php $taxs = get_terms('resource_topic'); ?>
                    <ul id="filters">  
                        <?php foreach($taxs as $tax) : ?>
                        <?php $term_id = $tax->term_id; ?>
                            <li><input type="checkbox" name="<?php echo $tax->slug;?>" value=".<?php echo $tax->slug;?>" id="<?php echo $tax->slug;?>"><label for="<?php echo $tax->slug;?>"><?php echo $tax->name;?></label></li>  
                            <!--<li data-uk-filter="filter-<?php echo $tax->slug;?>"><?php echo $tax->name;?></li>-->
                        <?php endforeach;?>
                    </ul>             
                </div>
			
            				<!--Featured Post Under Topic -->
            
            <div id="container" class="uk-grid box-modules">
            	<div class="grid-sizer uk-width-medium-1-4"></div>
			<?php $args = array( 'post_type' => 'resource', 'posts_per_page' => 1, 'meta_key' => '_is_ns_featured_post', 'meta_value' => 'yes', 'taxonomy' => 'resource_topic' ); ?>
				<?php
				$query = new WP_Query($args);
				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
					$id    =    $query->ID; 
				?>
				
				 <?php $post_terms = wp_get_post_terms( $post->ID, 'resource_topic' ); ?>
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
						<div class="uk-grid">
							<div class="uk-width-medium-7-10">
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
									<?php $news_excerpt = get_field('resource_excerpt'); ?>
							<?php $trimexcerpt = get_the_excerpt();?>
							<?php $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 24, $more = '… ' );?>
                            
                            <?php if($news_excerpt): ?>
								<?php echo $news_excerpt; ?>
                            <?php else: ?>
                                <?php echo '<p>' . $shortexcerpt . '</p>';?>	
                            <?php endif; ?>              	
								</div>
								<?php $btn_text = get_field('button_text'); ?>
								<a class="read-more uk-border-rounded" href="<?php the_permalink(); ?>">
									<?php if($btn_text): ?><?php echo $btn_text; ?><?php else: ?>Read More<?php endif; ?>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>
                
					
                    
                    		<!--	Remaining Posts Under Topic-->
			
            
              <?php
					 $args = array( 'post_type' => 'resource', 'posts_per_page' => -1, 'meta_key' => '_is_ns_featured_post', 'meta_compare' => 'NOT EXISTS', 'taxonomy' => 'resource_topic' ); 				
					$query = new WP_Query($args);
					if ($query->have_posts()) : $postno = 0;
						while ($query->have_posts()) : $query->the_post();
						$id    =    $query->ID; 
						$postno++;
				?>
                
                <?php $post_terms = wp_get_post_terms( $post->ID, 'resource_topic' ); ?>
				<?php $isotope_class = ''; ?>
				<?php foreach ($post_terms as $post_term) : ?>
				 <?php $isotope_class .= ' '. $post_term->slug; ?>
				<?php endforeach; ?>
                
				<div class="uk-width-large-1-4 bottom-gap item <?php echo $isotope_class; ?>">
					<div class="module-heading uk-text-left activated">
						<?php $type_post = get_field('type');?>
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
							
							<?php $news_excerpt = get_field('resource_excerpt'); ?>
							<?php $trimexcerpt = get_the_excerpt();?>
							<?php $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 24, $more = '… ' );?>
                            
                            <?php if($news_excerpt): ?>
								<?php echo $news_excerpt; ?>
                            <?php else: ?>
                                <?php echo '<p>' . $shortexcerpt . '</p>';?>	
                            <?php endif; ?>               	
							</div>
							<?php $btn_text = get_field('button_text'); ?>
							<a class="read-more uk-border-rounded" href="<?php the_permalink(); ?>">
							<?php if($btn_text): ?><?php echo $btn_text; ?><?php else: ?>Read More<?php endif; ?>
							</a>
					</div>
				</div>
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
	var initShow = 6; //number of items loaded on init & onclick load more button
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
