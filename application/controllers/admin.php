<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct(){
		
		parent ::__construct();

		//load model
		$this->load->model('M_admin'); 

	}

	public function index()
	{
		$data = array(

			'title' 	=> 'Data Admin',
			'data_admin'	=> $this->M_admin->get_all(),

		);

		$this->load->view('data_admin', $data);
	}

	public function tambah()
	{
		$data = array(

			'title' 	=> 'Tambah Data Admin'

		);

		$this->load->view('tambah_admin', $data);
	}

	public function simpan()
	{
		$data = array(

			'no_induk' 			=> $this->input->post("no_induk"),
			'nama_admin' 		=> $this->input->post("nama_admin"),
			'tanggal_terbit' 	=> $this->input->post("tanggal_terbit"),
			'pengarang' 		=> $this->input->post("pengarang"),
			
		);

		$this->M_admin->simpan($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');

		//redirect
		redirect('admin/');

	}

	public function edit($id_admin)
	{
		$id_admin = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Edit Data Admin',
			'data_admin' => $this->M_admin->edit($id_admin)

		);

		$this->load->view('edit_admin', $data);
	}

	public function update()
	{
		$id['id_admin'] = $this->input->post("id_admin");
		$data = array(

			'no_induk' 			=> $this->input->post("no_induk"),
			'nama_admin' 		=> $this->input->post("nama_admin"),
			'tanggal_terbit' 	=> $this->input->post("tanggal_terbit"),
			'pengarang' 		=> $this->input->post("pengarang"),
			
		);

		$this->M_admin->update($data, $id);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
			                                    </div>');

		//redirect
		redirect('admin/');

	}

	public function hapus($id_admin)
	{
		$id['id_admin'] = $this->uri->segment(3);
		
		$this->M_admin->hapus($id);

		//redirect
		redirect('admin/');

	}

}
