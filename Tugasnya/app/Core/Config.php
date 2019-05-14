<?php

class Config {
	private static $_instance = null;

	/* Database Configuration [ MySql ]
	*
	* This is configuration of your database connection
	* Please Complete this part
	*
	*/

	public function dbConfig(){
	    $this->host  = "localhost";
	    $this->db    = "tugas_spk";
	    $this->user  = "root";
	    $this->pass  = "";
	    return $this;
	}



	public function authConfig(){

		$this->tableUser = 'users';
		$this->fieldId   = 'id';
		$this->whereId   = $_SESSION['id'];
		return $this;

	}


	// ------------------------------------------------------------- //
	


	public static function getInstance(){
    	if(!isset(self::$_instance)) self::$_instance = new Config();
    	return self::$_instance;
 	}

}