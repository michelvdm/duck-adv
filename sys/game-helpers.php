<?php defined('BASE') or die('No access');

/* dice and card decks */

function roll( $sides=6 ) {
    return mt_rand( 1, $sides );
}

function take( &$deck, $num=1 ){
	return ($num==1)?array_shift($deck):array_splice( $deck, 0, $num );
}

 
