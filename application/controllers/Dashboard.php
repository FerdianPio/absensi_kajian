<?php
class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

    public function index()
	{
		$data['perwakilan']=$this->Madmin->get_perwakilan();
		$data['cabang']=$this->Madmin->get_cabang();
		$data['kelompok']=$this->Madmin->get_kelompok();
		$data['gelombang']=$this->Madmin->get_gelombang();
		// $this->load->view('admin/dashboard',$data);
		$this->template->set('custom_css', '');
		$this->template->set('custom_js', '');
		$this->template->set('header', 'Dashboard');
		$this->template->load('admin_layout', 'contents' , 'admin/dashboard', $data);
	}
	
	public function create()
	{
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('admin/create_admin');
		} 
		else 
		{
			$data['nama']=$_POST['nama'];
			$data['tingkat']=$_POST['tingkat'];
			$data['jabatan']=$_POST['jabatan'];
			$this->Madmin->insert_entry($data);
			
		}
		
	}
}
