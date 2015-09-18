<?php defined('BASE') or die('No access');
/* after adventure: 
1 pick destination
2 read x hazard table events
*/

function renderTravelTo(){
	echo <<<EOT
<form method="post" action="">
<p>Travel to where?</p>
<input type="radio" name="Destination" value="1" id="fDestination_1" required checked><label for="fDestination_1">Village</label> | 
<input type="radio" name="Destination" value="2" id="fDestination_2"><label for="fDestination_2">Town</label> | 
<input type="radio" name="Destination" value="3" id="fDestination_3"><label for="fDestination_3">City</label>
<hr>
<input type="submit" value="Enter">
</form>
EOT;
}

function setDestination(){
	$destNo=$_POST['Destination'];
	out($dest);
	$list=array(
		'1'=>array(
			'name'=>'village',
			'hazards'=>2
			),
		'2'=>array(
			'name'=>'town',
			'hazards'=>4
			),
		'3'=>array(
			'name'=>'city',
			'hazards'=>6
			)
	);
	$dest=$list[$destNo];
	$_SESSION["destination"]=$dest;
	$_SESSION["hazards"]=$dest['hazards'];
	$_SESSION["step"]++;
}

function doHazard($num){
	$none=array( 22, 24, 33, 44, 51, 56 );
	tag('p', 'You rolled: '.$num);
	if( in_array ( $num, $none ) ){
		echo '<pre>'.$num.': Uneventful week</pre>';
	}else{
		$hazard=file_get_contents(BASE.'/sys/rules/travel_hazard'.$num.'.txt');	
			echo '<pre>'.$hazard.'</pre>';
			$_SESSION["hazards"]--;
	}
}

function doSettlementEvent($num){
	$none=array(13, 22, 32, 36, 42, 52, 56, 62, 65); 
	tag('p', 'You rolled: '.$num);
	if( in_array ( $num, $none ) ){
		echo '<pre>'.$num.': Uneventful day</pre>';
	}else{
		$event=file_get_contents(BASE.'/sys/rules/settlement_event'.$num.'.txt');	
		echo '<pre>'.$event.'</pre>';
	}
}

// main
if($method=='POST'){
	switch($_SESSION["step"]){
		case 1:
			setDestination();
			break;
		default:
			debug($_POST,'This was posted: ');
			die('End of code.');
	}
	header('Location: '.ROOT);
}

// get: render step
if(!isset($_SESSION["step"]))$_SESSION["step"]=1;

$step=$_SESSION["step"];

switch($step){
	case 1:
		renderTravelTo();
		break;
	case 2:
		$dest=$_SESSION["destination"];
		tag('h2', 'Traveling to the nearest '.$dest['name'].'&hellip;');
		if($_SESSION["hazards"]>0){
			$num=roll()*10+roll();
			doHazard($num);
		}else{
			tag('p', 'You reached your destination. You may enter the '.$dest['name'].'. ');
			$_SESSION["step"]=3; // in a settlement
			$_SESSION["day"]=1;
		}
		tag('a href=""', 'Continue');
		break;
	case 3: // in a settlement
		$dest=$_SESSION["destination"];
		tag('h2', 'In '.$dest['name'].', day '.$_SESSION["day"].'&hellip;');
		// each warrior: 
		// do stuff, then: 
		$num=roll()*10+roll();
		doSettlementEvent($num);
		$_SESSION["day"]++;
		tag('a href=""', 'Continue');
		break;
	default:
		tag('p', 'Error: no rule for step '.$step);
		debug($_SESSION);

}

