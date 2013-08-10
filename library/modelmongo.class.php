<?php
class modelMongo extends mongoQuery {	
	protected $_model;

	function __construct() {

		/*
		$this->connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		$this->_model = get_class($this);
		$this->_table = strtolower($this->_model)."s";
		*/
		// connect
		// $m = new MongoClient();
		//$connection = new MongoClient( "mongodb://example.com" ); // connect to a remote host (default port: 27017)
		//$connection = new MongoClient( "mongodb://example.com:65432" ); //

		// select a database
		// $db = $m->selectDB(DB_NAME);

        $this->connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		$this->_model = get_class($this);
		// select a collection (analogous to a relational database's table)
		$this->_table = strtolower($this->_model)."s";

	}

	function __destruct() {
	}
}
