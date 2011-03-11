<?php
/**
 * Footer Template.
 *
 * This file is loaded by footer.php and used for content inside the #footer div.
 *
 * @package WordPress
 * @subpackage K2
 * @since K2 unknown
 */
?>

<?php
	wp_register('<div class="siteadmin">','</div>'); // Admin & Register Button
?>


<p class="footerstats">
	<?php printf( __('%d queries. %s seconds.', 'k2'), get_num_queries(), timer_stop(0, 3) ); ?>
</p>
