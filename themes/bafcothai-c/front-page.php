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

get_header();
?>

<div class="wraper">
    <header class="header">
        <a class="logo" href="<?php bloginfo('siteurl');?>" >IdeaCornes Developer</a>
        <?php get_template_part( 'nav' );?>
    </header>
</div>

<?php get_template_part( 'banner', 'slide' );?>

<div class="content_block">
    <div class="wraper">
        <!-- Company Feature -->
        <div class="features2_block">
            <ul>
                <li class="design">
                    <a class="circle_link" href="http://demo.ideacorners.com/bafcothai/our-company/key-benefits.html" target="_blank">&nbsp;</a>
                    <h4>Experience</h4>
                    <p><span><br/></span></p>
                    <p>With over 35 years of experience in Freight Forwarding and Logistics Industry, all of our customers can reassure that all your shipments are handled by the specialized team that not only support the operation but can also provide you with the solutions.</p>
                    <!--                    <p><a class="btn_col" href="#">Learn More</a></p>-->
                </li>
                <li class="flexible">
                    <a class="circle_link" href="http://demo.ideacorners.com/bafcothai/our-company/key-benefits.html" target="_blank">&nbsp;</a>
                    <h4>Responsive</h4>
                    <p><span><br/></span></p>
                    <p>With years in this field, our company realizes the difference in value as required by each client. With dedicated support personnel and management team, we ensure that our services continually provide the most effective solutions in responsive to each of our client requests. With a proven track-record and a portfolio of successful cooperation for many renowned clients, we are dedicated to improving your entire supply chain according to your unique requirements.</p>
                    <!--                    <p><a class="btn_col" href="#">Learn More</a></p>-->
                </li>
                <li class="support">
                    <a class="circle_link" href="http://demo.ideacorners.com/bafcothai/our-company/key-benefits.html" target="_blank">&nbsp;</a>
                    <h4>Standardization</h4>
                    <p><span><br/></span></p>
                    <p>Our quality policy is followed at all levels of the process, and by all our employees. To support this policy, our company requires ongoing general, work-process and safety training, monitoring of standard operating procedures and computer systems validations at all time.</p>
                    <!--                    <p><a class="btn_col" href="#">Learn More</a></p>-->
                </li>
                <li class="easy">
                    <a class="circle_link" href="http://demo.ideacorners.com/bafcothai/our-company/key-benefits.html" target="_blank">&nbsp;</a>
                    <h4>Safety Compliance</h4>
                    <p><span><br/></span></p>
                    <p>The Top Management of “BAFCO” fully supports HSE policy and encourages all employees to take pro-active approach with respect to HSE matters in executing their duties in order to ensure safety and absence of risk to health in connection with transportation, warehousing and handling of shipment.</p>
                    <!--                    <p><a class="btn_col" href="#">Learn More</a></p>-->
                </li>
            </ul>
        </div>
        <!-- END : Company Feature -->
        
        <!-- Management's Vision -->
        <div class="features2_block" style="margin-bottom: 30px;">
        	<?php
        		// $postManagementsVision = get_post('managements-vision'); 
				// echo $title = $postManagementsVision->post_title;
				
				// query_posts('post_title="managements-vision"');
                // while (have_posts()) : the_post();
				// echo the_content();
				// endwhile;
                // wp_reset_query();
        	
            // $page = get_page_by_title( 'managements-vision' );
            // $id = $page->ID;
            $id = 438;
            $page_data = get_page( $id ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.

            echo apply_filters('the_content', $page_data->post_content); // echo the content and retain Wordpress filters such as paragraph tags.
            ?>
        </div>
        <!-- END : Management's Vision -->
        
        <!-- features_list -->
        <div class="featured_list">
            <div class="features_slider_wrap">
                <h3>Featured Work</h3>
                <ul class="features_slider gallery">
                    <?php
                        query_posts('category_name="services"&order=ASC');
                        while (have_posts()) : the_post();
                    ?>
                        <li>
                            <div>
                                <div class="bwWrapper">
                                    <a href="<?php echo get_permalink();?>" rel="">

                                            <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( '202x126-thumb' );
                                                } else {
                                            ?>
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/featured_list/img.png" alt="" />
                                            <?php
                                                }
                                            ?>
                                    </a>
                                    <p style="min-height: 40px !important;">
                                        <strong>
                                            <a href="<?php echo get_permalink();?>">
                                                <?php the_title();?>
                                            </a>
                                        </strong>
<!--                                        <span>-->
<!--                                            --><?php
//                                            $category = get_the_category();
//                                            echo $category[0]->cat_name;
//                                            ?>
<!--                                        </span>-->
                                    </p>
                                    <p>
                                        <span>
                                            <?php
                                            $category = get_the_category();
                                            echo $category[0]->cat_name;
                                            ?>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </li>
                    <?php
                        endwhile;
                        wp_reset_query();
                    ?>
                </ul>
            </div>
        </div>
        <!-- /features_list -->
    </div>
</div>

<!-- footer -->
<!-- social block -->
<div class="social_block">
    <div class="wraper">
        <p>Stay connected with us in your favorite flavor!</p>
        <ul>
            <li class="facebook"><a href="#">Facebook</a></li>
            <li class="twitter"><a href="#">Twitter</a></li>
            <li class="linkedin"><a href="#">LinkedIn</a></li>
            <li class="rss"><a href="#">RSS</a></li>
            <li class="dribbble"><a href="#">Dribbble</a></li>
            <li class="google"><a href="#">Google+</a></li>
        </ul>
    </div>
</div>
<!-- /social block -->

<?php get_footer();?>