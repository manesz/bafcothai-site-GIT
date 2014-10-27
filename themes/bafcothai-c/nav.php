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
<nav id="full">
    <!-- top menu -->
    <ul>
        <li<?php if (is_front_page()) { ?> class="active" <?php }?>><a href="<?php bloginfo('siteurl');?>">Home</a></li>
        <li><a href="#">Our Company</a>
            <ul>
                <?php
                query_posts('category_name="our-company"&order=ASC');
                    while (have_posts()) : the_post();
                ?>
                    <li><a href="<?php echo get_permalink();?>"><?php the_title();?></a></li>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>
<!--                <li><a href="Company-Portrait.php">Company Portrait</a></li>-->
<!--                <li><a href="BAFCO-Project-Experiences.php">BAFCO Project Experiences</a></li>-->
<!--                <li><a href="Key-Benefits.php">Key Benefits</a></li>-->
            </ul>
        </li>
        <li><a href="#">Services</a>
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
                        <!-- <li><a href="<?php echo get_permalink();?>"><?php the_title();?></a></li> -->
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
        </li>
        <li><a href="#">Activities and Events</a>
            <ul>
                <?php
                    query_posts('category_name="Activities and Event"&order=ASC');
                    while (have_posts()) : the_post();
                ?>
                    <li><a href="<?php echo get_permalink();?>"><?php the_title();?></a></li>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>
            </ul>
        </li>
        <li><a href="#">Contact Us</a>
            <ul>
                <?php
                query_posts('category_name="Contact Us"&order=ASC');
                while (have_posts()) : the_post();
                    ?>
                    <li><a href="<?php echo get_permalink();?>"><?php the_title();?></a></li>
                    <?php
                endwhile;
                wp_reset_query();
                ?>
                <?php
                query_posts('category_name="Branches"&order=ASC');
                while (have_posts()) : the_post();
                    ?>
                    <li><a href="<?php echo get_permalink();?>"><?php the_title();?></a></li>
                    <?php
                endwhile;
                wp_reset_query();
                ?>
            </ul>
        </li>
<!--        <li><a href="contact-us.php">Contact Us</a></li>-->
    </ul>
    <!-- /top menu -->
</nav>

<nav id="mobile">
	<select onchange="location = this.options[this.selectedIndex].value;">
		<option value="<?php bloginfo('siteurl');?>">Home</option>
		<option>Our Company</option>
		<?php
	    	query_posts('category_name="our-company"&order=ASC');
	        while (have_posts()) : the_post();
	    ?>
	        <option value="<?php echo get_permalink();?>">-- <?php the_title();?></option>
	    <?php
	        endwhile;
	        wp_reset_query();
	    ?>
		<option><a href="#">Services</a></option>
		<option value="http://www.bafcothai.com/services/customs-clearance-services.html">-- Customer Clearance Service</option>
    	<option value="http://www.bafcothai.com/services/international-air-sea-freight-forwarding.html">-- International Freight Forwarders</option>
    	<option value="http://www.bafcothai.com/services/oil-and-gas-logistics.html">-- Oil and Gas</option>
    	<option value="http://www.bafcothai.com/services/logistic.html">-- Logistics</option>
    	<option value="http://www.bafcothai.com/services/documentation-government-affair.html">-- Documentation and Government Affairs</option>
    	<option value="http://www.bafcothai.com/services/dangerous-goods-cargo-handling.html">-- Dangerous Goods Handling</option>
		<option><a href="#">Activities and Events</a></option>
		<?php
            query_posts('category_name="Activities and Event"&order=ASC');
            while (have_posts()) : the_post();
        ?>
            <option value="<?php echo get_permalink();?>">-- <?php the_title();?></option>
        <?php
            endwhile;
            wp_reset_query();
        ?>
		<option><a href="#">Contact Us</a></option>
		<?php
	        query_posts('category_name="Contact Us"&order=ASC');
	        while (have_posts()) : the_post();
	            ?>
	            <option value="<?php echo get_permalink();?>">-- <?php the_title();?></option>
	            <?php
	        endwhile;
	        wp_reset_query();
	        ?>
	        <?php
	        query_posts('category_name="Branches"&order=ASC');
	        while (have_posts()) : the_post();
	            ?>
	            <option value="<?php echo get_permalink();?>">-- <?php the_title();?></option>
	            <?php
	        endwhile;
	        wp_reset_query();
        ?>
	</select>
</nav>