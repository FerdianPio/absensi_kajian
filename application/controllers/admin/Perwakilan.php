<?php

class Perwakilan extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
		$this->simple_login->cek_level(0);
	}

	public function index()
	{
		$data['perwakilan']=$this->Madmin->get_perwakilan();
		$this->template->set('header', 'Perwakilan');
		$this->template->load('admin_layout', 'contents' , 'admin/perwakilan/perwakilan', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('nama_perwakilan', 'Nama Perwakilan', 'required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('ketua_perwakilan', 'Ketua Perwakilan', 'required');
		$this->form_validation->set_rules('sekertaris_perwakilan', 'Sekertaris Perwakilan', 'required');
		$this->form_validation->set_rules('bendahara_perwakilan', 'Bendahara Perwakilan', 'required');
		$this->form_validation->set_rules('alamat_perwakilan', 'Alamat Perwakilan', 'required');
		$this->form_validation->set_rules('cp_perwakilan', 'CP Perwakilan', 'required');

		if ($this->form_validation->run() == FALSE) 
		{			
			$this->template->load('admin_layout', 'contents' , 'admin/perwakilan/create_perwakilan');
		} 
		else 
		{
			$data['nama_perwakilan']=$_POST['nama_perwakilan'];
			$data['ketua_perwakilan']=$_POST['ketua_perwakilan'];
			$data['sekertaris_perwakilan']=$_POST['sekertaris_perwakilan'];
			$data['bendahara_perwakilan']=$_POST['bendahara_perwakilan'];
			$data['alamat_perwakilan']=$_POST['alamat_perwakilan'];
			$data['cp_perwakilan']=$_POST['cp_perwakilan'];	
			$this->Mperwakilan->insert_perwakilan($data);
			redirect('admin/Perwakilan','refresh');
			
			
		}
	}

	public function update()
	{
		$this->form_validation->set_rules('nama_perwakilan', 'Nama Perwakilan', 'required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('ketua_perwakilan', 'Ketua Perwakilan', 'required');
		$this->form_validation->set_rules('sekertaris_perwakilan', 'Sekertaris Perwakilan', 'required');
		$this->form_validation->set_rules('bendahara_perwakilan', 'Bendahara Perwakilan', 'required');
		$this->form_validation->set_rules('alamat_perwakilan', 'Alamat Perwakilan', 'required');
		$this->form_validation->set_rules('cp_perwakilan', 'CP Perwakilan', 'required');

		if ($this->form_validation->run() == FALSE) 
		{			
			$data['id_perwakilan']=$_GET['id_perwakilan'];
			$this->template->load('admin_layout', 'contents' , 'admin/perwakilan/edit_perwakilan',$data);
		} 
		else 
		{
			$data['id_perwakilan']=$_POST['id_perwakilan'];
			$data['nama_perwakilan']=$_POST['nama_perwakilan'];
			$data['ketua_perwakilan']=$_POST['ketua_perwakilan'];
			$data['sekertaris_perwakilan']=$_POST['sekertaris_perwakilan'];
			$data['bendahara_perwakilan']=$_POST['bendahara_perwakilan'];
			$data['alamat_perwakilan']=$_POST['alamat_perwakilan'];
			$data['cp_perwakilan']=$_POST['cp_perwakilan'];	
			$this->Mperwakilan->update_perwakilan($data);
			redirect('admin/Perwakilan','refresh');
			
			
		}
	}

	public function delete()
	{
		$data['id_perwakilan']=$_GET['id_perwakilan'];
		$this->Mperwakilan->delete_perwakilan($data);
		redirect('admin/Perwakilan','refresh');
	}

}
