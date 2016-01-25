<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Bill extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->library(array( 'session', 'form_validation')); 
			$this->load->helper(array('url', 'html', 'form'));
			$this->load->model('Bill_m','bill');
			
		}
		public function index()
		{
			$this->load->view('bill_v');
		}
		
		public function getbill()
		{	
			//$_POST['billid'] = 233;
			$query = $this->bill->getBill(); 	
			echo json_encode($query);
		}
		
		public function getbillitem()
		{	
			//$_POST['bill'] = 446;
			$query = $this->bill->getBillItem($_POST['bill']); 	
			echo json_encode($query);
		}
		
		public function item	()
		{	
			//$_POST['billid'] = 233;
			$this->load->view('bill_item_v');
		}
		
		
	}
	