<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	
		$this->load->library(array( 'session', 'form_validation')); 
		$this->load->helper(array('url', 'html', 'form'));
		
		
	}
	 
	public function index()
	{
		$this->load->view('landing');
	}
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */