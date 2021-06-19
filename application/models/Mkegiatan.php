<?php

class Mkegiatan extends CI_Model {
	
	public function get_kegiatan()
	{
		$query=$this->db->get('kegiatan');
		return $query;	
	}

	public function get_gelombang()
	{
		$query=$this->db->select('*')
						->from('gelombang')
						->join('kegiatan','gelombang.id_kegiatan=kegiatan.id_kegiatan')
						->get();
						return $query;
					}
					
					
	public function get_one($data)
	{
		$query=$this->db->select('*')
						->from('gelombang')
						->join('kegiatan','gelombang.id_kegiatan=kegiatan.id_kegiatan')
						->where("id_gelombang",$data)
						->get();
		return $query;
	}
	
	function get_gender()
	{
		$type = $this->db->query( "SHOW COLUMNS FROM gelombang WHERE Field = 'gender'" )->row( 0 )->Type;
		preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
		$enum = explode("','", $matches[1]);
		return $enum;
	}

	public function insert_kegiatan($data)
	{
		$up=array(
			'judul_kegiatan'=>$data['judul_kegiatan']
		);
		$this->db->insert('kegiatan', $up);
	}

	public function insert_gelombang($data)
	{
		$up=array(
			'id_kegiatan'=>$data['id_kegiatan'],
			'ketua'=>$data['ketua'],
			'sekertaris'=>$data['sekertaris'],
			'bendahara'=>$data['bendahara'],
			'tanggal_kegiatan'=>$data['tanggal_kegiatan'],
			'waktu_mulai'=>$data['waktu_mulai'],
			'waktu_selesai'=>$data['waktu_selesai'],
			'gender'=>$data['gender'],
			'link'=>$data['link'],
		);
		$this->db->insert('gelombang', $up);
	}
	
	public function update_kegiatan($data)
	{
		$up=array(
			'judul_kegiatan'=>$data['judul_kegiatan'],
		);
		$this->db->where('id_kegiatan',$data['id_kegiatan']);
		$this->db->update('kegiatan', $up);
	}

	public function update_gelombang($data)
	{
		$up=array(
			'ketua'=>$data['ketua'],
			'sekertaris'=>$data['sekertaris'],
			'bendahara'=>$data['bendahara'],
			'tanggal_kegiatan'=>$data['tanggal_kegiatan'],
			'waktu_mulai'=>$data['waktu_mulai'],
			'waktu_selesai'=>$data['waktu_selesai'],
			'gender'=>$data['gender'],
			'link'=>$data['link'],
		);
		$this->db->where('id_gelombang',intval($data['id_gelombang']));  
		$this->db->update('gelombang', $up);
		print_r($this->db->last_query());
	}
	
	public function delete_kegiatan($data)
	{
		$this->db->delete('kegiatan',array('id_kegiatan'=>$data['id_kegiatan']));
	}

	public function delete_gelombang($data)
	{
		$this->db->delete('gelombang',array('id_gelombang'=>$data['id_gelombang']));
	}

}
