<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		// 	มีหน้าที่ select, update ข้อมูล userid ของ customer
		// 	เกี่ยวข้องกับ ตาราง user
		// 	เกี่ยวข้องกับ ไฟล์ user.php
		// 	เขียนวันที่ 30-05-14
	Class Edit_m extends CI_Model
	{
		function __construct()
			{
				parent::__construct();
			
			}
		
		public function getType($type)		// ฟังก์ชัน insert ข้อมูลสมาชิก
		{
			$this->db->select('*');
			$this->db->from('price');
			$this->db->where('type',$type);
			$this->db->order_by("name", "asc"); 
			$query = $this->db->get();		
			return $query->result();					
		}
		
		public function addItem($item,$price,$type)		// ฟังก์ชัน insert ข้อมูลสมาชิก
		{
		$cause = array('name'=>$item,'price'=>$price,'type'=>$type);	
			$this->db->insert('price',$cause);	
			
			return;										
		}
		
		public function deleteItem($id)		// ฟังก์ชันลบข้อมูล item
		{
			$cause = array('item'=>$id);
			$this->db->delete('price',$cause);
		
			return;	
		}
	}
