<?php
	// strlen
	// implode
	// explode
	// string reverse
	// substring

	// php form
	// input - text box
	// give a radio group -> all functions
	// execute

	function string_length($string) {
		$string = str_split($string);
		return count($string);
	}

	//echo string_length("Bananas       ");
?>

<html>
	<head></head>
	<body>
	<form method="post" action="assignment4-detail.php" enctype="multipart/form-data">
		    <label>Input</label>
		    <input type="text" name="textinput"/><br/>
		    <label>Input 2</label>
		    <input type="text" name="textinput2" id="input2" disabled /><br/>
		    <input type="radio" name="string-function" value="length"> strlen<br />
		    <input type="radio" name="string-function" value="count"> str_word_count<br />
		    <input type="radio" name="string-function" value="reverse"> strrev<br />
		    <input type="radio" name="string-function" value="lower"> strtolower<br />
		    <input type="radio" name="string-function" value="upper"> strtoupper<br />
		    <input type="radio" name="string-function" value="ucfirst"> ucfirst<br />
		    <input type="radio" name="string-function" value="ucwords"> ucwords<br />
		    <input type="radio" name="string-function" value="htmlentities"> htmlentities<br />
		    <input type="radio" name="string-function" value="position" onclick="enableSecondInput()"> strpos<br />
		    <input type="submit" value="Submit"/>
		</form>
		<script>

			function enableSecondInput() {
				//console.log(document.getElementsByName('textinput2'));
				document.getElementById('input2').removeAttribute('disabled');
			}
			// var twoInputFunction = document.getElementsByName('string-function').value;
			// switch(twoInputFunction) {
			// 	case 'position':
			// 		document.getElementsByName('textinput2').setAttribute('disabled', '');
			// 		break;
			// 	default:
			// }
		</script>
	</body>
</html>