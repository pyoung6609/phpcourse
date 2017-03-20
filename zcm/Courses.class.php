<?php

	// require_once 'libs/SMTemplate.php';
	// $courses = new SMTemplate();
	// $smarty = $courses->get_smarty();
	// $smarty->display('courses.tpl');
	// Course
	// 	id
	// 	title
	// 	description
	// 	category
	// 	fee
	// 	created_at
	// 	updated_at
	class Courses {
		protected $id;
		protected $title;
		protected $description;
		protected $category_id;
		protected $fee;
		protected $created_at;
		protected $updated_at;

		// function __construct($id, $title, $description, $category, $fee, $created_at, $updated_at)
	 //    {
	 //        $this->id = $id;
	 //        $this->title = $title;
	 //        $this->description = $description;
	 //        $this->category = $category;
	 //        $this->fee = $fee;
	 //        $this->created_at = $created_at;
	 //        $this->updated_at = $updated_at;
	 //        echo 'Courses constructor called';
	 //    }

		public function getId()
	    {
	        return $this->id;
	    }

	    public function setId($id)
	    {
	        $this->id = $id;
	    }

	    public function getTitle()
	    {
	        return $this->title;
	    }

	    public function setTitle($title)
	    {
	        $this->title = $title;
	    }

	    public function getDescription()
	    {
	        return $this->description;
	    }

	    public function setDescription($description)
	    {
	        $this->description = $description;
	    }

	    public function getCategoryId()
	    {
	        return $this->category_id;
	    }

	    public function setCategoryId($category_id)
	    {
	        $this->category_id = $category_id;
	    }

	    public function getFee()
	    {
	    	return $this->fee;
	    }

	    public function setFee($fee) 
	    {
	    	$this->fee = $fee;
	    }

	    public function getCreatedAt()
	    {
	    	return $this->created_at;
	    }

	    public function setCreatedAt($created_at)
	    {
	    	$this->created_at = $created_at;
	    }

	    public function getUpdatedAt()
	    {
	    	return $this->updated_at;
	    }

	    public function setUpdatedAt($updated_at)
	    {
	    	$this->updated_at = $updated_at;
	    }
	}
?>