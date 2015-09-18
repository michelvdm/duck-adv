<?php defined('BASE') or die('No access');

$storeName='The Weaponsmith';

$stock=array(
	'dagger'=>array('Dagger', 'bdew', 4, 75, 20, 'Strength 1; hand-to-hand or missile weapon; may be retrieved once all Monsters in the room are dead.'),
	'knife'=>array('Knife', 'bdew', 2, 40, 5, 'Strength 1; may be concealed inside Warrior\'s boot.'),
	'sword'=>array('Sword', 'bdew', 5, 200, 15, 'Normal damage (1D6 + Warrior\'s Strength).'),
	'longsw'=>array('Longsword', 'b-e-', 7, 400, 20, '+1 Strength; -1 on all to hit rolls.'),
	'greatsw'=>array('Great Sword', 'bde-', 8, 700, 35, '+4 Strength; -1 Initiative; -1 Attacks; cannot use shield at the same time.'),
	'broadsw'=>array('Broadsword', 'b---', 7, 500, 25, '+3 Strength; -1 on all to hit rolls.'),
	'axe'=>array('Axe', 'bd--', 4, 150, 15, 'Normal damage (as sword)'),
	'battlax'=>array('Battle-axe', 'bd--', 8, 500, 35, '+2 Strength; cannot use shield at the same time'),
	'throwax'=>array('Throwing Axe', 'bd--', 7, 300, 35, '+1 Strength; missile or hand weapon. If thrown, may be retrieved once all the Monsters in the room are dead'),
	'spear'=>array('Spear', 'bde-', 8, 200, 20, 'Missile or hand-to-hand weapon. +1 Initiative in 1st round of combat; may attack in ranks (as Goblin Spearmen). No modifier on basic damage caused by wielder. If missile weapon, needs a 4+ to hit, Strength as thrower.'),
	'mace'=>array('Mace', 'bd--', 7, 250, 20, '-1 on all to hit rolls, but if to hit roll is an unmodified 6 roll extra 1D6 for Wounds.'),
	'warham'=>array('Warhammer', 'bde-', 10, 400, 100, 'If to hit roil is a natural 6, roll extra 1D6 for Wounds'),
	'throwstar'=>array('Throwing Stars (Bag)', 'b-ew', 6, 100, 35, 'Strength 1; missile weapon, thrown at -1 Ballistic Skill; ignore armour when rolling for damage; bag contains enough stars to last all adventure. The Warrior can throw as many stars per turn as he has Attacks.'),
	'flail'=>array('Flail', 'bd--', 9, 250, 100, '+2 Strength: -2 on all to hit rolls.'),
	'knuckdust'=>array('Knuckle Duster', 'bdew', 8, 100, 25, 'Strength 4; -2 on all to hit rolls.'),
	'halberd'=>array('Halberd' , 'b-e-', 7, 250, 75, '+1 Strength; -2 Initiative; cannot use shield at the same time: attack in 2 ranks (see Goblin Spearmen).')
	);

