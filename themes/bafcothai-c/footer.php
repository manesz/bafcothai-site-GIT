<?php
/**
 * 	Theme Name: BAFCOTHAI BUSINESS THEME
 *  Theme URI: http://www.bafcothai.com/bafcothai
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
<div class="footer">
    <footer>
        <!-- bottom about -->
        <div class="bottom_about">
            <p><img src="<?php echo get_template_directory_uri();?>/assets/images/logo-3.png" alt="" /></p>
<!--             <p>With the accumulated experiences in this field, BAFCO is confident in providing fineness services in handling shipment both inbound and outbound for various renowned companies, government agencies and diplomatic missions.</p> -->
            <p>“Appreciating our client’s needs, customer satisfaction is our first priority towards excellency.”</p>
        </div>
        <!-- /bottom about -->
        <!-- recent tweets -->
        <div class="recent_tweets">
            <h3><span>BAFCO Services</span></h3>
            <ul>
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
                	
                    <!-- <li><a href="<?php// echo get_permalink();?>"><?php the_title();?></a></li> -->
                <?php
                    endwhile;
                    wp_reset_query();
                ?>
<!--                <li><a href="#">Customs Clearance Brokerage</a></li>-->
<!--                <li><a href="#">International freight Forwarding</a></li>-->
<!--                <li><a href="#">Dangerous Goods Cargo Handling</a></li>-->
<!--                <li><a href="#">Transportation and Equipments</a></li>-->
<!--                <li><a href="#">Documentation &#038; Government Affair</a></li>-->
<!--                <li><a href="#">Oil And Gas Logistics</a></li>-->
<!--                <li><a href="#">Warehouses &#038; Storage and Packing</a></li>-->
            </ul>
        </div>
        <!-- /recent tweets -->
        <!-- recent posts -->
        <div class="recent_posts">
            <h3><span>BAFCO Branch</span></h3>
            <ul>
                <?php
                    query_posts('category_name="Branches"&order=ASC');
                    while (have_posts()) : the_post();
                ?>
                    <li><a href="<?php echo get_permalink();?>"><?php the_title();?></a></li>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>
<!--                <li><a href="BAFCO-Suvarnnabhummi.php">Suvarnnabhummi</a></li>-->
<!--                <li><a href="BAFCO-Sattahip.php">Sattahip</a></li>-->
<!--                <li><a href="BAFCO-Songkla.php">Songkla</a></li>-->
<!--                <li><a href="BAFCO-Ranong.php">Ranong</a></li>-->
<!--                <li><a href="BAFCO-Lat-Krabang-Warehouse.php">Lat Krabang Warehouse</a></li>-->
            </ul>
        </div>
        <!-- /recent posts -->
        <!-- subscribe block -->
        <div class="subscribe_block">
            <h3><span>TRACKING SYSTEM</span></h3>
            <form method="post" action="http://bafcothai.com/tracker/index.php" enctype="multipart/form-data" target="_blank">
                <p><input type="text" id="username" name="username" value="" placeholder="Enter Your User ID ..."/></p>
                <p><input type="password" id="password" name="password" value="" placeholder="Enter Your Password ..."/></p>
                <p><input type="submit" value="SIGN IN" /></p>

                <input name="action" value="login" type="hidden" />
            </form>
        </div>
        <!-- /subscribe block -->
    </footer>
</div>

<!-- copyright -->
<div class="copyright">
    <div class="wraper">
        <div class="content">Copyright 2013 Bangkok Freight Forwarders Co.,Ltd.</div>

        <div class="bottomLink">
                developer by : <a href="http://www.ideacorners.com">IdeaCorners Developer</a>
        </div><div style="clear: both;"></div>
        <!--        <a class="top" href="#">Back to the top</a>-->
    </div>
</div>
<!-- /copyright -->
<!-- /footer -->
</body>
</html>