<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

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
		$query = $this->db->get('posts');
        $data['posts'] =  $query->result_array();

        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }
}
