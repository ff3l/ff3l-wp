<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="head_menu">
<?php   
  wp_nav_menu( array(
    'theme_location' => 'header-menu',
   ) );
?>
</nav>
<div class="header">
    <h1>Willkommen beim Freifunk 3 Ländereck!</h1>
</div>
