<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
		$this->load->database();
        $this->load->helper('url');

        if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }

  public function index()
	{
		if (!$this->session->userdata('user_id')) {
			redirect('auth');
		}

		$query = $this->db->get_where('users', array('id' => $this->session->userdata('user_id')));
		$data['user'] = $query->row();

		// Ambil postingan
		if ($this->session->userdata('role') === 'admin') {
			$data['posts']          = $this->db->get('posts')->result();
			$data['filtered_users'] = $this->db->get('users')->result();
			$data['pesan']          = $this->db->get('pesan')->result();
		} else {
			$data['posts']          = $this->db->get_where('posts', array('user_id' => $data['user']->id))->result();
			$data['filtered_users'] = [];
			$data['pesan']          = $this->db->get('pesan')->result();
		}

		$data['users'] = $this->db->get('users')->result();

		$this->load->view('dashboard/index', $data);
	}
}
