<?php

class Mcabang extends CI_Model {
	
	public function get_all()
	{
		// $query = $this->db->get('cabang');
		$query=$this->db->select('*')
						->from('cabang')
						->join('perwakilan','cabang.id_pengurus = perwakilan.id_pengurus')
						->get();
		return $query;
	}

	public function select_one($data)
	{
		$query=$this->db->select('*')
						->where("id_cabang",$data)
						->get();
		return $query;
	}
	
	public function insert_cabang($data)
	{
		$up=array(
			'id_perwakilan'=>$data['id_perwakilan'],
			'nama_cabang'=>$data['nama_cabang'],
			'ketua_cabang'=>$data['ketua_cabang'],
			'sekertaris_cabang'=>$data['sekertaris_cabang'],
			'bendahara_cabang'=>$data['bendahara_cabang'],
			'alamat_cabang'=>$data['alamat_cabang'],
			'cp_cabang'=>$data['cp_cabang'],
		);
		$this->db->insert('cabang', $up);
	}
	
	public function update_cabang($data)
	{
		$up=array(
			'nama_cabang'=>$data['nama_cabang'],
			'ketua_cabang'=>$data['ketua_cabang'],
			'sekertaris_cabang'=>$data['sekertaris_cabang'],
			'bendahara_cabang'=>$data['bendahara_cabang'],
			'alamat_cabang'=>$data['alamat_cabang'],
			'cp_cabang'=>$data['cp_cabang'],
		);
		$this->db->where('id_cabang',$data['id_cabang']);
		$this->db->update('cabang', $up);
	}
	
	public function delete_cabang($data)
	{
		$this->db->delete('cabang',array('id_cabang'=>$data['id_cabang']));
	}

}
