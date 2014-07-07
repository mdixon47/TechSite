<?php
/**
 * ----------------------------------------------------------------------------------------
 * master.css
 *
 * Contains the site specific styles.
 * ----------------------------------------------------------------------------------------
 */
?>
<?php

	require_once('wp_bootstrap_navwalker.php');

	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'TechSite' ),
	) );

?>