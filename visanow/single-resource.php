<?php/** * The template for displaying all single posts. * * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post * * @package Visanow */get_header(); ?><?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>		<section class="lightgrey-bg">	<div class="white-bg uk-container immigration-report uk-container-center">    	<div class="uk-grid uk-block">        	<div class="uk-width-medium-2-10 right-sidebar uk-hidden-small">            	<div class="widget-detail">                	<h6>CATEGORY</h6>										<span><?php $terms = wp_get_post_terms( $post->ID, 'resource_category' ); ?>						<?php foreach($terms as $term) : ?>						<?php echo $term -> name;?>						<?php endforeach;?></span>                </div>                <div class="widget-detail">                	<h6>PUBLISHED</h6>                    <span><?php the_time('M j , Y');?></span>                </div>                <div class="widget-detail">                	<h6>COMMON U.S. WORK VISAS</h6>					<?php wp_nav_menu( array( 'theme_location' => 'single-menu', 'menu_id' => 'single-menu', 'container' => false ) ); ?>                </div>            </div>            <div class="uk-width-medium-6-10 immigration-deatils">            	                <h1 class="single-title"><?php the_title();?></h1>					<?php the_post_thumbnail('large');?>             		<?php the_content();?>                <div class="uk-visible-small">                    <div class="widget-detail">                        <h6>CATEGORY</h6>                                                <?php $terms = wp_get_post_terms( $post->ID, 'resource_category' ); ?>                            <?php foreach($terms as $term) : ?>                            <a href="#"><?php echo $term -> name;?></a>                            <?php endforeach;?>                    </div>                    <div class="widget-detail">                        <h6>COMMON U.S. WORK VISAS</h6>                        <?php wp_nav_menu( array( 'theme_location' => 'wok-visa-menu', 'menu_id' => 'wok-visa-menu', 'container' => false ) ); ?>                    </div>                </div>                <h5>Want to read more?</h5>                <div class="custom-dropdown contact-form uk-text-center">                	<?php echo do_shortcode('[gravityform id="5" title="false" description="false" ajax="true" tabindex="30"]'); ?>                      <?php the_field('resource_legal','option');?>                </div>                 <hr class="uk-visible-small uk-margin-remove">                <h5  class="uk-visible-small uk-hidden">Stay informed</h5>                <div class="custom-dropdown uk-visible-small uk-text-center contact-form">                    <?php echo do_shortcode('[widget id="wysija-2"]');?>                </div>                 <hr class="uk-visible-small uk-margin-remove">            </div>            <div class="uk-width-medium-2-10 left-sidebar uk-hidden-small">            	<div class="widget-detail">                	<h6>HIGHLIGHTS</h6>					<?php the_field('highlight_points');?>                </div>                <div class="widget-detail uk-clearfix">                	<h6>SHARE THIS</h6>                        <div class="share-option">   							<?php echo do_shortcode('[sharethis]'); ?>                         </div>                </div>                                            </div>        </div> 	   </div>    </section><?php $rltd_post = get_field('related_post');?><?php if(!empty($rltd_post)){?><div class="uk-grid  blog" data-uk-grid-margin>    <div class="uk-width-medium-1-1">                    <div class="uk-text-center uk-block-large" style="background:url(<?php echo get_template_directory_uri();?>/images/background3.jpg) no-repeat center top; background-size:cover;">                                    <div class="uk-container uk-container-center">                    <h3><span><?php the_field('learn_more_heading');?></span></h3>                    <div class="blog-container uk-container-center">                                                <div class="uk-grid box-modules">                        <?php								$postno = 0 ;								$args = array(								'post_type'         =>		array('post', 'resource'),								'post__in' => $rltd_post						);						$query = new WP_Query($args);						if ($query->have_posts()) :							while ($query->have_posts()) : $query->the_post();							$id    =    $query->ID;							$postno++;						?>						                        <?php $type_icon = get_field('icon'); ?>	                                                                              <div class="uk-width-1-3 bottom-gap">                                <div class="module-heading uk-text-left">                                <h5><?php the_field('type');?></h5>                                <?php if(!empty($type_icon)) {?><img class="uk-float-right" src="<?php echo $type_icon;?>" alt="" data-uk-svg><?php } ?>                                                        </div>																	<?php $thumb = get_the_post_thumbnail($id);?>									<?php echo get_the_post_thumbnail($id, array(288,136));?>     										<?php if ($thumb):?>                                 										<div class="box-content tm-content">										<?php else:?>										<div class="box-content">										<?php endif;?>                                    <div class="fix-height uk-text-left">                                        <h6> <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h6>                                       <?php $option = get_field('post_option');?>													<?php if ($option == 1):?>														<span><?php the_field('custom_post_date');?> | </span>														<?php the_field('place_resource');?>													<?php else:?>														<span><?php echo get_the_time('M j, Y');?>  | </span>														<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">														<?php the_author();?></a></span>													<?php endif;?>                                        <?php if($thumb):?>                                        <?php $news_content = get_the_content(); ?>                                         <?php $trimexcerpt = apply_filters('the_content', $news_content);											$shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 14, $more = '' );											echo '<p>' . $shortexcerpt . '</p>'; ?>                 											<?php else:?>										 <?php $new_content = get_the_content(); ?>										 <?php $trimexcerp = apply_filters('the_content', $new_content);											$shorexcerp = wp_trim_words( $trimexcerp, $num_words = 28, $more = '' );											echo '<p>' . $shorexcerp . '</p>'; ?>                 											<?php endif;?>	                                    </div>                                    <?php $btn_level = get_field('button_text'); ?>                                    <a class="read-more uk-border-rounded" href="<?php echo get_the_permalink(); ?>">                                        <?php if($btn_level): ?><?php echo $btn_level; ?><?php else: ?>Read More<?php endif; ?>                                    </a>                                </div>                            </div>                                                                                                   <?php endwhile; ?>						<?php endif; wp_reset_query(); ?>                             </div>						<?php $rlt_btn = get_field('arpb_label');?>						<?php if (!empty($rlt_btn)) {?>                         <a class="learn-more uk-border-rounded" href="<?php the_field('arpb_link');?>"><?php echo $rlt_btn;?></i></a>						 <?php }?>                    </div>                </div>                           </div>    </div></div><?php }?>  <?php /*?>  <div class="page-notify uk-text-center">   		<p><?php the_field('news_note','option');?></p>   </div><?php */?> <?php endwhile;?> <?php endif;?>  <?phpget_footer();