<?php
/**
 * Template Name: Test
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Visanow
 */

get_header(); ?>

	<section class="privacy-policy lightgrey-bg">
			<?php $tweets = getTweets('speckyboy', 3, array("trim_user" => false)); ?>
			<pre>
			<?php print_r($tweets); ?>
			</pre>
			<?php $regex = '/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/'; ?>
			<?php foreach($tweets as $tweet) : ?>
				<div style="border-bottom: 1px solid #e1e1e1;">
					<?php $convertedTweet = preg_replace($regex, '<a href="$0" target="_blank" title="$0">$0</a>',  $tweet['text']); ?>
					<?php  $tweetLink = $tweet['entities']['urls'][0]['url']; ?>
					
					<div>Content : <?php echo $convertedTweet; ?></div>
					<?php $createdAt = $tweet['created_at']; ?>
					<?php $formattedDate = $newDate = date("M d", strtotime($createdAt)); ?>
					<div><?php echo $formattedDate; ?></div>
					<div><?php echo $tweet['user']['name'];?></div>
					<img src="<?php echo $tweet['user']['profile_image_url']; ?>">
					<span class="st_sharethis" st_title="Share Tweet" st_url='<?php echo $tweetLink; ?>'></span>
				</div>
			<?php endforeach; ?>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
</section>
<?php
get_footer();
