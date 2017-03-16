<?php
	class Car() {
		private $brand;
		private $model;
		private $type;

		function __construct($brand, $type, $model){
			$this->brand = $brand;
			$this->type = $type;
			$this->model = $model;
		}

		function __destruct() {

		}

		public function getBrand()
	    {
	        return $this->brand;
	    }

	    public function setBrand($brand)
	    {
	        $this->brand = $brand;
	    }

	    public function getType()
	    {
	        return $this->type;
	    }

	    public function setType($type)
	    {
	        $this->type = $type;
	    }

	    public function getModel()
	    {
	        return $this->model;
	    }

	    public function setModel($model)
	    {
	        $this->model = $model;
	    }
	}

	$mustang = new Car('Ford', ['gas-powered', 'convertible', 'sports'], 'King Cobra');
?>