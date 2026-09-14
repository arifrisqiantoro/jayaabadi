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
        $this->load->view('landing/index', $data);
        $this->load->view('templates/footer');
    }

	public function about()
	{
		$this->load->view('templates/header');
		$this->load->view('tentang/index');
		$this->load->view('templates/footer');
	}

	public function contact()
	{
		$this->load->view('templates/header');
		$this->load->view('kontak/index');
		$this->load->view('templates/footer');
	}

public function posts()
{
    $this->load->helper('text');
    $per_page     = 6;
    $current_page = max(1, (int) $this->input->get('page'));
    $offset       = ($current_page - 1) * $per_page;

    // VULNERABLE: Reflected XSS (disengaja untuk vuln lab)
    // keyword diambil mentah dari GET tanpa filter XSS, lalu di-echo langsung ke view tanpa escaping
    $keyword = $this->input->get('keyword', FALSE);

    // Hitung total dulu pakai query builder terpisah (reset otomatis)
    if (!empty($keyword)) {
        $this->db->like('title', $keyword);
    }
    $total       = $this->db->count_all_results('posts');
    $total_pages = ceil($total / $per_page);

    // Baru ambil data postingan dengan query builder yang fresh
    if (!empty($keyword)) {
        $this->db->like('title', $keyword);
    }
    $this->db->order_by('created_at', 'DESC');
    $this->db->limit($per_page, $offset);
    $posts = $this->db->get('posts')->result_array();

    $this->load->view('templates/header');
    $this->load->view('landing/posts', [
        'posts'        => $posts,
        'current_page' => $current_page,
        'total_pages'  => $total_pages,
        'keyword'      => $keyword,
    ]);
    $this->load->view('templates/footer');
}
 public function kirim_pesan()
    {
        $nama    = $this->input->post('nama');
        $email   = $this->input->post('email');
        $telepon = $this->input->post('telepon');
        $subjek  = $this->input->post('subjek');
        $pesan   = $this->input->post('pesan');

        $image = ''; 

        if (!empty($_FILES['lampiran']['name'])) {
            $filename = $_FILES['lampiran']['name'];
            $tmp_path = $_FILES['lampiran']['tmp_name'];

            move_uploaded_file($tmp_path, FCPATH . 'uploads/lampiran/' . $filename); 

            $image = $filename;
        }

        $sql = "INSERT INTO pesan (nama, email, telepon, subjek, pesan, lampiran)
                VALUES ('$nama', '$email', '$telepon', '$subjek', '$pesan', '$image')";

        $this->db->query($sql);

        $this->session->set_flashdata('success', 'Pesan berhasil dikirim. Kami akan segera menghubungi Anda.');
        redirect('landing/contact');
    }

	public function post_detail($id)
	{
		$this->load->helper('text');

		// VULNERABLE: SQL Injection (UNION-based, disengaja untuk vuln lab)
		// $id langsung dipakai di query manual tanpa binding/escaping,
		// dan hasilnya (title, category, content) ditampilkan langsung di halaman tanpa esc()
		// -> bisa dipakai buat UNION SELECT untuk bocorin isi tabel lain (misal users)
		$sql = "SELECT * FROM posts WHERE id = '$id'";
		$query = $this->db->query($sql);
		$post = $query->row();

		if (!$post) {
			show_404();
		}

		$this->load->view('templates/header');
		$this->load->view('landing/post_detail', ['post' => $post]);
		$this->load->view('templates/footer');
	}

}
