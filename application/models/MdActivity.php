<?php 
	defined('BASEPATH')or exit('NO direct script access allowed');

class MdActivity extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}

	public function create($array){
		$this->db->insert('tbl_activity', $array);
		return true;
	}
	public function createItem($array){
		$this->db->insert('tbl_item',$array);
		return true;
	}
	public function getItems(){
		$this->db->select()
		->from('tbl_item');

		$query = $this->db->get();

		return $query->result_array();
	}
public function getActivity(){
		$this->db->select()
		->from('tbl_activity');

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getEmp($lastname,$firstname){
		// return $firstname;
		$this->db->select('emp_id')
		->from('tbl_employees');
		$this->db->where('last_name',$lastname);
		// $this->db->where('first_name',$firstname);

		$query = $this->db->get();

		return $query->result_array();
	}
	public function insertTime($array){
		$this->db->insert('tbl_attendance', $array);
		return true;
	}
	public function deleteItem($id){
		$data = array(
				'status'=>'1'
			);
		$this->db->where('id', $id)
		->update('tbl_item', $data);
		return true;
	}



}

?>