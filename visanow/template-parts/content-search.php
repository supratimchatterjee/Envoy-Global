<?php/** * Template part for displaying results in search pages. * * @link https://codex.wordpress.org/Template_Hierarchy * * @package Visanow */?><div class="search-detail">    <div class="uk-grid">        <div class="uk-width-medium-2-10">			<?php             if ( '' != get_the_post_thumbnail() ) {            the_post_thumbnail( array(134,89));            } else {            echo '<img style="opacity:0;" src="//placehold.it/134x89" />';            }            ?>        </div>                <div class="uk-width-medium-8-10">            <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>            <span class="page_source"><a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></span>            <?php the_excerpt('...'); ?>        </div>    </div> </div>