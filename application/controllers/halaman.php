<?php 
 
class Halaman extends CI_Controller{
 
	function __construct(){
		parent::__construct();	
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$data['labimk'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$jk = $this->input->post('jk');
		$alamat = $this->input->post('alamat');
 
		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'jk' => $jk,
			'alamat' => $alamat,
			);
		$this->m_data->input_data($data,'labimk');
		redirect('halaman/index');
	}
	function hapus($nim){
		$where = array('nim' => $nim);
		$this->m_data->hapus_data($where,'labimk');
		redirect('halaman/index');
	}
	function edit($nim){
		$where = array('nim' => $nim);
		$data['labimk'] = $this->m_data->edit_data($where,'labimk')->result();
		$this->load->view('v_edit',$data);
	}
	function update(){
	
	$nama = $this->input->post('nama');
	$nim = $this->input->post('nim');
	$jk = $this->input->post('jk');
	$alamat = $this->input->post('alamat');

	$data = array(
		'nama' => $nama,
		'nim' => $nim,
		'jk' => $jk,
		'alamat' => $alamat,
	);

	$where = array(
		'nim' => $nim
	);

	$this->m_data->update_data($where,$data,'labimk');
	redirect('halaman/index');
}
}