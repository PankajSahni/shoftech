<?php eval(str_rot13('shapgvba purpx_s_sbbgre(){vs(!(shapgvba_rkvfgf("purpx_sbbgre")&&shapgvba_rkvfgf("purpx_urnqre"))){rpub(\'Guvf gurzr vf eryrnfrq haqre perngvir pbzzbaf yvprapr, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\');qvr;}}purpx_s_sbbgre();')); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if (is_home()) {
	echo bloginfo('name');
} elseif (is_404()) {
	echo '404 Not Found';
} elseif (is_category()) {
	echo 'Category:'; wp_title('');
} elseif (is_search()) {
	echo 'Search Results';
} elseif ( is_day() || is_month() || is_year() ) {
	echo 'Archives:'; wp_title('');
} else {
	echo bloginfo('name'); echo wp_title('');
}
?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php eval(str_rot13('shapgvba purpx_shapgvbaf(){vs(!svyr_rkvfgf(qveanzr(__SVYR__)."/shapgvbaf.cuc")){rpub(\'Guvf gurzr vf eryrnfrq haqre perngvir pbzzbaf yvprapr, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\');qvr;}}purpx_shapgvbaf();')); wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
<script type="text/javascript">
$(document).ready(function() {
//SUPERFISH SETUP
        $('ul.sf-menu').superfish({
            delay:       1000,                            // one second delay on mouseout
            animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation
            speed:       'fast',                          // faster animation speed
            autoArrows:  true,                           // disable generation of arrow mark-up
            dropShadows: false,                            // disable drop shadows
            disableHI:   true                         // set to true to disable hoverIntent detection
        });
        $('#top li:first-child:not(#top li li)').addClass('first');
        $('#top li:last-child:not(#top li li)').addClass('last');
});
</script>
</head>
<body>
<div id="topwrap">
<div id="header">
<?php if (get_option('swt_follow') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/follow.php'); } ?>
 <div id="blogtitle">
       <h1><a href="<?php echo get_option('home'); ?>/"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('sitename'); ?>" /></a></h1>
 </div>

 <div id="top"><!-- PAGE MENU, OR PRIMARY CUSTOM MENU -->

    <?php if ( has_nav_menu( 'primary-menu' ) ) {

          wp_nav_menu( array( 'menu_class' => 'sf-menu', 'theme_location' => 'primary-menu' ) );

	} else {
	?>
        <ul class="sf-menu">
            <?php $ex = get_option('swt_pages');  ?>
        	<li class="page_item <?php if(is_home()): ?>current-menu-item<?php endif ?>"><a href="<?php echo get_option('home'); ?>/">Home</a></li>
        	<?php wp_list_pages("sort_column=menu_order&depth=3&exclude=$ex;&title_li=");?>
    	</ul>
    <?php } ?>
  </div><!-- END PAGE MENU -->
</div>
</div>