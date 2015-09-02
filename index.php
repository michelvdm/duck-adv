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

<?php echo 'Rendered in ', round( microtime(true)-START_TIME , 4 ), ' sec.'; ?>

<script src="<?php echo ROOT; ?>/inc/tiny-query.js"></script>
<script src="<?php echo ROOT; ?>/inc/common.js"></script>
