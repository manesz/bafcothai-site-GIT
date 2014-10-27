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
<?php get_header();?>

<div class="wraper">
    <header class="header">
        <a class="logo" href="index.php">IdeaCorners</a>
        <?php get_template_part('nav');?>
    </header>
</div>

<div class="content_block">
    <!-- top_title -->
    <div class="top_title">
        <div class="wraper">
            <h2>Search Result <span>“Appreciating our client’s needs, customer satisfaction is our first priority towards excellency.”</span></h2>
            <ul>
                <li><a href="#">Home</a></li>
<!--                <li><a href="#">Blog</a></li>-->
                <li>Search Result</li>
            </ul>
        </div>
    </div>
    <!-- /top_title -->
    <div class="wraper">
        <!-- blog entries full -->
        <div class="blog_entries blog_entries_full">

            <!-- ############################################## -->

            <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

            <div class="post post_medium">
                <div class="img_wrap bwWrapper">
                    <a href="<?php echo get_permalink(); ?>">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( '503x160-thumb' );
                        } else {
                            ?>
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/featured_list/img2.png" width="100%" alt="" />
                            <?php
                        }
                        ?>
                    </a>
                </div>
                <div class="desc">
                    <h4><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h4>
<!--                    <p>--><?php //global $more; $more = 0; the_content(' '); ?><!--</p>-->
                    <p><?php the_excerpt(); ?> </p>
                    <div class="metadata">
<!--                        <strong class="dots">....</strong>-->
<!--                        By <a href="#">Crucio</a>  |  <a href="#">12 COMMENTS</a><br /><a href="#">Photoshop, Photography, Business, Corporate, Creative</a>-->
                        <a href="<?php echo get_permalink(); ?>" class="read_more btn_col">Read More</a>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>

            <?php else : ?>

            <div class="post post_medium">
                <div class="img_wrap bwWrapper">
                    <a href="<?php echo get_template_directory_uri();?>">
                                                <img src="images/blog/blog_09.png" width="493" height="249" alt="" />
                    </a>
                </div>
                <div class="desc">
                    <h4><a href="<?php echo get_template_directory_uri();?>">No Result.</a></h4>
                    <p></p>
                    <div class="metadata">
                        <!--                        <strong class="dots">....</strong>-->
                        <!--                        By <a href="#">Crucio</a>  |  <a href="#">12 COMMENTS</a><br /><a href="#">Photoshop, Photography, Business, Corporate, Creative</a>-->
<!--                        <a href="--><?php //echo get_permalink(); ?><!--" class="read_more btn_col">Read More</a>-->
                    </div>
                </div>
            </div>

            <?php endif; ?>

            <!-- pager_nav -->
<!--            <div class="pager_nav">-->
<!--                <a href="#">1</a><span>2</span><a href="#">3</a><a href="#">4</a><a href="#">5</a>-->
<!--                <a href="#" class="bx-prev">prev</a><a href="#" class="bx-next">next</a>-->
<!--            </div>-->
            <!-- /pager_nav -->
        </div>
        <!-- /blog entries full -->

    </div>
</div>
<!-- /container -->
<?php get_footer();?>