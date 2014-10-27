<?php
/**
 * 	Theme Name: BAFCOTHAI BUSINESS THEME
 *  Theme URI: http://demo.ideacorners.com/bafcothai
 *  Description: This theme for business style. Copyright 2012, IdeaCorners Developers.
 *  Version: 1.0
 *  Author: IdeaCorners Developer
 *  Author URI: http://www.ideacorners.com
 *
 * @package Business Theme by IdeaCorners Developer
 * @subpackage ic-business
 * @author Business Themes - www.ideacorners.com
 */
?>
<!-- top_title -->
<div class="top_title">
    <div class="wraper">
        <?php if ( 'post' == get_post_type() ) : ?>
        <h2><?php the_title();?> <span>“Appreciating our client’s needs, customer satisfaction is our first priority towards excellency.”</span></h2>
<!--        <ul>-->
<!--            <li><a href="#">Home</a></li>-->
<!--            <li>Company Portrait</li>-->
<!--        </ul>-->
<!--        <p class="showlink">--><?php //the_breadcrumb()?><!--</p>-->
        <?php endif; ?>
    </div>
</div>
<!-- /top_title -->
<div class="wraper">
    <!-- blog entries -->
    <div class="blog_entries">

        <div class="post post_full">
            <div class="desc">
                <?php if ( 'post' == get_post_type() ) : ?>
                    <?php the_content(); ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
    <!-- /blog entries -->
    <?php get_template_part( 'sidebar' );?>
</div>