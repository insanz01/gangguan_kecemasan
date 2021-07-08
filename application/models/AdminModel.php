<?php

class AdminModel extends CI_Model {
	public function certainty_data() {
		$query = "SELECT certainty.id, certainty.penyakit_id, certainty.gejala_id, penyakit.nama as nama_penyakit, gejala.nama as nama_gejala, certainty.skor FROM certainty JOIN penyakit ON certainty.penyakit_id = penyakit.id JOIN gejala ON certainty.gejala_id = gejala.id";

		return $this->db->query($query)->result_array();
	}

	public function riwayat_konsultasi($user_id) {
		$query = "SELECT riwayat.id, riwayat.nama, riwayat.tanggal_konsultasi, riwayat.diagnosis, riwayat.solusi FROM riwayat JOIN users ON riwayat.user_id = users.id WHERE users.id = $user_id";

		return $this->db->query($query)->result_array();
	}

	public function get_userdata($role) {
		$role_id = ($role == "pakar") ? 3 : 2;
		$query = "SELECT * FROM users WHERE role_id = $role_id";

		return $this->db->query($query)->result_array();
	}
}