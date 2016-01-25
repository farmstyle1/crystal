<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Order extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('Item_m','item');
		}
		public function index()
		{
			
		}
		
		public function lastbill()
		{		
			
			$lastbill = $this->item->selectLastBill(); 
			$query=$this->item->getLastBill($lastbill); 	
			echo json_encode($query);
			
		}
		public function crebill()
		{		
			//$date1 = "17-12-2014";
			$last = $this->item->creBill($_POST['date'],$_POST['queue']); 
			//$last = $this->item->creBill($date1);
			$lastbill = $this->item->selectLastBill(); 
			$query=$this->item->getLastBill($lastbill); 	
			echo json_encode($query);
		}
	
		
		public function additem()
		{		
			//$_POST['itemprice']="greenf";
			//$_POST['itemid']="green";
			//$_POST['option']="f";
			//$_POST['billnum']="140";
			
			
			$last = $this->item->addItem($_POST['itemid'],$_POST['price'],$_POST['option'],$_POST['billnum'],$_POST['queue']);
			//$last = $this->item->addItem('โกโก้','Hot','65');		
			echo json_encode($query);
			
			
		}
		
		
		
		public function getqueue()
		{		
		
			
			$query = $this->item->getAllQueue(); 	
			echo json_encode($query);
			
			
		}
		public function clearqueue()
		{		
			//$itemid="90";
			//$this->item->clearQueue($itemid); 
			$this->item->clearQueue($_POST['itemid']); 	
			return;
			
			
		}
		
		public function paybill()
		{		
			//$date1 = "17-12-2014";
			$last = $this->item->payBill($_POST['billnum'],$_POST['total']); 
			return;
		}
		
		public function cancelitem()
		{		
			//$date1 = "17-12-2014";
			$last = $this->item->cancelItem($_POST['id']); 
			return;
		}
		
		public function getitem()
		{	
			//$_POST['billid'] = 533;
			$query = $this->item->getItem($_POST['billid']); 	
			echo json_encode($query);
		}
		
		public function queryitem()
		{	
			//$_POST['itemid'] = "cofmf";
			$query = $this->item->queryItem($_POST['itemid']); 	
			echo json_encode($query);
		}
		
		public function getlist()
		{	
			//$_POST['list'] = "t";
			$query = $this->item->getList($_POST['list']); 	
			echo json_encode($query);
		}
		
		public function first()
		{	
			//$_POST['list'] = "t";
			$query = $this->item->first(); 	
			echo json_encode($query);
		}
	}
	