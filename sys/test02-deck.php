<?php defined('BASE') or die('No access');

/* dice rolls test */

$suits = array ( 'Spades', 'Hearts', 'Clubs', 'Diamonds' );
$cards = array_merge( range( 2, 10), array( 'Jack', 'Queen', 'King', 'Ace' ) );
$deck = array();

foreach( $suits as $suit ){
    foreach( $cards as $card ){
        $deck[] = $card.' of '.$suit;
    }
}

shuffle( $deck );
$card=take( $deck );
$multi=take( $deck, 20);

out( 'One card: '.$card.'<hr>' );
out( join( ', ', $multi ) ) ;
out( '<hr>Remaining: <br>' );
out( join( ', ', $deck ) ) ;
out( '<hr>' );

