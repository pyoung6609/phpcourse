<html>
<head></head>
<body>
<!-- <p>You have entered below details</p>

<p>Title : <?php echo $_POST['textinput'] ?></p>

<p>Function : <?php echo $_POST['string-function'] ?></p> -->

<p>Output: </p>
<?php
	var_dump($_POST);
	if(empty($_POST['textinput'])) {
		echo 'No input was given';
	} elseif(!isset($_POST['string-function'])) {
		echo 'No radio selected';
	} else {
		$radioVal = $_POST['string-function'];
		$text_input = $_POST['textinput'];
		switch ($radioVal) {
			case 'length': 
				echo strlen($text_input);
				break;
			case 'count': 
				echo str_word_count($text_input);
				break;
			case 'reverse':
				echo strrev($text_input);
				break;
			case 'lower':
				echo strtolower($text_input);
				break;
			case 'upper':
				echo strtoupper($text_input);
				break;
			case 'ucfirst':
				echo ucfirst($text_input);
				break;
			case 'ucwords':
				echo ucwords($text_input);
				break;
			case 'htmlentities':
				echo htmlentities($text_input);
				break;
			case 'position':
				break;
			default:
				echo 'No radio selected';
		}
	}

?>
<body>
</html>