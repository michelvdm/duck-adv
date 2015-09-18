<?php defined('BASE') or die('No access');

/*
$name='info';
$text=file_get_contents(BASE.'/sys/adventures/'.$name.'.txt');	
echo '<pre>'.$text.'</pre>';
*/

$key='56';
$text=file_get_contents(BASE.'/sys/adventures/adventure_'.$key.'.txt');	
echo '<pre>'.$text.'</pre>';
