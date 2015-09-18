<?php defined('BASE') or die('No access');

$storeName='The Fletcher';

$stock=array(
	'shortbow'=>array('Short Bow', 'b-ew', 5, 150, 20, 'Strength 1; as many shots per turn as Warrior has Attacks.'),
	'longbow'=>array('Longbow', 'b-e-', 8, 300, 40, 'Strength 4: one shot per turn.'),
	'arr'=>array('Arrows', 'b-ew', 3, 20, 0, 'Enough arrows for Short Bow or Longbow to last all dungeon.'),
	'firearr'=>array('1D6 Fire Arrows', 'b-ew', 8, 100, 0, 'If arrow hits target it may set it alight: roll 1D6, on a score of 4, 5 or 6 the target is set alight and takes an extra 1D6 Wounds, with no modifier for Toughness or armour, each turn until the damage roll comes up a natural 1 or 2 and the fire goes out, causing no more Wounds.'),
	'crossb'=>array('Crossbow', '-d-w', 9, 1000, 200, 'Strength 5; one shot per turn.'),
	'pistcrossb'=>array('Pistol Crossbow', '-dew', 10, 1500, 250, 'Strength 3; 3 shots every other turn (takes one turn to reload); range 5 squares.'),
	'quarr'=>array('Quarrels', '-dew', 3, 30, 0, 'Enough quarrels for Crossbow or Pistol Crossbow to last all dungeon.')
	);

