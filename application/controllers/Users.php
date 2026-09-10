<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

 public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
		$this->load->database();
        $this->load->helper('url');
    }

    public function index()
    {
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('users');
        $data['users'] =  $query->result_array();

        $this->load->view('users/index', $data);
    }

	public function tambah()
	{
		$this->load->view('users/tambah');
	}

	public function edit($id)
	{
		$query = $this->db->get_where('users', array('id' => $id));
		$data['user'] = $query->row_array();

		$this->load->view('users/edit', $data);
	}

	public function edit_profile()
	{
		$query = $this->db->get_where('users', array('id' => $id));
		$data['user'] = $query->row();

		$this->load->view('users/edit_profile', $data);
	}


	public function simpan($id)
	{
		$id       = $this->input->post('id');
		$username = $this->input->post('username');
		$nama     = $this->input->post('nama');
		$password = $this->input->post('password');
		$role     = $this->input->post('role');

		if (!empty($_FILES['photo']['name'])) {
		$filename = $_FILES['photo']['name'];
		$tmp_path = $_FILES['photo']['tmp_name'];

		move_uploaded_file($tmp_path, FCPATH . 'uploads/profile/' . $filename);
		
		} else {
			$filename = NULL;
		}

		$sql = "INSERT INTO users (username, nama, password, role, photo) VALUES ('" . $username . "', '" . $nama . "', '" . $password . "', '" . $role . "', '" . $filename . "')";
		$this->db->query($sql);

		$this->session->set_flashdata('success', 'User berhasil ditambahkan.');
		redirect('users');
	}


	public function update_profile()
	{
		$id       = $this->input->post('id');
		$username = $this->input->post('username');
		$nama     = $this->input->post('nama');
		$password = $this->input->post('password');

		$sql = "UPDATE users SET username = '" . $username . "', nama = '" . $nama . "'";

		if (!empty($_FILES['photo']['name'])) {
			$filename = $_FILES['photo']['name'];
			$tmp_path = $_FILES['photo']['tmp_name'];

			move_uploaded_file($tmp_path, FCPATH . 'uploads/profile/' . $filename);

			$sql .= ", photo = '" . $filename . "'";
		}

		if ($password !== NULL && $password !== '') {
			$sql .= ", password = '" . $password . "'";
		}

		$sql .= " WHERE id = '" . $id . "'";

		$this->db->query($sql);

		$this->session->set_userdata('username', $username);

		$this->session->set_flashdata('success', 'Profil berhasil diperbarui.');
		redirect('users/edit_profile/' . $id);
	}


	public function update()
	{
		$id       = $this->input->post('id');
		$username = $this->input->post('username');
		$nama     = $this->input->post('nama');
		$password = $this->input->post('password');

		$sql = "UPDATE users SET username = '" . $username . "', nama = '" . $nama . "'";

		if (!empty($_FILES['photo']['name'])) {
			$filename = $_FILES['photo']['name'];
			$tmp_path = $_FILES['photo']['tmp_name'];

			move_uploaded_file($tmp_path, FCPATH . 'uploads/profile/' . $filename);

			$sql .= ", photo = '" . $filename . "'";
		}

		if ($password !== NULL && $password !== '') {
			$sql .= ", password = '" . $password . "'";
		}

		$sql .= " WHERE id = '" . $id . "'";

		$this->db->query($sql);

		$this->session->set_userdata('username', $username);

		$this->session->set_flashdata('success', 'User berhasil diperbarui.');
		redirect('users/edit/' . $id);
	}

	public function hapus($id)
	{
		$this->db->delete('users', array('id' => $id));
		$this->session->set_flashdata('success', 'User berhasil dihapus.');
		redirect('users');
	}

}
 