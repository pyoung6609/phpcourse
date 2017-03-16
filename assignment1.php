<?php
	//EXERCISE 1
	$name = 'Patrick';
	$age = 27;
	$gender = 'male';
	$height = '5\'9"';
	$weight = '180lbs';
	//echo $name . " " . $age . " " . $gender . " " . $height . " " . $weight;


	
	/*EXERCISE 2*/
	$person = array(
		'name' => 'Patrick',
		'age' => 27,
		'gender' => 'male',
		'height' => '5\'9"',
		'weight' => '180lbs'
	);

	//var_dump($person);

	foreach($person as $key => $value){
		// echo $key . ' => ' . $value;
	}



	//EXERCISE 3
	$int1 = 10;
	$int2 = 15;
	$float1 = 12.6;
	//echo $int1 . " " . $int2 . " " . $float1;



	//EXERCISE 5
	function checkEvenOrOdd($value) {
		if($value % 2 == 0) {
			echo 'Even';
		} else {
			echo 'Odd';
		}
	}

	checkEvenOrOdd(4);




	//EXERCISE 6
	for($n=2; $n<20; $n = $n+2) {
		// echo $n;
	}




	//EXERCISE 7
	for($i=1; $i<100; $i++) {
		if($i % 3 == 0 && $i % 5 == 0) {
			// echo $i . ' ';
		}
	}




	//EXERCISE 8
	function multiplyThrough10($value) {
		for($i=1; $i<=10; $i++) {
			echo $value . " * " . $i . " = " . $value*$i . '<br/>';
		}
	}

	function showMultTableUpThrough($number) {
		for($j=1; $j<=$number; $j++) {
			multiplyThrough10($j);
			echo '<br />';
		}
	}

	// showMultTableUpThrough(5);

?>