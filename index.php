<?php 
define( 'START_TIME', microtime( true ) );
define( 'BASE', __DIR__ );

require( BASE.'/sys/helpers.php');


?>
<!DOCTYPE html><html lang="en"><meta charset="utf-8">
<title>HTML Mockup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo ROOT; ?>/inc/base.css">
<link rel="icon" href="<?php echo ROOT; ?>/inc/favicon.ico">

<h1>Test Responsive</h1>
<?php 
require( BASE.'/sys/game-helpers.php');

require( BASE.'/sys/test02-deck.php');



 ?>
<?php echo 'Rendered in ', round( microtime(true)-START_TIME , 4 ), ' sec.'; ?>
<!--
<script src="<?php echo ROOT; ?>/inc/tiny-query.js"></script>
<script src="<?php echo ROOT; ?>/inc/common.js"></script>
-->

