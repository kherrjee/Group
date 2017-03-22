<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* NAME : Dashboard Model
* TYPE : CI_Model
* DEVELOPER : Filjumar Jumamoy	
* DATE DEVELOPED: 01/18/16
* DESCRIPTION: Dashboard
*/

class MdDash extends CI_Model {

	private $table = "dashboard";
	private $client = "client";
	private $sales = "sales";
	public function __construct()
	{
		parent::__construct();
	}
	public function getProfile(){
		$this->db->select('profilePath,folder')
		->from('tbl_employees')
		->where('emp_id',$this->session->userdata('emp_id'));

		$query = $this->db->get();

		return $query->result_array();

	}
	public function getPoint(){
		$this->db->select()
		->from('tbl_points as pts')
		->join('tbl_employees as emp' , 'pts.emp_id = emp.emp_id','LEFT')
		->order_by('pts.points','DESC')
		->LIMIT('10');
		// ->where('emp.isAdmin <= 0');

		$query= $this->db->get();

		return $query->result_array();
	}
	public function updatePoints($id,$final){
		$this->db->where('emp_id', $id)
		->update('tbl_points', $final);
		return true;
	}
	public function insertHistory($array){
		$this->db->insert('claim_history',$array);
		return true;
	}
	public function getPointOwner($id){
		$this->db->select()
		->from('tbl_points as pts')
		->join('tbl_employees as emp' , 'pts.emp_id = emp.emp_id','LEFT')
		->where('emp.emp_id',$id);

		$query= $this->db->get();

		return $query->result_array();
	}
	public function getItem(){
		$this->db->select()
		->from('tbl_item');

		$query = $this->db->get();

		return $query->result_array();
	}
}

;?>