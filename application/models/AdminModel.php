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

	public function riwayat_reminder() {
		$query = "SELECT DISTINCT pasien_id FROM riwayat WHERE created_at < '2025-02-20 00:00:00'";

		$pasien_ids = $this->db->query($query)->result_array();

		$ids_builder = "";
		foreach($pasien_ids as $idx => $id) {
			if($idx == 0) {
				$ids_builder .= $id['pasien_id'];
			} else {
				$ids_builder .= ', ' . $id['pasien_id'];
			}
		}

		$query = "WITH RankedRiwayat AS (
									SELECT 
											riwayat.pasien_id, 
											riwayat.tanggal_konsultasi,
											ROW_NUMBER() OVER (PARTITION BY riwayat.pasien_id ORDER BY riwayat.tanggal_konsultasi DESC) AS rn
									FROM riwayat
									WHERE riwayat.pasien_id IN ($ids_builder)
							)
							SELECT 
									rr.pasien_id, 
									pasien.nama AS nama_pasien, 
									rr.tanggal_konsultasi
							FROM RankedRiwayat rr
							JOIN pasien ON rr.pasien_id = pasien.id
							WHERE rr.rn = 1;";

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