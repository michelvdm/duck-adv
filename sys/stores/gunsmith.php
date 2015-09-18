<?php defined('BASE') or die('No access');

$storeName='The Gunsmith';

$stock=array(
	'pistols'=>array('Brace of Pistols (2)', '-d-w', 10, 3000, 600, 'Needs gunpowder and shot; Strength 6; each pistol may make 1 shot every other turn (takes one turn to reload); range 6 squares.'),
	'musket'=>array('Musket', 'bd-w', 11, 2000, 700, 'Needs gunpowder and shot; Strength 8; fired at -2 Ballistic Skill; 1 shot every other turn (takes one turn to reload): if the shot kills a Monster. it carries on into any Monster standing directly behind, at -1 Strength for each additional Monster killed.'),
	'shot'=>array('Shot', 'bd-w', 4, 100, 0, 'Enough shot for Pistol/Musket to last all adventure.'),
	'powder'=>array('Gunpowder', 'bd-w', 4, 100, 0, 'Enough gunpowder for Pistol or Musket to last all adventure.')
);	
