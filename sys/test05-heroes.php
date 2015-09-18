<?php defined('BASE') or die('No access');

/*

$type='elf';
$hero=file_get_contents(BASE.'/sys/heroes/'.$type.'.txt');	
echo '<pre>'.$hero.'</pre>';

$text=file_get_contents(BASE.'/sys/background/introduction.txt');	
echo '<pre>'.$text.'</pre>';

$text=file_get_contents(BASE.'/sys/monsters/wq-basic.txt');	
echo '<pre>'.$text.'</pre>';

$text=file_get_contents(BASE.'/sys/background/intro02.txt');
echo '<pre>'.$text.'</pre>';

$text=file_get_contents(BASE.'/sys/background/profile.txt');
echo '<pre>'.$text.'</pre>';

*/


/* to hit chart */
$toHit=array(
	array(4, 4, 5, 6, 6, 6, 6, 6, 6, 6),
	array(3, 4, 4, 4, 5, 5, 6, 6, 6, 6),
	array(2, 3, 4, 4, 4, 4, 5, 5, 5, 6),
	array(2, 3, 3, 4, 4, 4, 4, 4, 5, 5),
	array(2, 3, 3, 3, 4, 4, 4, 4, 4, 4),
	array(2, 3, 3, 3, 3, 4, 4, 4, 4, 4),
	array(2, 3, 3, 3, 3, 3, 4, 4, 4, 4),
	array(2, 2, 3, 3, 3, 3, 3, 4, 4, 4),
	array(2, 2, 2, 3, 3, 3, 3, 3, 4, 4),
	array(2, 2, 2, 2, 3, 3, 3, 3, 3, 4)
);

function getCaption($name){
	$list=array( 'm'=>'movement', 'ws'=>'weapon skill', 'bs'=>'ballistic skill', 's'=>'strength', 't'=>'toughness', 'w'=>'wounds', 'i'=>'initiative', 'a'=>'attacks', 'no'=>'number' );
	return (isset($list[$name]))?$list[$name]:$name;
}

function getMonster($name){
	$monsters=array(
		'fields' =>array( 'type', 				'm', 'ws', 'bs', 's', 't', 'w', 'a', 'no', 'gold', 'notes' ), 
		'orc'    =>array( 'Orc Warrior',		 4,   3,   '4+',  3,   4, 	3, 	 1,  '1D6',  55,   '-' ), 
		'orcarch'=>array( 'Orc Archer', 		 4,	  3,   '4+',  3,   4, 	3, 	 1,  '1D6',  55,   'Armed with Bow (Str 3)' ), 
		'goblin' =>array( 'Goblin Warrior', 	 4,   2,   '5+',  3,   3, 	2, 	 1,  '1D6',  20,   'Armed with Spear' ), 
		'gobarch'=>array( 'Night Goblin Archer', 4,   2,   '5+',  3,   3, 	2, 	 1,  '1D6',  20,   'Armed with Bow (Str 1)' ), 
		'snotli' =>array( 'Snotling', 			 4,   1,   '-',   1,   1, 	1, 	 1,  '1D6',  10,   'See the Snotling Event Card' ), 
		'skaven' =>array( 'Skaven Warrior', 	 5,   3,   '4+',  3,   3, 	3, 	 1,  '2D6',  40,   '-' ), 
		'minot'  =>array( 'Minotaur', 			 6,   4,   '4+',  4,   4, 	4, 	 2,   1,     440,  'Causes 2D6+4 Wounds' ), 
		'spider' =>array( 'Giant Spider', 		 6,   2,   '-',  'S',  2, 	2, 	 1,  '2D6',  15,   'See the Spider Event Card' ), 
		'rat'    =>array( 'Giant Rat', 			 6,   2,   '-',	  2,   2, 	2, 	 1,  '2D6',  20,   'See the Rat Event Card' ), 
		'bat'    =>array( 'Giant Bat', 			 8,   2,   '-',	  2,   2, 	2, 	 1,  '2D6',  15,   'See the Bat Event Card' )
	);
	return array_combine($monsters['fields'], $monsters[$name]);
}

function getHeroName($key){
	switch($key){
		case'b':
			$value=array_pick( array( 'Ulfric', 'Ragnar', 'Wulf', 'Jorval', 'Ghankar', 'Skelf', 'Cromm' ) );
			break;
		case'd':
			$value=array_pick( array( 'Gotrek', 'Skaggi', 'Mungrun', 'Thorgrim', 'Gummli', 'Hengist', 'Rorek' ) )
				.' '.array_pick( array( 'Gurnisson', 'Longbeard', 'Ironhammer', 'Cragbrow', 'Thunderer', 'Steelfist', 'Forkbeard' ) );
			break;
		case'e':
			$value=array_pick( array( 'Caledor', 'Tethlis', 'Aenarion', 'Koradrel', 'Aethis', 'Unthwe', 'Talion' ) );
			break;
		case'w':
			$value=array_pick( array( 'Calcazar', 'Wulfhir', 'Alric', 'Balthazar', 'Dieter', 'Magnus', 'Solkan' ) )
				.' '.array_pick( array( 'Firefist', 'the Green', 'Whitecloak', 'the Magnificent', 'the Black', 'the Red', 'Orcbane' ) );
			break;
		default: 
			$value='Error in getHeroName: no name for '.$key;
	}
	return $value;
}

function getHeroType($key){
	$list=array( 'b'=>'barbarian', 'd'=>'dwarf', 'e'=>'elf', 'w'=>'wizard');
	return (isset($list[$key]))?$list[$key]:$name;
}


$h='d';
tag('p','Hero: '.getHeroName($h).', '.getHeroType($h));

