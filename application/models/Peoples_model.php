<?php

class Peoples_model extends CI_Model
{
	public function getAllPeoples()
	{
		return $this->db->get('peoples')->result_array();
	}

	public function getPeoples($limit, $start, $keyword = null)
	{
		if($keyword){

			$this->db->like('name', $keyword);
		}

		return $this->db->get('peoples', $limit, $start)->result_array();
	}

	public function countAllPeoples()
	{
		return $this->db->get('peoples')->num_rows();
	}
	
	public function updatePeople($old_name, $new_name, $new_position)
	{
		$this->db->where('name', $old_name);
		$this->db->update('peoples', [
			'name' => $new_name,
			'position' => $new_position
		]);
	}
	

}




 