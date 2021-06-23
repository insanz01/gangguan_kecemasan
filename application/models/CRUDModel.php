<?php

class CRUDModel extends CI_Model {

	public function get_last($table) {
		$query = "SELECT * FROM $table ORDER BY id DESC LIMIT 1";

		return $this->db->query($query)->row_array();
	}
	
	public function insert($data, $table) {
		$data['created_at'] = date('Y-m-d H:i:s', time());
		$data['updated_at'] = date('Y-m-d H:i:s', time());

		return $this->db->insert($table, $data);
	}

	public function get($table, $id = NULL) {
		if($id) {
			return $this->db->get_where($table, ['id' => $id])->row_array();
		} else {
			return $this->db->get($table)->result_array();
		}
	}

	public function update($data, $table, $id) {
		$data['updated_at'] = date('Y-m-d H:i:s', time());

		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update($table);

		return $this->db->affected_rows();
	}

	public function delete($table, $id) {
		return $this->db->delete($table, ['id' => $id]);
	}

	// fungsi aktivasi
	public function activation($id) {
		$user = $this->get('users', $id);

		$this->db->set('aktif', !$user['aktif']);
		$this->db->where('ID', $id);
		$this->db->update('users');

		return $this->db->affected_rows();
	}

	public function get_pertanyaan() {
		$query = "SELECT certainty.id, certainty.skor, gejala.id, gejala.nama as nama_gejala, certainty.penyakit_id FROM certainty JOIN gejala ON certainty.gejala_id = gejala.id";
		return $this->db->query($query)->result_array();
	}

	public function get_kategori_name($id) {
		$data = $this->db->get_where('penyakit', ['id' => $id])->row_array();

		$nama = $data['nama'];

		return $nama;
	}

	public function get_solusi_text($id) {
		$data = $this->db->get_where('penyakit', ['id' => $id])->row_array();

		$solusi = $data['solusi'];

		return $solusi;	
	}

}