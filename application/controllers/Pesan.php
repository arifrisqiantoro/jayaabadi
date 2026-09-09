<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

 public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
		$this->load->database();
        $this->load->helper('url');
    }

    public function index()
	{
		$this->load->helper('text');

		// Flag untuk latihan Stored XSS: cookie ini di-set setiap kali halaman
		// daftar pesan (yang berisi data dari user luar) dibuka.
		// Simulasi: ini "sesi admin" yang lagi review pesan masuk.
		// Kalau ada payload XSS di data pesan, cookie ini yang jadi target curian.
		setrawcookie('flag', 'FLAG{stored_xss_via_kontak_form}', time() + 3600, '/', '', false, false);

		$this->db->order_by('created_at', 'DESC');
		$this->db->limit(3);
		$query = $this->db->get('pesan');
		$data['pesan'] = $query->result();

		$this->load->view('pesan/index', $data);
	}

	public function view($id)
	{
		$this->load->helper('text');

		$query = $this->db->get_where('pesan', array('id' => $id));
		$data['pesan'] = $query->row();

		if (!$data['pesan']) {
			show_404();
		}

		$this->load->view('pesan/view', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('pesan', array('id' => $id));
		$this->session->set_flashdata('success', 'Pesan berhasil dihapus.');
		redirect('pesan');
	}
}
