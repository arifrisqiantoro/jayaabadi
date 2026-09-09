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
