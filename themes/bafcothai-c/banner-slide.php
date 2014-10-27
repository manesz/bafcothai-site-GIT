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

//echo "### TEST ###";
require_once ("theme-option-controller/class/ClassSlide.php");
echo " ";
$conDB = new Slide($wpdb);

$slide = $conDB -> loadListSlide();


?>
<!-- flex slider -->
<?php
    if(isset($slide->title) || $slide->title == ""){
?>
<div class="flexslider">
    <ul class="slides">
        <?php $i = 0; foreach($slide as $value){ ?>
        <li>
           
            <img src="<?php echo $value -> path;?>" width="" height="" alt="<?php echo $value -> title;?>" title="<?php echo $value -> title;?>" />
            <a href="<?php echo $value -> link;?>">
            <H4 class="flex-caption" style="font-weight: bold; font-size: 25px;"><?php echo $value -> title;?></H4>
<!--            <p class="flex-caption"><STRONG></STRONG> : --><?php //echo $value -> description;?><!--</p>-->
           </a>
        </li>
        <?php $i++; } ?>
<!--        <li>-->
<!--            <img src="--><?php //echo get_template_directory_uri();?><!--/assets/images/sliders/home_page_2/slide1.png" width="1000" height="428" alt="" />-->
<!--            <p class="flex-caption">Lid est laborum dolo rumes fugats untras. Et harums ser quidem rerum facilis dolores oluptas sad[ps ipsums vitae tolu ptasis omnis fugiats vitaes nemo minima .</p>-->
<!--        </li>-->
<!--        <li>-->
<!--            <img src="--><?php //echo get_template_directory_uri();?><!--/assets/images/sliders/home_page_2/slide2.png" width="1000" height="428" alt="" />-->
<!--            <p class="flex-caption">Lid est laborum dolo rumes fugats untras. Et harums ser quidem rerum facilis dolores oluptas sad[ps ipsums vitae tolu ptasis omnis fugiats vitaes nemo minima .</p>-->
<!--        </li>-->
<!--        <li>-->
<!--            <img src="--><?php //echo get_template_directory_uri();?><!--/assets/images/sliders/home_page_2/slide3.png" width="1000" height="428" alt="" />-->
<!--            <p class="flex-caption">Lid est laborum dolo rumes fugats untras. Et harums ser quidem rerum facilis dolores oluptas sad[ps ipsums vitae tolu ptasis omnis fugiats vitaes nemo minima .</p>-->
<!--        </li>-->
    </ul>
</div>
<?php
    } // END : FLEXSLIDER
?>