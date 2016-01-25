<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Edit extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->library(array( 'session', 'form_validation')); 
			$this->load->helper(array('url', 'html', 'form'));
			$this->load->model('','');
		}
		public function index()
		{
			$this->load->view('edit_v');
		}
		
		public function editbill()
		{
			
			$billid=$this->uri->segment(3);	
			$queueid=$this->uri->segment(4);	
			$data["bill"]=$billid;	
			$data["queue"]=$queueid;				
			$this->load->view('edit_v',$data);
		}
		
		
	}
	