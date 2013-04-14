<?php
/**
 * @package WordPress
 * @subpackage Ballangrud_2Column
 */
?>

<div id="sidebar">

                <div id="lid_worden">
	                <p class="lid_worden_p">4 seizoenen actief</p>
    	            <p class="lid_worden_p">Info 0162-434954</p>
        	        <p class="lid_worden_p"><a href="mailto:info@ballangrudbreda.nl">info@ballangrudbreda.nl</a></p>                
                </div>




<div id="facebook_sidebar">
	<h3 class="sidebar">Volg ons</h3>
	<h4 class="sidebar">Facebook</h4>
	<div class="facebook_box">
		<div class="fb-like-box" data-href="http://www.facebook.com/ballangrudbreda" data-width="360" data-show-faces="true" data-stream="true" data-header="true"></div>
	</div>
</div>


<div id="twitter">
	<h3 class="sidebar">Twitter</h3>
	<h4 class="sidebar">Tweet Tweet</h4>



<a class="twitter-timeline"  height="500" width="360" href="https://twitter.com/svballangrud" data-widget-id="296702304319569920">Tweets by @svballangrud</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</div>


<div id="teamdimphy">
		<h3 class="sidebar">Team Dimphy</h3>
		<h4 class="sidebar">Facebook</h4>
		<a href="https://www.facebook.com/pages/Team-Dimphy/253290224701593?fref=ts"><img src="<?php echo get_bloginfo( 'template_url' );?>/images/teamdimphy.jpg"></a>
</div>

<div id="site_view">
		<h3 class="sidebar">Site overzicht</h3>
		<h4 class="sidebar">Informatie over de club</h4>
			<?php 

				function get_page_and_children($page_id){
					$return_string = "";
				
					$page= get_page($page_id);
					$return_string .= "<a href=\"" . get_page_uri($page_id) . "\">" . $page->post_title . "</a>";				

					$menu_pages = get_children( 'post_type=page&post_parent='.$page_id );
				
					foreach ($menu_pages as $subpage){
						$return_string .= "<div id=\"sub_nav\"><a href=\"" . get_page_uri($subpage->ID) . "\">" . $subpage->post_title . "</a></div>\n";
					}
					return $return_string;
				}
				
				
				echo get_page_and_children(59);

				echo get_page_and_children(106);

				echo get_page_and_children(87);
				echo get_page_and_children(182);
				echo "<a href=\"/lid-worden\">Lid Worden</a>";

			?> 
</div>

</div>
