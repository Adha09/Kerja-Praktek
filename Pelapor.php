<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelapor extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_lapor');
        $this->load->helper('url');
        $this->load->library('form_validation', 'session');
    }

	public function index(){		 
		$this->load->view('pelapor/beranda');
	}

	public function pengaduan(){
		$dariDB = $this->m_lapor->cekkode();
        // contoh JRD0004, angka 21 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 21, 5);
        $kodelap = $nourut +1;
        $data = array('kode' => $kodelap);

		$data['opd']=$this->m_lapor->get_opd();
		$this->load->view('pelapor/pengaduan',$data);
	}

	public function tambah()
	{
		$id_lap = $this->input->post('id_lap');
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$notelp = $this->input->post('notelp');
		$nama_opd = $this->input->post('nama_opd');
		$isi = $this->input->post('isi');
		$tgl = $this->input->post('tgl');
		$gambar= $_FILES['gambar'];
			if ($gambar='') {
			} else {
				$config['upload_path'] = './assets/images/';
				$config['allowed_types'] = 'jpg|png|gif|webp|jpeg|PNG|JPG';

				$this->load->library('upload',$config);
				if (!$this->upload->do_upload('gambar')) {
					echo "Upload Gagal";
				} else {
					$gambar = $this->upload->data('file_name');
				}
			}

		$status = $this->input->post('status');
			
			$data = array(

				'id_lap' => $id_lap,			 
				'kode' => $kode,			 
				'nama' => $nama,
				'notelp' => $notelp,
				'nama_opd' => $nama_opd,
				'isi' => $isi,
				'tgl' => $tgl,
				'gambar' => $gambar,
				'status' => $status
			);
	
		$this->m_lapor->insert($data, 'laporan');
		redirect('pelapor/pengaduan', $data);
	}


	public function datalap()
	{
		$keyword = $this->input->get('keyword');

		$data ['laporan']= $this->m_lapor->ambil_data($keyword);
		
		$this->load->view('pelapor/datalap',$data);
	}

	public function cari()
	{
		$this->load->model('m_lapor');
		$keyword = $this->input->get('keyword');
		$data = $this->m_lapor->ambil_data($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);

		$this->load->view('pelapor/datalap',$data);
	}

	public function kode()
	{
		$data['laporan']=$this->m_lapor->getkode();	 
		$this->load->view('pelapor/beranda', $data);
	}

	public function status()
	{
		$keyword = $this->input->get('keyword');
		$gambar_selesai = $this->input->post('gambar_selesai');
		$data['laporan']=$this->m_lapor->cari($keyword);
		$this->load->view('pelapor/status',$data);
	}
	
	









}
?>
