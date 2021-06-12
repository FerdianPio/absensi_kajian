<?php

class Kelompok extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$data['kelompok']=$this->Madmin->get_kelompok();
		$this->template->set('header', 'Kelompok');
		$this->template->load('admin_layout', 'contents' , 'admin/kelompok/kelompok', $data);
	}
	
	public function create()
	{
		$this->form_validation->set_rules('nama_kelompok', 'Nama Kelompok', 'required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('ketua_kelompok', 'Ketua Kelompok', 'required');
		$this->form_validation->set_rules('sekertaris_kelompok', 'Sekertaris Kelompok', 'required');
		$this->form_validation->set_rules('bendahara_kelompok', 'Bendahara Kelompok', 'required');
		$this->form_validation->set_rules('alamat_kelompok', 'Alamat Kelompok', 'required');
		$this->form_validation->set_rules('cp_kelompok', 'CP Kelompok', 'required');
		
		if ($this->form_validation->run() == FALSE) 
		{			
			$data['cabang']=$this->Madmin->get_cabang();
			$this->template->load('admin_layout', 'contents' , 'admin/kelompok/create_kelompok',$data);
		} 
		else 
		{
			$data['id_cabang']=$_POST['id_cabang'];
			$data['nama_kelompok']=$_POST['nama_kelompok'];
			$data['ketua_kelompok']=$_POST['ketua_kelompok'];
			$data['sekertaris_kelompok']=$_POST['sekertaris_kelompok'];
			$data['bendahara_kelompok']=$_POST['bendahara_kelompok'];
			$data['alamat_kelompok']=$_POST['alamat_kelompok'];
			$data['cp_kelompok']=$_POST['cp_kelompok'];	
			$this->Mkelompok->insert_kelompok($data);
			redirect('admin/Kelompok','refresh');
		}
	}
	
	public function update()
	{
		$this->form_validation->set_rules('nama_kelompok', 'Nama Kelompok', 'required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('ketua_kelompok', 'Ketua Kelompok', 'required');
		$this->form_validation->set_rules('sekertaris_kelompok', 'Sekertaris Kelompok', 'required');
		$this->form_validation->set_rules('bendahara_kelompok', 'Bendahara Kelompok', 'required');
		$this->form_validation->set_rules('alamat_kelompok', 'Alamat Kelompok', 'required');
		$this->form_validation->set_rules('cp_kelompok', 'CP Kelompok', 'required');
		
		if ($this->form_validation->run() == FALSE) 
		{			
			$data['cabang']=$this->Madmin->get_cabang();
			$data['id_kelompok']=$_GET['id_kelompok'];
			$this->template->load('admin_layout', 'contents' , 'admin/kelompok/edit_kelompok',$data);
		} 
		else 
		{
			$data['id_cabang']=$_POST['id_cabang'];
			$data['id_kelompok']=$_POST['id_kelompok'];
			$data['nama_kelompok']=$_POST['nama_kelompok'];
			$data['ketua_kelompok']=$_POST['ketua_kelompok'];
			$data['sekertaris_kelompok']=$_POST['sekertaris_kelompok'];
			$data['bendahara_kelompok']=$_POST['bendahara_kelompok'];
			$data['alamat_kelompok']=$_POST['alamat_kelompok'];
			$data['cp_kelompok']=$_POST['cp_kelompok'];	
			$this->Mkelompok->update_kelompok($data);
			redirect('admin/Kelompok','refresh');
			
			
		}
	}

	public function delete()
	{
		$data['id_kelompok']=$_GET['id_kelompok'];
		$this->Mkelompok->delete_kelompok($data);
		redirect('admin/Kelompok','refresh');
	}

}
