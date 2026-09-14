<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login_action()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        // VULNERABLE SQLi (Disengaja untuk Vuln Lab)
        $sql = "SELECT id, username, role FROM users
                WHERE username = '" . $username . "'
                AND password = '" . $password . "'";

        $query = $this->db->query($sql);
        $row = $query->row();
         
        if ($row) {
			// VULNERABLE: Session fixation (Disengaja untuk Vuln Lab)
			$this->session->set_userdata('user_id', $row->id);
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('role', $row->role);

			// Flag untuk latihan Reflected XSS - cookie ini sengaja TIDAK diset HttpOnly
			// supaya bisa "dicuri" lewat document.cookie di payload XSS
			setrawcookie('flag', 'FLAG{reflected_xss_c00kie_st34l1ng}', time() + 3600, '/', '', false, false);

			redirect('dashboard/index/' . $row->id);
		} else {
			$this->session->set_flashdata('error', 'Username atau Password salah!');
			redirect('login');
		}
    }

    public function logout()
    {
        $this->session->sess_destroy();
        
        // Buat session baru khusus untuk menampung flashdata logout
        $this->load->library('session');
        $this->session->set_flashdata('error', 'Anda telah berhasil logout.');
        
        redirect('login');
    }
}
