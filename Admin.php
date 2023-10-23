<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_lapor');
        $this->load->helper('url');
        $this->load->library('form_validation', 'session');
    }

	public function index()
	{
		$this->load->view('v_login');
	}

	public function login()
	{ 
		$this->form_validation->set_rules('username','username','required|trim');
		$this->form_validation->set_rules('password','password','required|trim');
		if ($this->form_validation->run() == FALSE){

			$this->load->view('v_login');

		}else{

			$auth = $this->m_lapor->cek_login();
			
			if($auth == FALSE){
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				username atau kata sandi Anda salah!
			  </div>');
			  redirect('admin/login');
			
			}else{
				$this->session->set_userdata('username', $auth->username);
				redirect('admin/beranda');												
			}
		}
		
	}

	public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');

        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            Anda Sudah Keluar</div>');
            
            redirect('admin');
    }

	public function beranda()
	{	
		$data['laporan']=$this->m_lapor->getid();	 
		$this->load->view('admin/beranda', $data);	 
	}

	public function data()
	{
		$data['status_lap'] = $this->m_lapor->getdata();
		$data['laporan']=$this->m_lapor->getlap(); 
		$this->load->view('admin/lap',$data);		 
	}

	public function opd()
	{
		$data['opd']=$this->m_lapor->getopd();
		$this->load->view('admin/opd',$data);		 
	}

    public function changeStatus($id_lap, $status) {
        $this->m_lapor->updateStatus($id_lap, $status); // Update status di database
        redirect('admin/data');
    }

	public function upload()
	{
		$id_lap = $this->input->post('id_lap');
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$notelp = $this->input->post('notelp');
		$nama_opd = $this->input->post('nama_opd');
		$isi = $this->input->post('isi');
		$tgl = $this->input->post('tgl');
		$gambar= $this->input->post('gambar');
		$status = $this->input->post('status');

		$gambar_selesai= $_FILES['gambar_selesai'];
		if ($gambar_selesai='') {
		} else {
			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'jpg|png|gif|webp|jpeg|PNG|JPG';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('gambar_selesai')) {
				echo "Upload Gagal";
			} else {
				$gambar_selesai = $this->upload->data('file_name');
			}
		}
		
		

        $data = array(
			'id_lap' => $id_lap,			 
			'kode' => $kode,			 
			'nama' => $nama,
			'notelp' => $notelp,
			'nama_opd' => $nama_opd,
			'isi' => $isi,
			'tgl' => $tgl,
			'gambar' => $gambar,
			'status' => $status,
            'gambar_selesai' => $gambar_selesai
        );
        
        $this->db->update('laporan', $data, ['id_lap' => $id_lap]);
        redirect('Admin/data');
         
	}

	// public function cetak() {
	// 	$data['laporan']=$this->m_lapor->getlap("laporan");
	// 	$this->load->view('admin/cetak',$data);
	// }

	// public function hapus($id_opd)
    // {
    //     $where = array('id_opd' => $id_opd);
    //     $this->m_lapor->hapus($where, 'opd');
    //     redirect('Admin/opd');
    // }

    // public function edit($id_opd)
    // {
    //     $data['opd'] = $this->m_lapor->getopd("opd");
    //     $this->load->view('admin/edit', $data);
    // }

	// public function tambah(){
	// 	$this->load->view('admin/tambah');
	// }

	

}
