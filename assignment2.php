<html>
	<head></head>
	<body>
		<form method="get">
			<label>Input 1: </label>
			<input type='text' name='num1' />
			<label>Input 2: </label>
			<input type='text' name='num2' />
			<input type='submit' name='submit' />
		</form>
		<?php
			function multiply_through_value($value) {
				for($i=1; $i<=10; $i++) {
					echo $value . " * " . $i . " = " . $value*$i . '<br/>';
				}
			}

			function show_mult_table_through_value($number1, $number2) {
				for($j=$number1; $j<=$number2; $j++) {
					 multiply_through_value($j);
					echo '<br />';
				}
			}

			if( (count($_GET) > 0)  && isset($_GET['num1']) && isset($_GET['num2'])) {
				$num1 = intval($_GET['num1']);
				$num2 = intval($_GET['num2']);
				if($num1 != 0 && $num2 != 0) {
					show_mult_table_through_value($num1, $num2);
				} else {
					echo 'Both fields need integer values';
				}
			} 
		?>
	</body>
</html>