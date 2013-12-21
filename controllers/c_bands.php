<?php

class bands_controller extends base_controller {
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
	} 
		
	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/bands/index/
	-------------------------------------------------------------------------------------------------*/
	public function index() {
		
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_bands_index');
			
		# Now set the <title> tag
			$this->template->title = "Band Central : Bands";
	      					     		
		# Render the view
			echo $this->template;

	} # End of method
	
	
} # End of class
