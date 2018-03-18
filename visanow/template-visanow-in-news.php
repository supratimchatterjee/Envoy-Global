<?php
/**
 Template Name: Visanow In News
 */

get_header(); ?>
	<div class="sub-navigation">
		<div class="uk-container uk-container-center">
		
		<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'menu_class' => 'uk-subnav', 'container' => false ) ); ?>
		</div>
    </div>
	
		<div class="privacy-statement white-bg uk-container uk-container-center visa-news">
			<h3><span>NEWSROOM</span></h3>
			<div class="search-content immigration-content">
				<div class="uk-grid">
					<div class="uk-width-medium-3-10">
						<div class="search-sidebar immigration-sidebar">
							<form class="uk-border-rounded uk-display-inline-block">
								<input type="text" placeholder="Search" class="uk-border-rounded">
								<input type="submit" value="submit">
							</form>
							<a href="#">visanow in the news</a>
							<ul>        
								<li><a href="#">2016</a></li>
								<li><a href="#">2015</a></li>
								<li><a href="#">2014</a></li>
							</ul>                                                   
						</div>						
					</div>
					<div class="uk-width-medium-7-10">
						<h5>Visanow in the news</h5>
						<div class="search-detail news-detail">
							<div class="uk-grid">
								<div class="uk-width-medium-4-10">
									<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/newsroom1.jpg">
								</div>
								<div class="uk-width-medium-6-10">
									<h5>Watchdog Cites Processing Delays, Disparities at USCIS</h5>
									<span>SHRM</span>
									<p>CHICAGO, August 11, 2016 — Head of Global Immigration Sarah Maxwell was quoted in the SHRM article, “Watchdog Cites Processing Delays, Disparities at USCIS,” on August 14, 2016.The reporter, Roy Maurer, cites findings from the Visanow Immigration Trends 2016 survey, which found that almost half of respondents say their company’s visa application process has become more difficult in the past five years. In addition, Maxwell explains the hardships that lengthy processing delays have on both companies and employees.</p>
									<a href="#">Read the Full Article</a>
								</div>
							</div>  
						</div>
						<div class="search-detail news-detail">
							<div class="uk-grid">
								<div class="uk-width-medium-4-10">
									<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/newsroom2.jpg">
								</div>
								<div class="uk-width-medium-6-10">
									<h5>Strong Jobs Report Signals Two-Tier Labor Market</h5>
									<span>SHRM</span>
									<p>August 5, 2016 — Workforce Trends Analyst and CMO Jamie Gilpin was quoted in the SHRM article, “Strong Jobs Report Signals Two-Tier Labor Market,” on August 5, 2016. Gilpin explained that while we saw better-than- expected gains in the July jobs report, there is clearly a growing skills gap. She suggests that businesses start “thinking strategically about balancing long-term investment in training current and future workforces with identifying workers around the world who have these skills today.”</p>
									<a href="#">Read the Full Article</a>
								</div>
							</div>  
						</div>
						<div class="search-detail news-detail">
							<div class="uk-grid">
								<div class="uk-width-medium-4-10">
									<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/newsroom3.jpg">
								</div>
								<div class="uk-width-medium-6-10">
									<h5>For a Talent Acquisition Strategy That Delivers on Hard-to-Fill Roles, Think Globally</h5>
									<span>Recruiter Today</span>
									<p>Chief Marketing Officer Jamie Gilpin had her article, “For a Talent Strategy That Delivers on Hard-to-Fill Roles, Think Globally,” featured in Recruiter Today. The article discusses six tactics to seamlessly kick off a global-focused talent acquisition strategy.</p>
									<a href="#">Read the Full Article</a>
								</div>
							</div>  
						</div>
						<div class="search-detail news-detail">
							<div class="uk-grid">
								<div class="uk-width-medium-4-10">
									<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/newsroom4.jpg">
								</div>
								<div class="uk-width-medium-6-10">
									<h5>2016 Moxie Awards</h5>
									<span>Medium</span>
									<p>June, 14 2016 — In the June 14 edition of Techweek Elevator, the company is profiled as an up-and-coming mover and shaker for investors and startup enthusiasts.</p>
									<a href="#">Read the Full Article</a>
								</div>
							</div>  
						</div>
						<div class="search-detail news-detail">
							<div class="uk-grid">
								<div class="uk-width-medium-4-10">
									<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/newsroom5.jpg">
								</div>
								<div class="uk-width-medium-6-10">
									<h5>Techweek Elevator: VISANOW</h5>
									<span>Chiago Tribune</span>
									<p>Built in Chicago names VISANOW as Most Disruptive Startup in this year’s Moxie Awards. More than 7,000 nominations were submitted, but only 15 walked away with prizes. See the full list of winners.</p>
									<a href="#">Read the Full Article</a>
								</div>
							</div>  
						</div>				
						
						
						
					</div>
				</div>
			</div>
		</div>
	
<?php
get_footer();
