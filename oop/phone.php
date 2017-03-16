<?php
	class Phone() {
		private $brand;
		private $type;
		private $camera_megapixels;

		function __construct($brand, $type, $camera_megapixels){
			$this->brand = $brand;
			$this->type = $type;
			$this->camera_megapixels = $camera_megapixels;
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

	    public function getCameraMegapixels()
	    {
	        return $this->camera_megapixels;
	    }

	    public function setCameraMegapixels($camera_megapixels)
	    {
	        $this->camera_megapixels = $camera_megapixels;
	    }
	}

	$iPhone = new Phone('Apple', 'SE', 8.5);
?>