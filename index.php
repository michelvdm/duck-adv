<?php 
define( 'START_TIME', microtime( true ) );
define( 'BASE', __DIR__ );

require( BASE.'/sys/helpers.php');

/*

PHASE 1: PROLOGUE

1 introduction
2 assemble party, pick leader
3 pick adventure

PHASE 2: ADVENTURE

PHASE 3: TRAVEL

PHASE 4: SETTLEMENT

1. Each Warrior can undertake a Settlement Activity, which is either:

	A. Visit one trader and attempt to buy and sell one or more items,
	B Search for and visit one Special Location, such as the Alchemist's Laboratory, the Wizards' Guild or the Temple, etc. 

2. Each Warrior generates a Settlement Event
3. Each Warrior must pay his Living Expenses.

*/


?>
<!DOCTYPE html><html lang="en"><meta charset="utf-8">
<title>HTML Mockup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo ROOT; ?>/inc/base.css">
<link rel="icon" href="<?php echo ROOT; ?>/inc/favicon.ico">

<h1>Test Responsive</h1>
<?php 
require( BASE.'/sys/game-helpers.php');

require( BASE.'/sys/test07-settlement.php');


 ?>
<?php echo 'Rendered in ', round( microtime(true)-START_TIME , 4 ), ' sec.'; ?>
<!--
<script src="<?php echo ROOT; ?>/inc/tiny-query.js"></script>
<script src="<?php echo ROOT; ?>/inc/common.js"></script>
-->

