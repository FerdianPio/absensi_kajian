<?php

class Mkelompok extends CI_Model {
	
	public function get_all()
	{
		// $query = $this->db->get('kelompok');
		$query=$this->db->select('*')
						->from('kelompok')
						->join('cabang','kelompok.id_pengurus = cabang.id_pengurus')
						->get();
		return $query;
	}

	public function select_one($data)
	{
		$query=$this->db->select('*')
						->where("id_kelompok",$data)
						->get();
		return $query;
	}
	
	public function insert_kelompok($data)
	{
		$up=array(
			'id_cabang'=>$data['id_cabang'],
			'nama_kelompok'=>$data['nama_kelompok'],
			'ketua_kelompok'=>$data['ketua_kelompok'],
			'sekertaris_kelompok'=>$data['sekertaris_kelompok'],
			'bendahara_kelompok'=>$data['bendahara_kelompok'],
			'alamat_kelompok'=>$data['alamat_kelompok'],
			'cp_kelompok'=>$data['cp_kelompok'],
		);
		$this->db->insert('kelompok', $up);
	}
	
	public function update_kelompok($data)
	{
		$up=array(
			'nama_kelompok'=>$data['nama_kelompok'],
			'ketua_kelompok'=>$data['ketua_kelompok'],
			'sekertaris_kelompok'=>$data['sekertaris_kelompok'],
			'bendahara_kelompok'=>$data['bendahara_kelompok'],
			'alamat_kelompok'=>$data['alamat_kelompok'],
			'cp_kelompok'=>$data['cp_kelompok'],
		);
		$this->db->where('id_kelompok',$data['id_kelompok']);
		$this->db->update('kelompok', $up);
	}
	
	public function delete_kelompok($data)
	{
		$this->db->delete('kelompok',array('id_kelompok'=>$data['id_kelompok']));
	}

}
