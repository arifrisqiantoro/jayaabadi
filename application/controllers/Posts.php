<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');

        if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }

    public function index()
    {
		if ($this->session->userdata('role') === 'admin') {
			$data['posts']          = $this->db->get('posts')->result();
		} else {
			$data['posts']          = $this->db->get_where('posts', array('user_id' => $this->session->userdata('user_id')))->result();
		}
        $this->load->view('posts/index', $data);
    }

    // ================= TAMBAH =================

    public function tambah()
    {
        $this->load->view('posts/tambah');
    }

    public function simpan()
    {
        $title   = $this->input->post('title');
        $content = $this->input->post('content');
        $image   = null;

        // VULNERABLE: unrestricted file upload (disengaja untuk vuln lab)
        // - hanya cek ekstensi, tidak ada validasi isi file (getimagesize/finfo)
        // - nama file pakai nama asli, rawan overwrite & path traversal
       if (!empty($_FILES['image']['name'])) {
			$filename = $_FILES['image']['name'];
			$tmp_path = $_FILES['image']['tmp_name'];

			move_uploaded_file($tmp_path, FCPATH . 'uploads/posts/' . $filename);

			$image = $filename;
		}

        $user_id = $this->session->userdata('user_id');

        // VULNERABLE: SQLi - query manual tanpa binding (disengaja untuk vuln lab)
        $sql = "INSERT INTO posts (user_id, title, content, image, created_at)
                VALUES ('$user_id', '$title', '$content', '$image', NOW())";

        $this->db->query($sql);

        $this->session->set_flashdata('success', 'Postingan berhasil ditambahkan.');
        redirect('dashboard');
    }

    // ================= UPDATE =================

    public function edit($id)
    {
        // VULNERABLE: IDOR - tidak ada cek kepemilikan post, siapapun yang login bisa edit post orang lain
        // VULNERABLE: SQLi via $id yang langsung dipakai di query manual
        $sql = "SELECT * FROM posts WHERE id = '$id'";
        $query = $this->db->query($sql);
        $data['post'] = $query->row();

        if (!$data['post']) {
            show_404();
            return;
        }

        $this->load->view('posts/edit', $data);
    }

   public function update()
	{
		$id      = $this->input->post('id');
		$title   = $this->input->post('title');
		$content = $this->input->post('content');

		$image_sql = '';

		if (!empty($_FILES['image']['name'])) {
			$filename = $_FILES['image']['name'];
			$tmp_path = $_FILES['image']['tmp_name'];

			move_uploaded_file($tmp_path, FCPATH . 'uploads/posts/' . $filename);

			$image_sql = ", image = '$filename'";
		}

		$sql = "UPDATE posts
				SET title = '$title', content = '$content' $image_sql
				WHERE id = '$id'";

		$this->db->query($sql);

		$this->session->set_flashdata('success', 'Postingan berhasil diperbarui.');
		redirect('dashboard');
	}
    // ================= HAPUS (biar konsisten sama link yang sudah ada) =================

    public function hapus($id)
    {
        // VULNERABLE: IDOR + SQLi
        $sql = "DELETE FROM posts WHERE id = '$id'";
        $this->db->query($sql);

        $this->session->set_flashdata('success', 'Postingan berhasil dihapus.');
        redirect('dashboard');
    }
}
