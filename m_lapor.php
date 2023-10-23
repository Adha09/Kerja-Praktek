<?php
class M_lapor extends CI_Model{
	
	function __construct()
    {
        $this->load->database();
    }

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result   = $this->db->where('username',$username)
                            ->where('password',$password)
                            ->limit(1)
                            ->get('admin');    

        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function simpan()
    {
        $this->kode    = $_POST['kode'];
        $this->nama  = $_POST['nama'];
        $this->nama_opd  = $_POST['nama_opd'];
        $this->isi  = $_POST['isi'];
        $this->tgl  = $_POST['tgl'];
        $this->gambar  = $_POST['gambar'];
        $this->db->insert('laporan', $this);
    }

	function get_opd(){
        $query = $this->db->query('SELECT * FROM opd');
        return $query->result();
    }

	function insert($data, $table){
        $this->db->insert($table,$data);
    }

    function getlap(){
        $query = $this->db->query('SELECT * FROM laporan');
        return $query->result();
    }

    function getopd(){
        $query = $this->db->query('SELECT * FROM opd');
        return $query->result();
    }

    function gets(){
        $query = $this->db->query('SELECT * FROM status_lap');
        return $query->result();
    }
 
    function getid(){
        $query = $this->db->query('SELECT * FROM laporan ORDER BY id_lap DESC LIMIT 1');
        return $query->result();     
    }

    public $kode;

    public function cekkode()
    {
        $query = $this->db->query("SELECT MAX(kode) as kode from laporan");
        $hasil = $query->row();
        return $hasil->kode;
    }

    public function cari($keyword){
        $this->db->where('kode', $keyword);
        $query = $this->db->get('laporan'); // Ganti 'nama_tabel' dengan nama tabel yang sesuai
        return $query->result();
	}

    public function ambil_data($keyword=null){
		$this->db->select('*');
        $this->db->from('laporan');
		if(!empty($keyword)){
			$this->db->like('nama',$keyword);
		}
		return $this->db->get()->result_array();
	}

    
    public function insert_status($data){
        $this->db->insert('laporan',$data);
    }

    public function inputData()
    {
        $data = [
            "status" => $this->input->post('status')
        ];
        $this->db->insert('laporan', $data);
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);   
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table,$where);  
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);   
    }
    
    public function getData() {
        $query = $this->db->get('laporan');
        return $query->result();
    }

    public function updateStatus($id_lap, $status) {
        $data = array('status' => $status);
        $this->db->where('id_lap', $id_lap);
        $this->db->update('laporan', $data);
    }

    public function hapus($where, $table)
    {
         $this->db->where($where);
         $this->db->delete($table);
    }

}
?>