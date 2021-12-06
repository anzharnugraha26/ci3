<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Mahasiswa');
	}

	public function index()
	{
		$m = $this->M_Mahasiswa->getDataMhs();
		// echo "</pre>";
		// print_r($m);
		$data = array('data_mhs' => $m);
		// echo "</pre>";
		$this->load->view('home', $data);
	}

	public function formInput()
	{
		$this->load->view('form_input');
	}

	public function formEdit($id)
	{
		$record = $this->M_Mahasiswa->getData($id);
		$data = array('data_mhs' => $record);
		$this->load->view('form_edit', $data);
	}

	public function tambahData()
	{
		// echo "ini adalah" ;
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');
		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'jurusan' => $jurusan
		);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->M_Mahasiswa->insertData($data);
		redirect(base_url('Welcome'));
	}

	public function editData()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');
		$dataUpdate = array(
			'nama' => $nama,
			'jurusan' => $jurusan
		);
		$this->M_Mahasiswa->editData($dataUpdate, $id);
		redirect(base_url('Welcome'));
	}

	public function delete($id){
		$this->M_Mahasiswa->deleteMhs($id);
		redirect(base_url('Welcome'));
	}
}
