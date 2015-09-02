<?php 
define( 'START_TIME', microtime( true ) );
define( 'BASE', __DIR__ );

require( BASE.'/sys/helpers.php');

/*
short intro -> continue

select barbarian, wizard, dwarf or elf -> continue
task 1: find the tavern and recruit the 3 other band members
task 2: find the market and buy a lantern, a rope

*/

/*
require( BASE.'/config.php' );


date_default_timezone_set( TIMEZONE );
session_start();

$token = bin2hex(openssl_random_pseudo_bytes(16));
echo $token;

call_user_func(function(){
	$_GET=array_map( 'htmlspecialchars', $_GET );
	$_POST=array_map( 'htmlspecialchars', $_POST );
	$route=explode( '/', getArrayValue( $_GET, 'url' ).'////' );
	$app=($route[0]=='admin')?'Admin':'Site';
	( new $app( $route ) );
});

*/
?>
<!DOCTYPE html><html lang="en"><meta charset="utf-8">
<title>HTML Mockup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo ROOT; ?>/inc/base.css">
<link rel="icon" href="<?php echo ROOT; ?>/inc/favicon.ico">

<h1>Mockup test title</h1>

<p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<figure><img src="<?php echo ROOT; ?>/inc/gold_coins.jpg"></figure>

<?php echo 'Rendered in ', round( microtime(true)-START_TIME , 4 ), ' sec.'; ?>

<nav>
<a href=""><svg><use xlink:href="<?php echo ROOT; ?>/inc/icons.svg#home-icon"></use></svg></a>
<a href=""><svg><use xlink:href="<?php echo ROOT; ?>/inc/icons.svg#inv-icon"></use></svg></a>
<a href=""><svg><use xlink:href="<?php echo ROOT; ?>/inc/icons.svg#map-icon"></use></svg></a>
<a href=""><svg><use xlink:href="<?php echo ROOT; ?>/inc/icons.svg#tasks-icon"></use></svg><i>12</i></a>
<a href=""><svg><use xlink:href="<?php echo ROOT; ?>/inc/icons.svg#config-icon"></use></svg></a>
<a href=""><svg><use xlink:href="<?php echo ROOT; ?>/inc/icons.svg#award-icon"></use></svg></a>
</nav>

<aside class="compass"><svg><use xlink:href="<?php echo ROOT; ?>/inc/icons.svg#nav-icon"></use></svg></aside>

<script src="<?php echo ROOT; ?>/inc/tiny-query.js"></script>
<script src="<?php echo ROOT; ?>/inc/common.js"></script>
