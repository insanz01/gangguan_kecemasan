<?php

class AdminModel extends CI_Model {
	public function certainty_data() {
		$query = "SELECT certainty.id, certainty.penyakit_id, certainty.gejala_id, penyakit.nama as nama_penyakit, gejala.nama as nama_gejala, certainty.skor FROM certainty JOIN penyakit ON certainty.penyakit_id = penyakit.id JOIN gejala ON certainty.gejala_id = gejala.id";

		return $this->db->query($query)->result_array();
	}

	public function riwayat_konsultasi($user_id) {
		$query = "SELECT riwayat.id, riwayat.penyakit_id, pasien.nama, riwayat.tanggal_konsultasi, riwayat.diagnosis, riwayat.solusi FROM riwayat JOIN users ON riwayat.user_id = users.id JOIN pasien ON pasien.id = riwayat.pasien_id WHERE users.id = $user_id";

		return $this->db->query($query)->result_array();
	}

	public function get_userdata($role) {
		$role_id = ($role == "pakar") ? 3 : 2;
		$query = "SELECT users.id, users.username, users.nama_lengkap, users.email, users.role_id, users.created_at, DATEDIFF(CURDATE(), users.login_attemp) as last_login FROM users WHERE role_id = $role_id";

		return $this->db->query($query)->result_array();
	}

	public function total_data($table, $condition = NULL) {
		if($condition) {
			return $this->db->get_where($table, $condition)->num_rows();
		} else {
			return $this->db->get($table)->num_rows();
		}
	}
}