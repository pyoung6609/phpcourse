<?php
	include('person.php');

	class Student extends Person {
		protected $school;
		protected $level;

		function __construct ($name, $age, $height, $weight, $school, $level) {
			parent::__construct($name, $age, $height, $weight);
			$this->school = $school;
			$this->level = $level;
		}

		function getSchool() {
			return $this->school;
		}

		function setSchool($school) {
			$this->school = $school;
		}

		function getLevel() {
			return $this->level;
		}

		function setLevel($level) {
			$this->level = $level;
		}

		function show() {
			parent::show();
			echo "School : " . $this->school . "<br/>";
        	echo "Level : " . $this->level . "<br/>";
		}
	}

	$Patrick = new Student('Patrick', 27, 120, 180, 'Berry College', 'Senior');
	$Patrick->show();
?>