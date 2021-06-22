<?php

class AuthModel extends CI_Model {
	public function login($data) {
		$user = $this->db->get_where('users', ['username' => $data['username']])->row_array();

		if(password_verify($data['password'], $user['password'])) {
			$this->session->set_userdata('sess_user_id', $user['id']);
			$this->session->set_userdata('sess_username', $user['username']);
			$this->session->set_userdata('sess_role_id', $user['role_id']);
			$this->session->set_userdata('sess_pasien_nama', $user['nama_lengkap']);

			return true;
		}

		return false;
	}

	public function register($data) {
		$data['created_at'] = date('Y-m-d', time());
		$data['updated_at'] = date('Y-m-d', time());

		$data['role_id'] = 2; // default role id because it's member

		return $this->db->insert('users', $data);
	}
}