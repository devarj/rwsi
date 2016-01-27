<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model
{
	
	public function add($table, $data)
	{
		$this->db->insert($table, $data);
	}
	
	public function delete($table, $id){
		$this->db->where('id', $id);
		$this->db->delete($table);
	}
	
	public function get($table){
		return $this->db->get($table)->result();
	}
	
	public function get_where($table, $where, $result){
		$this->db->where($where);
		if($result == 0){
			return $this->db->get($table)->row();
		}
		else{
			return $this->db->get($table)->result();
		}
		
	}
	
	function update($table, $data, $where){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	
	public function actType($id){
		$this->db->where('id', $id);
		$data = $this->db->get('activites')->row();
		return $data->name;
	}

}
