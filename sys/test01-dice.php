<?php defined('BASE') or die('No access');

/* dice rolls test */

$arr=[];
$max=100000;

for( $i=0; $i<$max; $i++ ){
	$num=roll();
	if( isset( $arr[ $num ] ) )$arr[ $num ]++; 
	else $arr[ $num ]=1;
}

foreach ($arr as $key => $value){
	tag('p',$key.': '.$value);
}

