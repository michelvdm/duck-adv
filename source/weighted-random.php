
<?php defined('BASE') or die('No access');

/**
 * weighted_random_simple()
 * Pick a random item based on weights.
 *
 * @param array $values Array of elements to choose from 
 * @param array $weights An array of weights. Weight must be a positive number.
 * @return mixed Selected element.
 */
function weighted_random_simple($values, $weights){ 
    $count = count($values); 
    $i = 0; 
    $n = 0; 
    $num = mt_rand(0, array_sum($weights)); 
    while($i < $count){
        $n += $weights[$i]; 
        if($n >= $num){
            break; 
        }
        $i++; 
    } 
    return $values[$i]; 
}
