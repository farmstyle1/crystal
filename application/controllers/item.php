<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Item extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->library(array( 'session', 'form_validation')); 
			$this->load->helper(array('url', 'html', 'form'));
			$this->load->model('Edit_m','edit');
		}
		public function index()
		{
			$this->load->view('item_v');
		}
		public function gettype()
		{
			//$_POST['type']="mc";
			$query = $this->edit->getType($_POST['type']); 	
			echo json_encode($query);
		}
		
		public function additem()
		{
			//$_POST['type']="mc";
			$query = $this->edit->additem($_POST['item'],$_POST['price'],$_POST['type']); 	
			echo json_encode($query);
		}
		public function deleteitem()
		{		
			//$date1 = "17-12-2014";
			 $this->edit->deleteItem($_POST['id']); 
			return;
		}
		
		
		
		
	}
	