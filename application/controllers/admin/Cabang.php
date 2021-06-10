<?php

class Cabang extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$data['cabang']=$this->Madmin->get_cabang();
		$this->template->set('header', 'Cabang');
		$this->template->load('admin_layout', 'contents' , 'admin/cabang/cabang', $data);
	}
	
	public function create()
	{
		$this->form_validation->set_rules('nama_cabang', 'Nama Cabang', 'required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('ketua_cabang', 'Ketua Cabang', 'required');
		$this->form_validation->set_rules('sekertaris_cabang', 'Sekertaris Cabang', 'required');
		$this->form_validation->set_rules('bendahara_cabang', 'Bendahara Cabang', 'required');
		$this->form_validation->set_rules('alamat_cabang', 'Alamat Cabang', 'required');
		$this->form_validation->set_rules('cp_cabang', 'CP Cabang', 'required');
		
		if ($this->form_validation->run() == FALSE) 
		{			
			$data['perwakilan']=$this->Madmin->get_perwakilan();
			$this->template->load('admin_layout', 'contents' , 'admin/cabang/create_cabang',$data);
		} 
		else 
		{
			$data['id_perwakilan']=$_POST['id_perwakilan'];
			$data['nama_cabang']=$_POST['nama_cabang'];
			$data['ketua_cabang']=$_POST['ketua_cabang'];
			$data['sekertaris_cabang']=$_POST['sekertaris_cabang'];
			$data['bendahara_cabang']=$_POST['bendahara_cabang'];
			$data['alamat_cabang']=$_POST['alamat_cabang'];
			$data['cp_cabang']=$_POST['cp_cabang'];	
			$this->Mcabang->insert_cabang($data);
			redirect('admin/Cabang','refresh');
		}
	}
	
	public function update()
	{
		$this->form_validation->set_rules('nama_cabang', 'Nama Cabang', 'required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('ketua_cabang', 'Ketua Cabang', 'required');
		$this->form_validation->set_rules('sekertaris_cabang', 'Sekertaris Cabang', 'required');
		$this->form_validation->set_rules('bendahara_cabang', 'Bendahara Cabang', 'required');
		$this->form_validation->set_rules('alamat_cabang', 'Alamat Cabang', 'required');
		$this->form_validation->set_rules('cp_cabang', 'CP Cabang', 'required');
		
		if ($this->form_validation->run() == FALSE) 
		{			
			$data['perwakilan']=$this->Madmin->get_perwakilan();
			$data['id_cabang']=$_GET['id_cabang'];
			$this->template->load('admin_layout', 'contents' , 'admin/cabang/edit_cabang',$data);
		} 
		else 
		{
			$data['id_perwakilan']=$_POST['id_perwakilan'];
			$data['id_cabang']=$_POST['id_cabang'];
			$data['nama_cabang']=$_POST['nama_cabang'];
			$data['ketua_cabang']=$_POST['ketua_cabang'];
			$data['sekertaris_cabang']=$_POST['sekertaris_cabang'];
			$data['bendahara_cabang']=$_POST['bendahara_cabang'];
			$data['alamat_cabang']=$_POST['alamat_cabang'];
			$data['cp_cabang']=$_POST['cp_cabang'];	
			$this->Mcabang->update_cabang($data);
			redirect('admin/Cabang','refresh');
			
			
		}
	}

	public function delete()
	{
		$data['id_cabang']=$_GET['id_cabang'];
		$this->Mcabang->delete_cabang($data);
		redirect('admin/Cabang','refresh');
	}

}
