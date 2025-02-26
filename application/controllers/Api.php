<?php

class Api extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('CRUDModel', 'crud');
	}

	public function certainty($aksi = NULL, $id = NULL) {
		if($aksi == 'get') {
			$data = $this->crud->get('certainty', $id);

			echo json_encode($data, JSON_PRETTY_PRINT);
		}
	}

	public function penyakit($aksi = NULL, $id = NULL) {
		if($aksi == 'get') {
			$data = $this->crud->get('penyakit', $id);

			echo json_encode($data, JSON_PRETTY_PRINT);
		}
	}

	public function gejala($aksi = NULL, $id = NULL) {
		if($aksi == 'get') {
			$data = $this->crud->get('gejala', $id);

			echo json_encode($data, JSON_PRETTY_PRINT);
		}
	}

	public function user($aksi = NULL, $id = NULL) {
		if($aksi == 'get') {
			$data = $this->crud->get('users', $id);

			echo json_encode($data, JSON_PRETTY_PRINT);
		}
	}

	// EHR SISTEM
	private function validate_token($token) {
		header('Content-Type: application/json');

		if ($token == NULL) {
			echo json_encode(['message' => 'Token not found'], JSON_PRETTY_PRINT);
			return;
		}

		if ($token != "c0c596ad-d650-4e11-b584-aa2b37e3f0d0") {
			echo json_encode(['message' => 'Invalid token'], JSON_PRETTY_PRINT);
			return;			
		}

		return true;
	}

	public function riwayat($source = NULL, $aksi = NULL, $id = NULL) {
		header('Content-Type: application/json');

		if ($source != "ehr") {
			echo json_encode(['message' => 'Invalid endpoint'], JSON_PRETTY_PRINT);
			return;
		}

		$token = $this->input->get('token');

		if($this->validate_token($token)) {
			if($aksi == 'get') {
				$pasien = [];

				if($id != NULL) {
					$whereCondition = [
						'id' => $id,
					];

					$pasien = $this->crud->custom_get('riwayat', $whereCondition);
				} else {
					$pasien = $this->crud->get('riwayat');
				}

				$data['pasien'] = $pasien;

				echo json_encode($data, JSON_PRETTY_PRINT);
			} else {
				echo json_encode(['message' => 'Invalid action'], JSON_PRETTY_PRINT);
			}
		}
		
	}
}