<!-- array_fill
array_keys
array_chunk
array_pop
array_push
print_r -->

<?php
	$calories = ["banana" => 100, "coke" => 260, "chicken" => 300];
	//print_r($calories);

	function fill($start, $numberThrough, $associatedValue) {
		$array;
		for($n=$start; $n<=$numberThrough; $n++){
			$array[$n] = $associatedValue;
		}

		return $array;
	}

	// print_r(fill(-2, 9, 'Banana'));

	function keys($array, $keyToFind=null) {
		$keyArray=[];
		foreach($array as $k => $v) {
			array_push($keyArray, $k);
		}
		return $keyArray;
	}

	//print_r(keys($calories));

	$anArray = array("V", "W", "X", "Y", "Z");

	function pop($array) {
		unset($array[count($array)-1]);
		//var_dump($array);
		return $array;
	}

	// print_r(pop($anArray));

	function push($array, $value) {
		$array[] = $value;
		return $array;
	}

	//print_r(push($anArray, "A"));

	$multiArray = array ('a' => 'apple', 
		                 'b' => 'banana', 
		                 'c' => array ('x' => array(1,2,3,4) , 
		                 	           'y', 
		                 	           'z' => array(100 => array(101, 102, 103),
		                 	           	            200,
		                 	           	            300)));

	function printArray($array) {
		$printedArray;
		foreach($array as $k => $v) {
			if(is_array($v)) {
				printArray($v);
			} else {
				echo $v;
				echo '<br />';
			}
		}
	}

	printArray($multiArray);
?>