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

        # Set up the View
        $this->template->content = View::instance("v_bands_index");
        $this->template->title   = "Band Central : Bands";

        # Build the query to get only band users
        $q = "SELECT * FROM `users` 
	        WHERE `user_id` = 5
			or `user_id` = 6
			or `user_id` = 7
			or `user_id` = 8
			or `user_id` = 9
			or `user_id` = 10
			or `user_id` = 11
			or `user_id` = 12";

        # Execute the query to get all the users. 
        # Store the result array in the variable $users
        $users = DB::instance(DB_NAME)->select_rows($q);

        # Build the query to figure out what connections does this user already have? 
        # I.e. who are they following
        $q = "SELECT * 
            FROM users_users
            WHERE user_id = ".$this->user->user_id;

        # Execute this query with the select_array method
        # select_array will return our results in an array and use the "users_id_followed" field as the index.
        # This will come in handy when we get to the view
        # Store our results (an array) in the variable $connections
        $connections = DB::instance(DB_NAME)->select_array($q, 'user_id_followed');

        # Pass data (users and connections) to the view
        $this->template->content->users       = $users;
        $this->template->content->connections = $connections;

        # Render the view
        echo $this->template;
    
    }

    public function follow($user_id_followed) {

        # Prepare the data array to be inserted
        $data = Array(
            "created" => Time::now(),
            "user_id" => $this->user->user_id,
            "user_id_followed" => $user_id_followed
            );

        # Do the insert
        DB::instance(DB_NAME)->insert('users_users', $data);

        # Send them back
        Router::redirect("/bands");

    }

    public function unfollow($user_id_followed) {

        # Delete this connection
        $where_condition = 'WHERE user_id = '.$this->user->user_id.' AND user_id_followed = '.$user_id_followed;
        DB::instance(DB_NAME)->delete('users_users', $where_condition);

        # Send them back
        Router::redirect("/bands");

    }

    public function delete($table, $where_condition) {

        $sql = 'DELETE FROM '.$table.' '.$where_condition; 

        return $this->query($sql);

    }



	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/bands/preview/
	-------------------------------------------------------------------------------------------------*/
	public function preview() {
		
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_bands_preview');
			
		# Now set the <title> tag
			$this->template->title = "Band Central : Bands";
	      					     		
		# Render the view
			echo $this->template;

	} # End of method


	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/bands/linkinpark/
	-------------------------------------------------------------------------------------------------*/
	public function linkinPark() {
		
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_bands_linkinpark');
			
		# Now set the <title> tag
			$this->template->title = "Band Central : Bands [Linkin Park]";
	      					     		
		# Render the view
			echo $this->template;

	} # End of method


	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/bands/linkinpark/
	-------------------------------------------------------------------------------------------------*/
	public function noDoubt() {
		
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_bands_nodoubt');
			
		# Now set the <title> tag
			$this->template->title = "Band Central : Bands [No Doubt]";
	      					     		
		# Render the view
			echo $this->template;

	} # End of method


	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/bands/linkinpark/
	-------------------------------------------------------------------------------------------------*/
	public function onerepublic() {
		
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_bands_onerepublic');
			
		# Now set the <title> tag
			$this->template->title = "Band Central : Bands [OneRepublic]";
	      					     		
		# Render the view
			echo $this->template;

	} # End of method


	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/bands/linkinpark/
	-------------------------------------------------------------------------------------------------*/
	public function paramore() {
		
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_bands_paramore');
			
		# Now set the <title> tag
			$this->template->title = "Band Central : Bands [Paramore]";
	      					     		
		# Render the view
			echo $this->template;

	} # End of method


	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/bands/linkinpark/
	-------------------------------------------------------------------------------------------------*/
	public function phoenix() {
		
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_bands_phoenix');
			
		# Now set the <title> tag
			$this->template->title = "Band Central : Bands [Phoenix]";
	      					     		
		# Render the view
			echo $this->template;

	} # End of method


	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/bands/linkinpark/
	-------------------------------------------------------------------------------------------------*/
	public function thePolice() {
		
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_bands_thepolice');
			
		# Now set the <title> tag
			$this->template->title = "Band Central : Bands [The Police]";
	      					     		
		# Render the view
			echo $this->template;

	} # End of method


	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/bands/linkinpark/
	-------------------------------------------------------------------------------------------------*/
	public function steveMillerBand() {
		
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_bands_stevemillerband');
			
		# Now set the <title> tag
			$this->template->title = "Band Central : Bands [Steve Miller Band]";
	      					     		
		# Render the view
			echo $this->template;

	} # End of method


	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/bands/linkinpark/
	-------------------------------------------------------------------------------------------------*/
	public function yeahYeahYeahs() {
		
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_bands_yeahyeahyeahs');
			
		# Now set the <title> tag
			$this->template->title = "Band Central : Bands [Yeah Yeah Yeahs]";
	      					     		
		# Render the view
			echo $this->template;

	} # End of method
	
	
} # End of class
