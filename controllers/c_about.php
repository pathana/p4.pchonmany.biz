<?php

class about_controller extends base_controller {
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
	} 
		
	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/about/index/
	-------------------------------------------------------------------------------------------------*/
	public function index() {
		
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_about_index');
			
		# Now set the <title> tag
			$this->template->title = "Band Central : About";
	      					     		
		# Render the view
			echo $this->template;

	} # End of method
	
	
} # End of class
