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
<!-- sidebar -->
<div class="sidebar">
    <div style="padding-bottom: 35px;border-bottom:1px dashed #e7e6e6;">
        <form method="get" action="<?php echo home_url('/'); ?>">
            <p>
            	<input type="text" id="s" name="s" placeholder="Enter keyword here ...." style="width: 150px !important;">
            	<input type="submit" value="GO" style="border: 1px #ccc solid; height: 29px; background: red; color: #fff;"
            </p>
        </form>
    </div>
    <!-- most popular -->
    <div class="most_popular" style="padding-bottom: 35px; border-bottom:1px dashed #e7e6e6;">
        <h4>BAFCO Services</h4>
        <ul style="margin-top: 20px;">
        	<li><a href="http://www.bafcothai.com/services/customs-clearance-services.html">Customs Clearance Services</a></li>
        	<li><a href="http://www.bafcothai.com/services/international-air-sea-freight-forwarding.html">International Freight Forwarders</a></li>
        	<li><a href="http://www.bafcothai.com/services/oil-and-gas-logistics.html">Oil and Gas</a></li>
        	<li><a href="http://www.bafcothai.com/services/logistic.html">Logistics</a></li>
        	<li><a href="http://www.bafcothai.com/services/documentation-government-affair.html">Documentation and Government Affairs</a></li>
        	<li><a href="http://www.bafcothai.com/services/dangerous-goods-cargo-handling.html">Dangerous Goods Handling</a></li>
            <?php
                query_posts('category_name="services"&order=ASC');
                while (have_posts()) : the_post();
            ?>
                <!-- <li><a href="<?php// echo get_permalink();?>"><?php the_title();?></a></li>-->
            <?php
                endwhile;
                wp_reset_query();
            ?>
<!--            <li><a href="#">Customs Clearance Brokerage</a></li>-->
<!--            <li><a href="#">International freight Forwarding</a></li>-->
<!--            <li><a href="#">Dangerous Goods Cargo Handling</a></li>-->
<!--            <li><a href="#">Transportation and Equipments</a></li>-->
<!--            <li><a href="#">Documentation &#038; Government Affair</a></li>-->
<!--            <li><a href="#">Oil And Gas Logistics</a></li>-->
<!--            <li><a href="#">Warehouses &#038; Storage and Packing</a></li>-->
        </ul>
    </div>
    <!-- /most popular -->
    <!-- recent work -->
    <!--    <div class="recent_work">-->
    <!--        <h4>Recent Work Widget</h4>-->
    <!--        <ul class="recent_slider">-->
    <!--            <li><div class="bwWrapper"><a href="#"><img src="images/blog/blog_23.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="images/blog/blog_24.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="images/blog/blog_25.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="images/blog/blog_26.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="images/blog/blog_27.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="images/blog/blog_28.png" width="59" height="54" alt="" /></a></div></li>-->
    <!--        </ul>-->
    <!--    </div>-->
    <!-- /recent work -->
</div>
<!-- /sidebar -->