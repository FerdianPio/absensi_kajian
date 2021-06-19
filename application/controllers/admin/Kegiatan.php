<?php

class Kegiatan extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$data['kegiatan']=$this->Mkegiatan->get_kegiatan();
		$this->template->set('header', 'Kegiatan');
		$this->template->load('admin_layout', 'contents' , 'admin/kegiatan/kegiatan', $data);
	}
	
	public function gelombang()
	{
		$data['kegiatan']=$this->Mkegiatan->get_gelombang();
		$this->template->set('header', 'Kegiatan');
		$this->template->load('admin_layout', 'contents' , 'admin/kegiatan/gelombang', $data);

	}

	public function create_kegiatan()
	{
		$this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'required|min_length[5]|max_length[50]');
		
		if ($this->form_validation->run() == FALSE) 
		{			
			$this->template->load('admin_layout', 'contents' , 'admin/kegiatan/create_kegiatan');
		} 
		else 
		{
			$data['judul_kegiatan']=$_POST['judul_kegiatan'];	
			// $data['jumlah_gelombang']=$_POST['jumlah_gelombang'];	
			$this->Mkegiatan->insert_kegiatan($data);
			redirect('admin/Kegiatan','refresh');

		}
	}

	public function create_gelombang()
	{
		$this->form_validation->set_rules('ketua', 'Ketua Kegiatan', 'required');
		$this->form_validation->set_rules('sekertaris', 'Sekertaris Kegiatan', 'required');
		$this->form_validation->set_rules('bendahara', 'Bendahara Kegiatan', 'required');
		$this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal', 'required');
		$this->form_validation->set_rules('waktu_mulai', 'Waktu Mulai', 'required');
		
		if ($this->form_validation->run() == FALSE) 
		{	
			$data['kegiatan']=$this->Mkegiatan->get_kegiatan();
			$data['gender']=$this->Mkegiatan->get_gender();	
			$this->template->load('admin_layout', 'contents' , 'admin/kegiatan/create_gelombang',$data);
		} 
		else 
		{
			$data['id_kegiatan']=$_POST['id_kegiatan'];
			$data['ketua']=$_POST['ketua'];
			$data['sekertaris']=$_POST['sekertaris'];
			$data['bendahara']=$_POST['bendahara'];
			$data['tanggal_kegiatan']=$_POST['tanggal_kegiatan'];
			$data['waktu_mulai']=$_POST['waktu_mulai'];
			$data['waktu_selesai']=$_POST['waktu_selesai'];
			$data['gender']=$_POST['gender'];
			$data['link']=$_POST['link'];
			$this->Mkegiatan->insert_gelombang($data);
			redirect('admin/Kegiatan/gelombang','refresh');
			
		}
	}
	
	public function update_kegiatan()
	{
		$this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'required');
		
		if ($this->form_validation->run() == FALSE) 
		{			
			$data['id_kegiatan']=$_GET['id_kegiatan'];
			$this->template->load('admin_layout', 'contents' , 'admin/Kegiatan/edit_kegiatan',$data);
		} 
		else 
		{
			$data['judul_kegiatan']=$_POST['judul_kegiatan'];
			$data['id_kegiatan']=$_GET['id_kegiatan'];
			$this->Mkegiatan->update_kegiatan($data);
			redirect('admin/Kegiatan','refresh');	
		}
	}
	
	public function update_gelombang()
	{
		$this->form_validation->set_rules('ketua', 'Ketua Kegiatan', 'required');
		$this->form_validation->set_rules('sekertaris', 'Sekertaris Kegiatan', 'required');
		$this->form_validation->set_rules('bendahara', 'Bendahara Kegiatan', 'required');
		$this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal', 'required');
		$this->form_validation->set_rules('waktu_mulai', 'Waktu Mulai', 'required');
		
		if ($this->form_validation->run() == FALSE) 
		{			
			$data['id_gelombang']=$_GET['id_gelombang'];
			$tmp=$this->Mkegiatan->get_one($data['id_gelombang']);
			$data['id_kegiatan']=$tmp;
			$data['gender']=$this->Mkegiatan->get_gender();	
			$this->template->load('admin_layout', 'contents' , 'admin/Kegiatan/edit_gelombang',$data);
		} 
		else 
		{
			$data['id_gelombang']=$_POST['id_gelombang'];
			$data['id_kegiatan']=$_POST['id_kegiatan'];
			$data['ketua']=$_POST['ketua'];
			$data['sekertaris']=$_POST['sekertaris'];
			$data['bendahara']=$_POST['bendahara'];
			$data['tanggal_kegiatan']=$_POST['tanggal_kegiatan'];
			$data['waktu_mulai']=$_POST['waktu_mulai'];
			$data['waktu_selesai']=$_POST['waktu_selesai'];
			$data['gender']=$_POST['gender'];
			$data['link']=$_POST['link'];
			$this->Mkegiatan->update_gelombang($data);
			redirect('admin/Kegiatan/gelombang','refresh');	
		}
	}

	public function delete_kegiatan()
	{
		$data['id_kegiatan']=$_GET['id_kegiatan'];
		$this->Mkegiatan->delete_kegiatan($data);
		redirect('admin/Kegiatan','refresh');
	}

	public function delete_gelombang()
	{
		$data['id_gelombang']=$_GET['id_gelombang'];
		$this->Mkegiatan->delete_gelombang($data);
		redirect('admin/Kegiatan/gelombang','refresh');
	}

}
