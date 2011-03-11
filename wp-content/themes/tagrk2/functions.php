<?php

define( 'HEADER_IMAGE_WIDTH', 960 );
define( 'HEADER_IMAGE_HEIGHT', 152 ); 

/* does not seem to work, used design -> k2 options instead
define('CONCATENATE_SCRIPTS', true);
define('COMPRESS_SCRIPTS', true); 
*/


/* MENUES: top (old filters), top left, top right */

function register_tagr_menus() {
	register_nav_menus(
		array(
			'categories' => __( 'Categories Menu (alte Filter - Language, Media, Eventsi, ..)' ),
			'main' => __( 'Main Menu (about, ..)' ),
			'options' => __( 'Options Menu (Timeline Options, ..)' )
		)
	);
}
add_action( 'init', 'register_tagr_menus' );

/* overwriting k2 menu - attention: /themes/k2/header.php  */
function k2_page_menu_args( $args ) {
	$args['show_home'] = false;
	return $args;
} 
add_filter( 'wp_page_menu_args', 'k2_page_menu_args' ); 



/* WIDGETS */


function socialize_widget() {
	echo "socialize";
}
register_sidebar_widget("Socialize", "socialize_widget");


function tagrcloud_widget() {
        echo "cloud";
}
register_sidebar_widget("Tagr Tag Cloud", "tagrcloud_widget");

function festivallist_widget() {
	echo '<h4 class="widgettitle">Coverage</h4>';
	echo '<ul>';
	wp_list_categories('orderby=id&order=desc&title_li=&child_of=13');
	echo '</ul>';
}
register_sidebar_widget("Festivals", "festivallist_widget");


/* Recent Tweets Widget - quick and dirty
   TODO: edit search string via wordpress widget options, later: make it a plugin, add single post specific search, ... */

function tweets_widget() {
	echo '<h4 class="widgettitle">Recent Tweets</h4>';
?>
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'tagr.tv OR tagrtv OR #transmediale OR #tm10lc OR "sound:frame" OR soundframe OR pixelache OR "mapping festival" OR antivj OR medienkunst OR "LPM festival" OR "LPM rome" OR "#lpm10" OR "#file2010" OR "#tm11" OR "#arselectronica" OR "#arsbrennt"',
  interval: 16000,
  title: '',
  subject: '',
  width: 235,
  height: 600,
  theme: {
    shell: {
      background: '#ffffff',
      color: '#000000'
    },
    tweets: {
      background: '#ffffff',
      color: '#666666',
      links: '#999999'
    }
  },
  features: {
    scrollbar: true,
    loop: true,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    behavior: 'default'
  }
}).render().start();
</script>
<?php
}
register_sidebar_widget("Recent Tweets", "tweets_widget");

function creativecommons_widget() {
	echo '<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.0/at/"><img alt="Creative Commons License" src="http://i.creativecommons.org/l/by-nc-sa/2.0/at/88x31.png" /></a>';

}
register_sidebar_widget("Creative Commons", "creativecommons_widget");


function authors_widget() {
        echo '<h4 class="widgettitle">Coverage</h4>';
        echo '<ul>';
	//order by: works only in Wordpress 3.1 and newer - for now it's sorted by name
	wp_list_authors('orderby=user_login&order=desc');
        echo '</ul>';
}
register_sidebar_widget("List Authors", "authors_widget");


?>
