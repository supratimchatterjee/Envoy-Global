<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Visanow
 */

?>

<section>
	<div class="social-share uk-conatainer uk-container-center uk-text-center">		
			<a class="share-heading" href="#">SHARE THIS VIA:</a>
			<div class="share-option">
				<?php echo do_shortcode('[sharethis]'); ?>     
			 
			</div>
		   <p><?php the_field ('news_note','option');?></p>
		
	</div>
</section>

<footer class="footer">
	<div class="uk-container uk-container-center">
	<div class="footer-top">            	
		<div class="git">
			<h5>GET IN TOUCH</h5>
			<div class="uk-grid">
					<div class="uk-width-medium-1-1">
						<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="60"]'); ?>
					</div>
					
			</div>
		</div>
	</div>
			<div class="footer-bottom uk-visible-large">
				<div class="uk-grid">
					<div class="uk-width-medium-2-10">
						<div class="footer-logo">
							<img src="<?php the_field('footer_logo','option');?>" alt="">
						</div>
						<?php the_field('telephone_section','option');?>
					</div>
					
					<div class="uk-width-medium-5-10 foote-middle">
					 <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_id' => 'footer-menu', 'menu_class' => 'footer-nav uk-clearfix', 'container' => false ) ); ?>	
						<div class="policy">
							<?php the_field('copyright_content','option');?>
						</div>
					</div>
					<div class="uk-width-medium-3-10 social">
						<div class="social-icons">
							<a target="_blank" href="<?php the_field('twitter_link','option');?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a target="_blank" href="<?php the_field('facebook_link','option');?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a target="_blank" href="<?php the_field('linkedin_link','option');?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>                          	<a href="<?php the_field('youtube_link','option');?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
							<a target="_blank" href="<?php the_field('gplus_link','option');?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>                                   
						</div>
						<?php $first_payment = get_field('first_payment_link','option'); ?>
                        <?php $second_payment = get_field('second_payment_link','option'); ?>
                        <?php $third_payment = get_field('third_payment_link','option'); ?>
						<div class="payment">
							<ul>
								<li>
									<?php if(!empty($first_payment)){ ?><a href="<?php echo $first_payment;?>"><?php } ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/payment1.png" alt="">
                                    <?php if(!empty($first_payment)){ ?></a><?php } ?>
                                </li>
								<li>
									<?php if(!empty($second_payment)){ ?><a href="<?php echo $second_payment;?>"><?php } ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/payment2.png" alt="">
                                    <?php if(!empty($second_payment)){ ?></a><?php } ?>
                                </li>
								<li>
									<?php if(!empty($third_payment)){ ?><a href="<?php echo $third_payment;?>"><?php } ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/payment3.png" alt="">
                                    <?php if(!empty($third_payment)){ ?></a><?php } ?>
                                </li>
							</ul>
						</div>
					</div>
				</div>
			</div>

	</div>
	<a class="footer-arrow" href="#top">		
			<img src="<?php echo get_template_directory_uri(); ?>/images/footer-arrow.png" alt="">		
	</a>
</footer>

<div class="mobile-footer-bottom uk-clearfix uk-hidden-large">
	<div class="responsive-footer-logo">
		<img src="<?php the_field('footer_logo','option');?>" alt="">
	</div>
	<div class="responsive-footer-menu uk-clearfix">
		<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_id' => 'footer-menu', 'menu_class' => 'footer-nav uk-clearfix', 'container' => false ) ); ?>
	</div>
	<div class="social-icons">
		<div class="uk-clearfix">
			<a href="<?php the_field('twitter_link','option');?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="<?php the_field('facebook_link','option');?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="<?php the_field('linkedin_link','option');?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
	     	<a href="<?php the_field('youtube_link','option');?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
			<a href="<?php the_field('gplus_link','option');?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		</div>
	</div>
	<div class="mobile-desc"><?php the_field('telephone_section','option');?></div>
	<div class="policy">
		<?php the_field('copyright_content','option');?>
	</div>
	
	<div class="payment">
		<ul>
			<li><a href="<?php the_field('first_payment_link','option');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/payment1.png" alt=""></a></li>
			<li><a href="<?php the_field('second_payment_link','option');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/payment2.png" alt=""></a></li>
			<li><a href="<?php the_field('third_payment_link','option');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/payment3.png" alt=""></a></li>
		</ul>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
