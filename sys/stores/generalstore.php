<?php defined('BASE') or die('No access');

$storeName='The General Store';

$stock=array(
	'rope'=>array('Rope', 'bdew', 5, 30, 5, 'Use to escape pit; after each use roll 1D6, on 1 or 2 the rope breaks and is discarded'),
	'bandages'=>array('1D6 Bandages', 'bdew', 7, '50 Each', 5, 'Each bandage restores 3 Wounds. One use then discard. At the end of each adventure roll 1D6 for each bandage. On a score of 1, 2 or 3 the bandage has perished and is of no further use.'),
	'provisions'=>array('1D6 Provisions', 'bdew', 5, '50 Each', 0, 'Each set of provisions restores 2 Wounds. At the end of each adventure unused provisions must be discarded, as they have spoiled.'),
	'spikes'=>array('1D6 Door Spikes', 'bdew', 7, '100 Each', 10, 'Each spike keeps a door shut for one turn. To use spike your Warrior must be adjacent to the door. Once spiked, a door cannot be opened unless it is broken down. To break down a door, a Monster must be adjacent to the door. Roll a dice and add the Monster\'s Strength. On a score of 9 or more the Monster breaks down the door.'),
	'beer'=>array('1D6 Casks of Beer', 'bd-w', 5, '50 Each', 0, '-1 to Weapon Skill; -1 Initiative, +1 Strength (Dwarf +2 Strength); +1 on Fear rolls: effects lasts 1 turn; if Wizard drinks he can\'t cast spells for 2 turns.'),
	'robes'=>array('Fine Robes', 'bdew', 6, 50, 20, '-'),
	'boots'=>array('Boots', 'bdew', 4, 20, 10, '-'),
	'trancestone'=>array('Trance stone', 'bdew', 7, 300, 75, 'If your Warrior does nothing, including move, for one turn, and there are no Monsters on the board, he enters a trance and regains 1 Wound.')
);	
// Once you have decided that your Warrior is going to buy either bandages, provisions, door spikes or casks of beer, and determined that they are in stock, after rolling for the quantity available he must buy them all (see Timewasting).


