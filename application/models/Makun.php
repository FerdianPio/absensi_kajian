<?php

class Makun extends CI_Model {
	
	public function get_all()
	{
		$query=$this->db->select('*')
						->from('akun')
						->join('level_akses','akun.level_akses=level_akses.level_akses')
						->get();
		return $query;
	}

	public function get_level()
	{
		$query=$this->db->get('level_akses');
		return $query;
	}

	public function select_one($data)
	{
		$query=$this->db->select('*')
						->from('akun')
						->where("id_akun",$data)
						->get();
		return $query;
	}
	
	public function insert_akun($data)
	{
		$up=array(
			'level_akses'=>$data['level_akses'],
			'username'=>$data['username'],
			'password'=>$data['password'],
		);
		$this->db->insert('akun', $up);
	}
	
	public function update_akun($data)
	{
		$up=array(
			'username'=>$data['username'],
			'password'=>$data['password'],
		);
		$this->db->where('id_akun',$data['id_akun']);
		$this->db->update('akun', $up);
	}
	
	public function delete_akun($data)
	{
		$this->db->delete('akun',array('id_akun'=>$data['id_akun']));
	}

}
