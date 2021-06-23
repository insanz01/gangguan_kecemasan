<?php

class App extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('CRUDModel', 'crud');
		$this->load->model('AuthModel', 'auth');
		$this->load->model('AdminModel', 'admin');
	}

	// halaman dashboard
	public function index() {
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('app/dashboard');
		$this->load->view('templates/footer');
	}

	// member area
	public function register_member () {

		$this->form_validation->set_rules('NIK', 'NIK', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
		$this->form_validation->set_rules('agama', 'agama', 'required');
		$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'required');


		if($this->form_validation->run() == FALSE) {

			$id_terakhir = $this->crud->get_last('members');

			if($id_terakhir) {
				$data['ID'] = $id_terakhir['ID'] + 1;
			} else {
				$data['ID'] = 1;
			}

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('app/member/registrasi', $data);
			$this->load->view('templates/footer');
		} else {
			$data = $this->input->post();

			$data['created_at'] = date('Y-m-d H:i:s');
			$data['updated_at'] = date('Y-m-d H:i:s');

			if($this->crud->insert($data, 'members')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>');
			}

			redirect('app/members');
		}

	}

	public function users ($aksi = NULL, $id = NULL) {

		if($aksi == 'add') {
			$data = $this->input->post();
			$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

			if($this->crud->insert($data, 'users')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disimpan</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal disimpan</div>');
			}

			redirect('App/users');

		} else if ($aksi == 'aktivasi') {
			if($this->crud->activation($id)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Status akun berhasil diubah</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Status akun gagal diubah</div>');
			}

			redirect('App/users');
		} else {
			$data['users'] = $this->crud->get('users');

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('app/member/users', $data);
			$this->load->view('templates/footer');
		}

	}

	public function members ($aksi = NULL, $id = NULL) {
		if($aksi == "delete") {

			$id = $this->input->post('id');
			
			if($this->crud->delete('members', $id)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Member berhasil menghapus.</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Member gagal menghapus.</div>');
			}

			redirect('App/members');

		} else if($aksi == "edit") {

		} else {
			$data['members'] = $this->crud->get('members');

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('app/member/members', $data);
			$this->load->view('templates/footer');
		}
	}

	public function login() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('app/akun/login');
			$this->load->view('templates/footer');
		} else {

			$data = $this->input->post();

			if($this->auth->login($data)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Login Berhasil</div>');

				redirect('app/index');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Login Gagal</div>');

				redirect('app/login');
			}
		}
	}

	public function register() {
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('app/akun/register');
		$this->load->view('templates/footer');
	}

	public function konsultasi($page = 1) {
		$url_page = "app/konsultasi/index";

		$data = [];

		switch($page) {
			case 1:
				$url_page = "app/konsultasi/index";
			break;
			case 2:
				$url_page = "app/konsultasi/pasien";
			break;
			case 3:
				$user_data = [
					'sess_pasien_nama' => $this->input->post('nama'),
					'sess_pasien_umur' => $this->input->post('umur'),
					'sess_pasien_jenis_kelamin' => $this->input->post('jenis_kelamin')
				];

				$this->session->set_userdata($user_data);
				$data['pertanyaan'] = $this->crud->get_pertanyaan();

				$url_page = "app/konsultasi/gejala";
			break;
			case 4:
				$jawaban = [];
				$get_hasil = $this->input->post();
				$past_kategori = [];
				$inserted_kategori = []; // kategori penyakit

				foreach($get_hasil as $kunci => $dt) {

					$temp = explode('-', $kunci);
					$id = (int) $temp[1];
					$skor = $temp[2]; // nilai cf pakar
					$penyakit_id = (int) $temp[3];
					$skor = (float) str_replace('_', '.', $skor);
					$bobot = (float) $dt;
					if($bobot != 0)
						$bobot = (float) $bobot / 5;

					if(!in_array($penyakit_id, $inserted_kategori)) {
						$kombinasi = $skor * $bobot;

						array_push($inserted_kategori, $penyakit_id);
						// array_push($past_kategori, [$penyakit_id => $kombinasi]);
						$past_kategori[$penyakit_id] = $kombinasi;
					} else {
						$kombinasi = $skor * $bobot;

						$last_kombinasi = $past_kategori[$penyakit_id] ;

						$new_kombinasi = $kombinasi + $last_kombinasi - ($kombinasi * $last_kombinasi);

						$past_kategori[$penyakit_id] = $new_kombinasi;
					}

					// array_push($jawaban, [$penyakit_id => ['gejala_id' => $id ,'skor' => $skor ,'nilai' => $data]]);
				}

				$max_skor = 0.0;
				$kategori = "";
				$solusi = "";

				foreach($past_kategori as $id => $skor) {
					if($max_skor < (float)$skor) {
						$max_skor = (float)$skor;
						$kategori = $this->crud->get_kategori_name($id);
						$solusi = $this->crud->get_solusi_text($id);
					}
				}

				$data['hasil'] = $kategori;
				$data['solusi'] = $solusi;
				$data['akurasi'] = (float)$max_skor * 100;

				if($this->session->userdata('sess_user_id')) {
					$riwayat = [
						'id' => NULL,
						'user_id' => $this->session->userdata('sess_user_id'),
						'nama' => $this->session->userdata('sess_pasien_nama'),
						'umur' => $this->session->userdata('sess_pasien_umur'),
						'jenis_kelamin' => $this->session->userdata('sess_pasien_jenis_kelamin'),
						'tanggal_konsultasi' => date('Y-m-d', time()),
						'diagnosis' => $kategori,
						'solusi' => $solusi
					];

					$this->crud->insert($riwayat, 'riwayat');
				}

				$url_page = "app/konsultasi/result";
			break;
			case 5:
				$user_id = $this->session->userdata('sess_user_id');
				$data['riwayat'] = [];
				
				if($user_id) {
					$data['riwayat'] = $this->admin->riwayat_konsultasi($user_id);
				}

				$url_page = "app/konsultasi/riwayat";
			break;
			default:
				$url_page = "app/konsultasi/index";
		}

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view($url_page, $data);
		$this->load->view('templates/footer');
	}

	public function edukasi() {
		$penyakit = $this->crud->get('penyakit');
		$gejala = $this->crud->get('gejala');

		$data['edukasi'] = array_merge($penyakit, $gejala);

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('app/edukasi/index', $data);
		$this->load->view('templates/footer');
	}

	public function artikel() {
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('app/artikel/index');
		$this->load->view('templates/footer');
	}

	public function bantuan() {
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('app/bantuan/index');
		$this->load->view('templates/footer');
	}

	// lainnya untuk kebutuhan API
	public function get_data($table, $id = NULL) {
		$data = $this->crud->get($table, $id);

		echo json_encode($data, JSON_PRETTY_PRINT);
	}

}