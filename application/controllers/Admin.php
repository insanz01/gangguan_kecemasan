<?php

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('CRUDModel', 'crud');
		$this->load->model('AdminModel', 'admin');
	}

	public function gejala($aksi = NULL, $id = NULL) {
		if($aksi == 'add') {
			$data = $this->input->post();
			$data['id'] = NULL;

			if($this->crud->insert($data, 'gejala')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan data gejala.</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan data gejala.</div>');
			}

			redirect('Admin/gejala');
		} else if($aksi == 'delete') {
			if($id == NULL) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal melakukan aksi</div>');
			}

			if($this->crud->delete('gejala', $id)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
			}

			redirect('Admin/gejala');
		} else {
			$data['gejala'] = $this->crud->get('gejala');

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/gejala/index', $data);
			$this->load->view('templates/footer');
		}
	}

	public function penyakit($aksi = NULL, $id = NULL) {
		if($aksi == 'add') {
			$data = $this->input->post();
			$data['id'] = NULL;

			if($this->crud->insert($data, 'penyakit')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan data penyakit.</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan data penyakit.</div>');
			}

			redirect('Admin/penyakit');
		} else if($aksi == 'delete') {
			if($id == NULL) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal melakukan aksi</div>');
			}

			if($this->crud->delete('penyakit', $id)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
			}

			redirect('Admin/penyakit');
		} else {
			$data['penyakit'] = $this->crud->get('penyakit');

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/penyakit/index', $data);
			$this->load->view('templates/footer');
		}
	}

	public function certainty($aksi = NULL, $id = NULL) {
		if($aksi == 'add') {
			$data = $this->input->post();
			$data['id'] = NULL;
			
			if($this->crud->insert($data, 'certainty')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan data certainty.</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan data certainty.</div>');
			}

			redirect('Admin/certainty');
		} else if($aksi == 'delete') {
			if($id == NULL) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal melakukan aksi</div>');
			}

			if($this->crud->delete('certainty', $id)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
			}

			redirect('Admin/certainty');
		} else {
			$data['certainty'] = $this->admin->certainty_data();
			$data['gejala'] = $this->crud->get('gejala');
			$data['penyakit'] = $this->crud->get('penyakit');

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/certainty/index', $data);
			$this->load->view('templates/footer');
		}
	}

	public function artikel($aksi = NULL) {
		if($aksi == 'add') {
			$data = [
				'id' => NULL,
				'judul' => $this->input->post('judul'),
				'konten' => $this->input->post('konten'),
				'gambar' => ''
			];

			$config['upload_path'] = './images/artikel/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 1024 * 8;
			
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('gambar')) {
				$error = [
					'error' => $this->upload->display_errors()
				];

				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">'.$error['error'].'.</div>');

				if($data['gambar'] == '') {
					$data['gambar'] = 'default.png';
				}

			} else {
				$uploadImage = $this->upload->data();
				$this->resizeImage($uploadImage['file_name']);

				$data['gambar'] = $uploadImage['file_name'];
			}

			if($this->crud->insert($data, 'artikel')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan artikel</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan artikel</div>');
			}

			redirect('Admin/artikel');
		} else {
			$data['artikel'] = $this->crud->get('artikel');

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/artikel/index', $data);
			$this->load->view('templates/footer');
		}
	}

	// helper function for App class
	private function resizeImage($filename) {
		$source_path = $_SERVER['DOCUMENT_ROOT'] . '/images/artikel/' . $filename;
		$target_path = $_SERVER['DOCUMENT_ROOT'] . '/images/artikel/';
		$config_manip = [
			'image_library' => 'gd2',
			'source_image' => $source_path,
			'new_image' => $target_path,
			'maintain_ratio' => TRUE,
			'width' => 500
		];

		$this->load->library('image_lib', $config_manip);
		if(!$this->image_lib->resize()) {
			$error = [
				'error' => $this->image_lib->display_errors()
			];
		}

		$this->image_lib->clear();
	}
}