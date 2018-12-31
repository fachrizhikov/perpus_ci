<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_Model');
	}
		public function index()
	{
		$data = 
		[
			'title' =>'Kategori|' ,
			'sub_title' => 'Daftar Kategori' ,
			'content' => 'kategori/index' ,
			'show' => $this->Kategori_Model->index()->result()
		];
		$this->load->view('template/my_template', $data);
	}

	public function add()
	{
		$data = 
		[
			'title' =>'kategori' ,
			'sub_title' => 'Tambah kategori' ,
			'content' => 'kategori/add',
			'show_kategori' => $this->Kategori_Model->index()->result()
		];
		$this->load->view('template/my_template', $data);
	}

	public function create()
	{
		$Nama_Kategori = $this->input->post('nama_kategori');

		$data = array(
			'nama_kategori' => $Nama_Kategori,
			'id_kategori' => '',

		);

		$create = $this->Kategori_Model->create($data);
		if($create){
			$this->session->set_flashdata('pesan_create', true);
			redirect('kategori');
		}else{
			$this->session->set_flashdata('pesan_create', false);
			redirect('kategori');
		}
	}

		public function edit($id)
		{

		$data = 
		[
			'title' =>'Kategori' ,
			'sub_title' => 'Edit Kategori' ,
			'content' => 'kategori/edit',
			'show' => $this->Kategori_Model->edit($id)->row(),
			'show_kategori' => $this->Kategori_Model->edit($id)->result()
		];
		$this->load->view('template/my_template', $data);
	}

	public function update()
	{
		$nama_kategori = $this->input->post('nama_kategori');
		$id_kategori = $this->input->post('id_kategori');

		$data = array(
			'nama_kategori' => $nama_kategori,
			'id_kategori' => $id_kategori,

		);

		$update = $this->Kategori_Model->update($data, $id_kategori);
		if($update){
			$this->session->set_flashdata('pesan_create', true);
			redirect('kategori');
		}else{
			$this->session->set_flashdata('pesan_create', false);
			redirect('kategori');
		}

	}

		public function delete($id)
		{
		$delete = $this->Kategori_Model->delete($id);

		if($delete){
			$this->session->set_flashdata('pesan_hapus', true);
			redirect('kategori');
		}else{
			$this->session->set_flashdata('pesan_hapus', false);
			redirect('kategori');

		}
	}
}