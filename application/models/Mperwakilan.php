<?php

class Mperwakilan extends CI_Model {
	
	public function get_all()
	{
		$query = $this->db->get('perwakilan');
		return $query;
	}

	public function select_one($data)
	{
		$query=$this->db->select('*')
						->where("id_perwakilan",$data)
						->get();
		return $query;
	}
	
	public function insert_perwakilan($data)
	{
		$up=array(
			'nama_perwakilan'=>$data['nama_perwakilan'],
			'ketua_perwakilan'=>$data['ketua_perwakilan'],
			'sekertaris_perwakilan'=>$data['sekertaris_perwakilan'],
			'bendahara_perwakilan'=>$data['bendahara_perwakilan'],
			'alamat_perwakilan'=>$data['alamat_perwakilan'],
			'cp_perwakilan'=>$data['cp_perwakilan'],
		);
		$this->db->insert('perwakilan', $up);
	}
	
	public function update_perwakilan($data)
	{
		$up=array(
			'nama_perwakilan'=>$data['nama_perwakilan'],
			'ketua_perwakilan'=>$data['ketua_perwakilan'],
			'sekertaris_perwakilan'=>$data['sekertaris_perwakilan'],
			'bendahara_perwakilan'=>$data['bendahara_perwakilan'],
			'alamat_perwakilan'=>$data['alamat_perwakilan'],
			'cp_perwakilan'=>$data['cp_perwakilan'],
		);
		$this->db->where('id_perwakilan',$data['id_perwakilan']);
		$this->db->update('perwakilan', $up);
	}
	
	public function delete_perwakilan($data)
	{
		$this->db->delete('perwakilan',array('id_perwakilan'=>$data['id_perwakilan']));
	}

}
