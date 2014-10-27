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
        <a class="logo" href="<?php bloginfo('siteurl');?>">construct</a>
        <?php get_template_part('nav');?>
    </header>
</div>
<div class="content_block">
    <?php
    if(is_page('Contact')){
        get_template_part('content', 'contact');
    }else{
        get_template_part( 'content', 'page' );
    }
    ?>
</div>

<?php get_footer(); ?>