<?php

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('CRUDModel', 'crud');
		$this->load->model('AdminModel', 'admin');
	}

	public function dashboard() {
		$data['total_penyakit'] = $this->admin->total_data('penyakit');
		$data['total_gejala'] = $this->admin->total_data('gejala');
		$data['total_pasien'] = $this->admin->total_data('pasien');
		$data['total_member'] = $this->admin->total_data('users', ['role_id' => 2]);
		$data['total_pakar'] = $this->admin->total_data('users', ['role_id' => 3]);

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates/footer');
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
		} else if($aksi == 'update') {
			$data = [
				'nama' => $this->input->post('nama'),
				'keterangan' => $this->input->post('keterangan')
			];

			$id = $this->input->post('id_gejala');

			if($this->crud->update($data, 'gejala', $id)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil merubah data gejala.</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal merubah data gejala.</div>');
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
		} else if($aksi == 'update') {
			$data = [
				'nama' => $this->input->post('nama'),
				'keterangan' => $this->input->post('keterangan'),
				'solusi' => $this->input->post('solusi')
			];

			$id = $this->input->post('id_penyakit');

			if($this->crud->update($data, 'penyakit', $id)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil merubah data penyakit.</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal merubah data penyakit.</div>');
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
		} else if($aksi == 'update') {
			$data = [
				'penyakit_id' => $this->input->post('penyakit_id'),
				'gejala_id' => $this->input->post('gejala_id'),
				'skor' => $this->input->post('skor')
			];

			$id = $this->input->post('id_cetainty');

			if($this->crud->update($data, 'certainty', $id)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil merubah data certainty.</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal merubah data certainty.</div>');
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

	public function pasien($aksi = "", $paramId = "") {
		if($aksi == "riwayat") {
			$custom = [
				'pasien_id' => $paramId
			];
			
			$data['pasien'] = $this->crud->get('pasien', $paramId);
			$data['riwayat'] = $this->crud->custom_get('riwayat', $custom);

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/pasien/riwayat', $data);
			$this->load->view('templates/footer');
		} else {
			$data['pasien'] = $this->crud->get('pasien');

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/pasien/index', $data);
			$this->load->view('templates/footer');
		}
	}

	public function akun($role, $aksi = '', $paramId = NULL) {
		if($aksi == "add" and $role == 'pakar') {
			$data = $this->input->post();
			$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
			$data['role_id'] = 3;
			$data['is_active'] = 1;

			if($this->crud->insert($data, 'users')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil registrasi</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal registrasi</div>');
			}
			
			redirect('admin/akun/pakar');
		} else if ($aksi == "update" and ($role == 'pakar' or $role == 'member')) {
			$id = $this->input->post('id');
			$data = [
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'email' => $this->input->post('email')
			];

			if($this->crud->update($data, 'users', $id)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil merubah data</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal merubah data</div>');
			}

			$redirectPage = ($role == "pakar") ? 'admin/akun/pakar' : 'admin/akun/member';

			redirect($redirectPage);
		} else if($aksi == "delete") {
			$data = [];
			$redirectPage = "";
			if($role == "pakar") {
				$data = [
					'id' => $paramId,
					'role_id' => 3
				];

				$redirectPage = 'admin/akun/pakar';
			} else {
				$data = [
					'id' => $paramId,
					'role_id' => 2
				];

				$redirectPage = 'admin/akun/member';
			}
			
			if($this->crud->custom_delete('users', $data)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
			}

			redirect($redirectPage);
		} else {
			$data = [];
			$page = "";

			if($role == "pakar") {
				$users = $this->admin->get_userdata('pakar');

				$data['user'] = $users;

				$page = "admin/akun/pakar/index";
			} elseif($role == "member") {
				$data['user'] = $this->admin->get_userdata('member');
				$page = "admin/akun/member/index";
			}

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view($page, $data);
			$this->load->view('templates/footer');
		}
	}

	public function laporan() {
		$data['pasien'] = $this->crud->get('pasien');

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/laporan/index', $data);
		$this->load->view('templates/footer');
	}

	public function cetak($target, $id = NULL) {
		$data = [];
		$page = "";

		switch($target) {
			case "pasien":
				$page = "admin/laporan/print-out/daftar-pasien";
				$data['laporan'] = $this->crud->get('pasien');
				break;
			case "gejala":
				$page = "admin/laporan/print-out/gejala";
				$data['laporan'] = $this->crud->get('gejala');
				break;
			case "penyakit":
				$page = "admin/laporan/print-out/penyakit";
				$data['laporan'] = $this->crud->get('penyakit');
				break;
			case "pakar":
				$page = "admin/laporan/print-out/pakar";
				// $data['laporan'] = $this->crud->get('users', ['role_id' => 3]);
				$data['laporan'] = $this->admin->get_userdata('pakar');
				break;
		}

		$this->load->view($page, $data);
	}

	public function cetak_rekam_medis() {
		$id = $this->input->post('id_pasien');

		$data['laporan'] = $this->crud->custom_get('riwayat', ['pasien_id' => $id]);
		$data['pasien'] = $this->crud->get('pasien', $id);

		$this->load->view('admin/laporan/print-out/rekam-medis', $data);
	}

}