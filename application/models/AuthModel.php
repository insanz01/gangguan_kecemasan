<?php
# nitip
# https://github.com/bebasid/bebasid/blob/master/releases/hosts

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

	public function reset_password($email, $key = '') {
		$user = $this->db->get_where('users', ['email' => $email])->row_array();

		if($user) {
			$data = [
				'id' => NULL,
				'key' => $key,
				'user_id' => $user['id'],
				'created_at' => date('Y-m-d', time()),
				'updated_at' => date('Y-m-d', time())
			];

			return $this->db->insert('reset_password', $data);
		} else {
			return false;
		}
	}

	public function key_exists($key) {
		$query = "SELECT reset_password.id as id_reset, reset_password.key, users.id, users.username, users.email FROM reset_password JOIN users ON reset_password.user_id = users.id WHERE reset_password.key = $key";

		$user = $this->db->query($query)->row_array();

		return $user;
	}

	public function change_password($email, $new_password) {
		$this->db->set('password', $new_password);
		$this->db->where('email', $email);
		$this->db->update('users');

		return $this->db->affected_rows();
	}
}