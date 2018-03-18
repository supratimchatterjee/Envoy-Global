<?php
/**
 Template Name: Visa Specific Tab Content
 */

global $post;
$current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
$current_page_slug = $current_page->post_name;
$current_page_id = get_the_id();

$parent_id = wp_get_post_parent_id( $current_page_id );
if($parent_id) :
    $parent_link = get_permalink($parent_id);
    $redirect_link = $parent_link . '?tab=' . $current_page_slug;
    wp_redirect( $redirect_link, '301' );
    exit();
endif;
get_header(); ?>
 <section class="tab-sec uk-block-large">
    	<div class="uk-container uk-container-center">
            <div class="tm-switcher-content uk-container uk-container-center">
				<div class="uk-active">
					<div class="tab-content1 uk-container">
                	
                    <div class="uk-block">                    
                      	
                        <div class="uk-grid uk-container-center uk-text-center">
                            <div class="uk-width-medium-2-4 visa-module">
                               <?php the_field('left_column') ;?>
                            </div>
                            <div class="uk-width-medium-2-4 visa-module">
                               <?php the_field ('right_column'); ?>
                            </div>
                    </div>
                    
                        <div class="tab-accordion uk-block">
                            <div class="uk-grid">
                                <div class="uk-width-medium-7-10 uk-text-right collapse-text">
                                    <span>COLLAPSE/EXPAND ALL</span>
                                </div>
                                <div class="uk-width-medium-3-10">
                                  
                                </div>
                             
                             </div>  
                            <div class="uk-grid">
                            <?php if (have_rows('more_query')):?>
                                <div class="uk-accordion uk-width-medium-7-10">
                                <?php $i =1;?>								
                               <?php while (have_rows('more_query') ): the_row();?>
                                <div class="toggle_holder">
                                    <h6 data-uk-toggle="{target:'#toggle<?php echo $i;?>'}" class="uk-accordion-title"><?php the_sub_field('question_query');?></h6>
                                    <div id="toggle<?php echo $i;?>" class="uk-accordion-content uk-hidden">
                                        <p><?php the_sub_field('answer_query');?></p>
                                    </div>
                                  </div>
                                <?php $i++;?>
                                <?php endwhile;?>
                              
                            </div>
                            <?php endif;?>
                                <div class="uk-width-medium-3-10">
                                    <div class=" side-sec">
                                        <h6>REady to Get Going?</h6>
                                       <?php wp_nav_menu( array( 'theme_location' => 'visa-specific-menu', 'menu_id' => 'visa-specific-menu','container' => false ) ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php $graph_img = get_field('image_process'); ?>
                        <?php $graph_heading = get_field('heading_proc'); ?>
                        <?php $graph_title = get_field('title_process'); ?>
                        
                        <?php if($graph_img): ?>
                        <div class="process-graph">
                            <?php if($graph_heading): ?><h4><?php the_field('heading_proc');?></h4><?php endif; ?>
                            <?php if($graph_title): ?><h6><?php the_field ('title_process'); ?></h6><?php endif; ?>
                            <div class="graph-image">
                                <img src="<?php the_field('image_process'); ?>" alt="">
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <div class="user-questions">
                            <h4><?php the_field('heading_fq');?></h4>
                            <div class="tm-accordion">
                            <div class="uk-accordion uk-container-center">
                                <?php if ( have_rows('faq')):?>
                                <?php $d =1;?>
                                <?php while( have_rows ('faq')): the_row();?>
                                    <div class="toggle_holder">
                                        <h6 data-uk-toggle="{target:'#faq<?php echo $d;?>'}" class="uk-accordion-title"><?php the_sub_field('question_faq');?></h6>                    
                                        <div id="faq<?php echo $d;?>" class="uk-accordion-content uk-hidden">
                                            <?php the_sub_field('answer_faq');?>
                                        </div>
                                    </div>
                                    <?php $d++;?>
                                <?php endwhile; ?>
                                <?php endif;?>
                                
                            </div>
                        </div>
                        </div>
                        
                        <div class="more-info">
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <h4><?php the_field('title_alterneative');?></h4>
                                        <div class="visa-options uk-text-center">
                                            <p><?php the_field('description_alter');?></p>
                                            <?php if (have_rows('_alternate_links')):?>
                                            
                                                <ul>
                                                <?php while(have_rows('_alternate_links')): the_row();?>
                                                    <li><a href="<?php the_sub_field('link_menu');?>"><?php the_sub_field('menu_name_alter');?></a></li>
                                                <?php endwhile;?>
                                                </ul>
                                            
                                            <?php endif;?>
                                            <a class="read-more uk-border-rounded" href="<?php the_field('button_link_alter');?>"><?php the_field('button_lebel_alten');?></a>
                                            <?php the_field('note_alter'); ?>
                                        </div>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <h4><?php the_field('title_assesment');?></h4>
                                    <div class="user-option visa-options  uk-text-center">
                                        <div class="visa-input uk-text-left">
                                            <?php echo apply_filters('the_content', get_field('form_shortcode_assesment') ); ?>
                                        </div>
                                            <?php the_field ('note_assesment');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="watch-more">
                            <h4><?php the_field('heading_w_more');?></h4>
                            <?php if (have_rows ('watch_more')):?>
                            <div class="watchmore-videos">
                                <div class="uk-grid">
                                <?php while(have_rows ('watch_more')): the_row();?>
                                    <div class="uk-width-medium-1-2">
                                        <?php the_sub_field('more_video');?>                                    
                                        <h6><?php the_sub_field('title_more');?></h6>
                                        <p><?php the_sub_field('short_description_more');?></p>                                    
                                    </div>
                                <?php endwhile;?>
                                </div>
                                  
                            </div>
                            <?php endif;?>
                            
                        </div> 
                        
                        <div class="learn-sec uk-text-center">
                                <h3 class="uk-text-left">Learn more</h3>
                                <div class="blog-container uk-container-center">                        
                                <div class="uk-grid box-modules">                            
                               <?php $post_objects = get_field('learn_more_tab');?>	
                                <?php foreach( $post_objects as $post_object): $postno++;  ?>
                                <?php $post_id = $post_object->ID; ?>
                                <?php $author_id1 = $post_object ->post_author;?>
                                    <div class="uk-width-medium-1-3 bottom-gap">
                                        <div class="module-heading uk-text-left">
                                        <h5><?php echo get_field('type', $post_id);?></h5>
                                        <img alt="" class="uk-float-right" src="<?php the_field('icon',$post_id);?>" data-uk-svg>                        
                                        </div>
                                            <?php $thumb = get_the_post_thumbnail($post_id);?>
                                            <?php echo get_the_post_thumbnail($post_id, array(300,141));?>     
                                            
                                            <?php if ($thumb):?>                                 
                                            <div class="box-content tm-content">
                                            <?php else:?>
                                            <div class="box-content">
                                            <?php endif;?>
                                            <div class="fix-height uk-text-left">
                                                <h6><a href="<?php echo get_the_permalink($post_id); ?>"><?php echo $post_object ->post_title;?></a></h6>
                                             
                                                <?php $option = get_field('post_option', $post_id);?>
                                                    <?php if ($option == 1):?>
                                                        <span><?php the_field('custom_post_date', $post_id);?> | </span>
                                                        <?php the_field('place_resource', $post_id);?>
                                                    <?php else:?>
                                                        <span><?php echo get_the_time('M j, Y',$post_id);?>  | </span>
                                                        <span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
                                                        <?php the_author();?></a></span>
                                                    <?php endif;?>
                                                <?php if ($thumb):?>
                                               <?php $trimexcerpt = apply_filters('the_content', $post_object->post_content);
                                                $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 14, $more = '' );
                                                echo '<p>' . $shortexcerpt . '</p>'; ?>
                                                <?php else:?>
                                                <?php $trimcontent = apply_filters('the_content', $post_object->post_content);
                                                $shortcontent = wp_trim_words( $trimcontent, $num_words = 28, $more = '' );
                                                echo '<p>' . $shortcontent . '</p>'; ?>
                                                 <?php endif;?>            	
                                            </div>
                                            <?php $btn_level = get_field('button_text', $post_id); ?>
                                            <a class="read-more uk-border-rounded" href="<?php echo get_the_permalink($post_id); ?>">
                                                <?php if($btn_level): ?>
                                                    <?php echo $btn_level; ?>
                                                <?php else: ?>
                                                Read More
                                                <?php endif; ?>
                                            </a>
                                        </div>
                                    </div>                      
                                   <?php endforeach;?>
                                    
                                </div>
                                <?php $section_btn = get_field('button_lebel_lm'); ?>
                                <?php if($section_btn): ?>
                                     <a class="learn-more uk-border-rounded" href="<?php the_field('button_link_lm'); ?>">
                                        <?php echo $section_btn; ?>
                                     </a>
                                 <?php endif; ?>
                            </div>
                            <?php $learn_more_note = get_field('learn_more_note'); ?>
                            
                                <div class="learnmore-note">
                                    <?php echo $learn_more_note; ?>
                                </div> 
                           
                            </div>
                            
                        
                    </div>
                    </div>
                    
                                       	
                	</div>
				</div>
			</div>
    </div>
    </section>
	
	
<?php
get_footer();
