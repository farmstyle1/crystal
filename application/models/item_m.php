<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		// 	มีหน้าที่ select, update ข้อมูล userid ของ customer
		// 	เกี่ยวข้องกับ ตาราง user
		// 	เกี่ยวข้องกับ ไฟล์ user.php
		// 	เขียนวันที่ 30-05-14
	Class Item_m extends CI_Model
	{
		function __construct()
			{
				parent::__construct();
			
			}
		public function selectLastBill()		// select ข้อมูลจาก user
		{	
			
			$last = $this->db->insert_id();
			return $last ;
		}
		
		
			
		public function creBill($date,$queue)		// ฟังก์ชัน insert ข้อมูลสมาชิก
		{
			$cause = array('date'=>$date,'queue'=>$queue,'total'=>'x');	
			$this->db->insert('bill',$cause);	
			$last = $this->db->insert_id();
			return $last;						
		}
		
		public function addItem($itemid,$price,$option,$billnum,$queue)		// ฟังก์ชัน insert ข้อมูลสมาชิก
		{
			$cause = array('item'=>$itemid,'itemprice'=>$price,'option'=>$option,'billid'=>$billnum,'status'=>'1','queue'=>$queue);	
			$this->db->insert('item',$cause);	
			
			return;						
		}
		
		
		
		public function getLastBill($last)		// ฟังก์ชันค้นหาข้อมูล itemID
		{
			// ค้นหาในกรณีที่ เจอเลย
			$this->db->select('*');
			$this->db->from('bill');
			$this->db->where('billid',$last);
			$query = $this->db->get();		
			return $query->result();		
		}
		
		public function getLastItem($last)		// ฟังก์ชันค้นหาข้อมูล itemID
		{
			// ค้นหาในกรณีที่ เจอเลย
			$this->db->select('*');
			$this->db->from('item');
			$this->db->join('price','price.item=item.item');
			$this->db->where('billid',$last);
			$query = $this->db->get();		
			return $query->result();		
		}
		public function getQueue()		// ฟังก์ชันค้นหาข้อมูล itemID
		{
			// ค้นหาในกรณีที่ เจอเลย
			$this->db->select('*');
			$this->db->from('item');
			$this->db->where('status','0');
			$query = $this->db->get();		
			return $query->result();		
		}
		
		public function getAllQueue()		// ฟังก์ชันค้นหาข้อมูล item
		{
			$this->db->select('*');
			$this->db->from('item');
			$this->db->where('status','0');
			$this->db->order_by("id", "asc"); 
			$query = $this->db->get();		
			return $query->result();
		}
		
		public function clearQueue($id)		// ฟังก์ชัน update ข้อมูลราคาสินค้า
		{
			$cause = array('status'=>'1');	
			$this->db->update('item',$cause,array('id'=>$id));	
			return;						
		}
		
		public function getPrice($itemprice)		// ฟังก์ชันค้นหาข้อมูล itemID
		{
			// ค้นหาในกรณีที่ เจอเลย
			$this->db->select('price');
			$this->db->from('price');
			$this->db->where('item',$itemprice);
			$query = $this->db->get();		
			return $query->result();		
		}
		
		public function payBill($billnum,$total)		// ฟังก์ชัน update ข้อมูลราคาสินค้า
		{
			$cause = array('total'=>$total);	
			$this->db->update('bill',$cause,array('billid'=>$billnum));	
			return;						
		}
		
		public function cancelItem($id)		// ฟังก์ชันลบข้อมูล item
		{
			$cause = array('id'=>$id);
			$this->db->delete('item',$cause);
		
			return;	
		}
		
		public function getItem($billid)		// ฟังก์ชันลบข้อมูล item
		{
			$this->db->select('*');
			$this->db->from('item');
			
			$this->db->where('billid',$billid);
			$this->db->order_by("id", "desc"); 
			$query = $this->db->get();		
			return $query->result();
		}
		
		public function queryItem($itemid)		// ฟังก์ชันลบข้อมูล item
		{
			$this->db->select('*');
			$this->db->from('price');
			$this->db->where('item',$itemid);
			$query = $this->db->get();		
			return $query->result();
		}
		
		public function getList($list)		// ฟังก์ชันลบข้อมูล item
		{
			$this->db->select('*');
			$this->db->from('price');
			$this->db->where('type',$list);
			$this->db->order_by("name", "asc"); 
			$query = $this->db->get();		
			return $query->result();
		}
		
		public function first()		// ฟังก์ชันลบข้อมูล item
		{
			$this->db->select('*');
			$this->db->from('bill');
			$this->db->where('total','x');
			$query = $this->db->get();		
			return $query->num_rows();
		}

	}
