<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		// 	มีหน้าที่ select, update ข้อมูล userid ของ customer
		// 	เกี่ยวข้องกับ ตาราง user
		// 	เกี่ยวข้องกับ ไฟล์ user.php
		// 	เขียนวันที่ 30-05-14
	Class Bill_m extends CI_Model
	{
		function __construct()
			{
				parent::__construct();
			
			}
		public function getBill()		// ฟังก์ชันลบข้อมูล item
		{
			$this->db->select('*');
			$this->db->from('bill');
			$this->db->where('total','x');
			$this->db->order_by("billid", "desc");
			$query = $this->db->get();		
			return $query->result();
		}
		
		public function getBillDate($date)		// ฟังก์ชันลบข้อมูล item
		{
			$this->db->select('*');
			$this->db->from('bill');
			$this->db->where('date',$date);
			$this->db->order_by("billid", "asc");
			$query = $this->db->get();		
			return $query->result();
		}
		
		public function getBillItem($billid)		// ฟังก์ชันลบข้อมูล item
		{
			$this->db->select('*');
			$this->db->from('item');
			$this->db->where('billid',$billid);
			$this->db->order_by("id", "asc"); 
			$query = $this->db->get();		
			return $query->result();
		}
		
		public function getItemReport($date)		// ฟังก์ชันลบข้อมูล item
		{
			$this->db->select('*');
			$this->db->from('item');
			$this->db->join('bill','bill.billid=item.billid');
			$this->db->where('bill.date',$date);
			$this->db->order_by("item.id", "asc"); 
			$query = $this->db->get();		
			return $query->result();
		}

	}
