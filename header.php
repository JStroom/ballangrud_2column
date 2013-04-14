<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
	$image_array = array("headerfietsendames.jpg",
                         "headerschaatsendaan.jpg",
                         "headerschaatsenhenk.jpg",
                         "headerschaatsenjeroen.jpg",
                         "headerschaatsenjeugd.jpg",
                         "headerschaatsenjule.jpg",
                         "headerschaatsentialda.jpg",
                         "headerskeelerenrichard.jpg"
                         );
                        
    	$random = array_rand($image_array,1);
    	$background = get_template_directory_uri() . "/headers/" . $image_array[$random];
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>

	<style type="text/css" media="all">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>


	<?php wp_head(); ?>
	
	<style type="text/css">

	#header {
		background: url(<?php echo $background; ?>);
	}
	</style>
	
	<script language="javascript" src="<?php echo get_bloginfo( 'template_url' );?>/tweets/jquery.tweet.js" type="text/javascript"></script>

	<script type='text/javascript'>
    jQuery(function($){
        $(".tweet").tweet({
            username: "svballangrud",
            count: 4,
            auto_join_text_default: "", 
            auto_join_text_ed: "we",
            auto_join_text_ing: "we were",
            auto_join_text_reply: "we replied to",
            auto_join_text_url: "we were checking out",
            loading_text: "loading tweets..."
        });
    });
</script>

	
</head>

<body <?php body_class(); ?>>
<div id="wrap">
<div id="header"></div>

        <div id="nav">
            <p id="nav_p">			
            <a href="/">HOME</a> /
			<a href="/de-club">DE CLUB</a> /
			<a href="/schaatsen">SCHAATSEN</a> /
			<a href="/zomer">ZOMER</a> /
			<a href="/jeugd">JEUGD</a> /
			<a href="/lid-worden">LID WORDEN</a>
			</p>
        </div>

			

<div id="main">
<!-- end header -->
