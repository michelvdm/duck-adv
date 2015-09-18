<?php defined('BASE') or die('No access');

$storeName='The Armourer';

$stock=array(
	'leatharm'=>array('Leather Armour', 'bde-', 5, 40, 20, '+1 Toughness; destroyed by the first blow that scores a natural 6 for Wounds or if the Warrior wearing it is reduced to 0 Wounds.'),
	'furs'=>array('Furs' ,'bde-', 4 ,300 ,75, '+l Toughness: may be worn in addition to chainmail or light armour, in which case it causes -1 Movement and -1 on all to hit rolls.'),
	'chainmail'=>array('Chainmail Armour', 'bd--', 5, 500, 150, '+2 Toughness; -1 Movement.'),
	'lightarm'=>array('Light Armour' ,'bd--', 7, 1000, 150, '+2 Toughness'),
	'heavarm'=>array('Heavy Armour', 'bd--', 8, 4000, 1100, '+3 Toughness; -1 Movement (except Dwarf)'),
	'platarm'=>array('Plate Armour', '-d--', 10,7000, 2500,  '+4 Toughness;-l Movement.'),
	'shield'=>array('Shield' ,'bde-', 4, 300, 75, '+l Toughness; while using a shield, a Warrior cannot use a bow or a 2- handed weapon.'),
	'greatsh'=>array('Great Shield', 'bd', 9, 550, 150, '+2 Toughness; -1 Movement; -1 on all to hit rolls; while using a great shield, a Warrior cannot use a bow or a 2-handed weapon. Note that shields are only effective against hand-to-hand and missile weapon attacks. and not against fire or magic.'),
	'leathhelm'=>array('Leather Helm', 'bd--', 4, 100, 12, '+1 Toughness; destroyed by the first blow that scores a natural 6 for Wounds or if the Warrior wearing it is reduced to 0 Wounds.'),
	'openhelm'=>array('Open Helmet', 'bd--', 7, 500, 150, '+1 Toughness.'),
	'warhelm'=>array('Warhelm', 'bd--',  9, 1000, 350, '+2 Toughness.')
	);
