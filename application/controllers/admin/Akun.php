<?php

class Akun extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
		$this->simple_login->cek_level(2);
	}

	public function index()
	{
		$data['akun']=$this->Makun->get_all();
		$this->template->set('header', 'Akun');
		$this->template->load('admin_layout', 'contents' , 'admin/akun/akun', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('level_akses', 'Sekertaris Perwakilan', 'required');

		if ($this->form_validation->run() == FALSE) 
		{			
			$data['akun']=$this->Makun->get_level();
			$this->template->load('admin_layout', 'contents' , 'admin/akun/create_akun',$data);
		} 
		else 
		{
			$data['username']=$_POST['username'];
			$data['password']=$_POST['password'];
			$data['level_akses']=$_POST['level_akses'];	
			$this->Makun->insert_akun($data);
			redirect('admin/Akun','refresh');
			
			
		}
	}

	public function update()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) 
		{			
			$data['id_akun']=$_GET['id_akun'];
			$this->template->load('admin_layout', 'contents' , 'admin/akun/edit_akun',$data);
		} 
		else 
		{
			$data['id_akun']=$_POST['id_akun'];
			$data['username']=$_POST['username'];
			$data['password']=$_POST['password'];
			$this->Makun->update_akun($data);
			redirect('admin/Akun','refresh');
			
			
		}
	}

	public function delete()
	{
		$data['id_akun']=$_GET['id_akun'];
		$this->Makun->delete_akun($data);
		redirect('admin/Akun','refresh');
	}

}
