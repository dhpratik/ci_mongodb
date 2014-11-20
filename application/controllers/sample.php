<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sample extends CI_Controller{

	public function __construct(){

		parent::__construct();
		//load the mongodb library
		$this->load->library('Mongo_db');
	}

	//index of our controller
	function index() {

		//connect to mongodb collection named as 'category' using our mongodb library
		$collection = $this->mongo_db->db->selectCollection('testdata');
		//fetch the record from that collection
		$collection->insert(array('name' => 'rohan'));

		$result=$collection->find();
		foreach($result as $document) {
			//display the records
			print_r($document);
		}
	}

}