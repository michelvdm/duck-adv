<?php defined('BASE') or die('No access');
/*
· IN THE SETTLEMENT ·
The first thing to do when the Warriors arrive at their destination is to nominate one of the players to keep track of how long they stay in the Settlement. The length of the Warriors' stay determines how much they can
achieve, and how much they have to spend to survive. 

Every day the Warriors spend in a Settlement each Warrior must do all of the following: 

1. Each Warrior can undertake a Settlement Activity, which is either: 
	A. Visit one trader and attempt to buy and sell one or more items,
	B Visit one Special Location, such as the Alchemist's Laboratory, the Wizards' Guild or the Temple, etc.
2. Each Warrior generates a Settlement Event
3. Each Warrior must pay his Living Expenses.

Full details and rules for each of the above options are found over the next few pages.

· BUYING EQUIPMENT ·
On each day during a Warrior's stay in a Settlement he may visit one trader and attempt to buy and sell one or more items there. This is termed a Settlement Activity. If your Warrior visits a trader he may do nothing else that day except roll a Settlement Event and pay his Living Expenses. 

Each trader may be visited once by each Warrior during a single stay. 
A Warrior cannot visit the same trader twice in the same Settlement. 
A Warrior can buy and sell as many items as he wants from one trader while he is there. 

The Equipment Tables at the end of this section list all of the traders and items of equipment that may be available. 
The traders that the Warriors may visit are the Weaponsmith, the Armourer, the Fletcher, the Gunsmith, the Animal Handler and the General Store.

EQUIPMENT RESTRICTIONS
Some weapons and items of equipment are not available to certain types of Warrior, as they are too alien to that Warrior's nature and training. Wizards,
for instance, never wear armour as it restricts the fine movements required for spell casting and dulls the flow of magical energy. Elves, on the other hand, although they may wear Elven armour, never use certain weapons such as axes, preferring bows and swords. 

Each Equipment Table has four columns marked B (Barbarian), D (Dwarf), E (Elf) and W (Wizard) that indicate whether a particular item may be bought
by each type of Warrior. If the item is available to a Warrior, the relevant column contains a tick. 

DETERMINING THE SHOP'S STOCK
Each Equipment Table has a column marked Stock. The number in this column is used to determine whether the item your Warrior wishes to buy is in stock.
Each time your Warrior wants to buy something he must roll against the number in the Stock column to see if it is available. 
If your Warrior is shopping in a village, you must roll equal to or greater than the number in the Stock column on 1D6 for the item to be available.
If your Warrior is shopping in a town, you must roll equal to or greater than the number in the Stock column on 2D6 for the item to be available. 
If your Warrior is in a city, you must roll equal to or greater than the number in the Stock column on 3D6 for the item to be available. 
For example, your Warrior is in a town's Armourer trying to buy a Great Shield. The number in the Stock column of the Armourer's Equipment Table for a Great Shield is a 9. You must therefore roll 9 or more on 2D6 (because your Warrior is in a town) for a Great Shield to be available. 

TIMEWASTING
If you roll the Stock dice to see if an item is available , find it is, but then decide your Warrior doesn't want it after all, the trader throws your Warrior out of his shop for wasting his time. 

PRICES
Each Equipment fable has two columns, one marked Price (Buy) and the other marked Price (Sell). As their names suggest, the Price (Buy) column shows the amount of gold it costs the Warrior to buy a single one of those items, while the Price (Sell) column shows the amount of gold the trader gives the
Warrior to buy back a single one of those items. 

SELLING TREASURE
Any items of treasure that your Warrior has may be sold at any time while in the Settlement, subject to any restrictions on the Treasure card. Simply
discard the item of treasure and add its gold value to your Warrior's total. 



*/
// THE ARMOURER
//bdew
$stockFields=array('equipment', 'for', 'stock', 'buy', 'sell', 'special rules');

$store='gunsmith';
require( BASE.'/sys/stores/'.$store.'.php');

tag('h2', $storeName);
debug($stock);

?>





