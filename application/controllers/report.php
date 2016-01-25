<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	
		$this->load->library(array( 'session', 'form_validation')); 
		$this->load->helper(array('url', 'html', 'form'));
		$this->load->model('Bill_m','bill');
		
	}
	 
	public function index()
	{
		$this->load->view('report_v');
	}
	
	public function getbilldate()
	{	
		
		//$_POST['datepicker']='2015-01-20';
		$query = $this->bill->getBillDate($_POST['datepicker']); 	
		echo json_encode($query);
	}
	
	public function pdf()
	{	
		
		//$_POST['datepicker']='2015-01-20';
		
		require_once(APPPATH.'third_party/html2pdf/html2pdf.class.php');
				$index=1;
				$price=0;
				$query = $this->bill->getItemReport($_POST['datepicker']); 
				
				foreach($query as $row){
					$report['billid'][$index]=$row->billid;
					
					$report['name'][$index]=$row->item;
					if($row->option=="0"){ 
						$report['option'][$index]="";
					}else{
						$report['option'][$index]=$row->option;
					}
					$report['price'][$index]=$row->itemprice;
					$price = $price+$row->itemprice;
					$index++;	
				}			
				$data['item_report']=$report;
				$data['date']=$_POST['datepicker'];
				$data['rowtable']=$index;
				$data['total']=$price;
				$this->load->view('pdf/item_v',$data);			
				
				
				
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */