<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Jaya Abadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f1f4f9;
            font-family: 'Poppins', sans-serif;
        }
        .card { border: none; border-radius: 14px; box-shadow: 0 2px 10px rgba(0,0,0,0.06); }
        .navbar-brand { font-weight: 700; letter-spacing: 0.5px; }

        /* Page heading */
        .page-heading { margin-bottom: 24px; }
        .page-heading h3 { font-weight: 600; margin-bottom: 2px; }
        .page-heading p { color: #8a94a6; margin-bottom: 0; }

        /* Stat cards */
        .stat-card { border-radius: 14px; padding: 20px; color: #fff; }
        .stat-card .stat-icon {
            width: 46px; height: 46px; border-radius: 12px;
            background: rgba(255,255,255,0.2);
            display: flex; align-items: center; justify-content: center;
            font-size: 20px; margin-bottom: 10px;
        }
        .stat-card h3 { font-weight: 700; margin-bottom: 0; }
        .stat-card small { opacity: 0.85; }
        .stat-blue   { background: linear-gradient(135deg, #2980b9, #6dd5fa); }
        .stat-green  { background: linear-gradient(135deg, #27ae60, #6fdc8c); }
        .stat-purple { background: linear-gradient(135deg, #8e44ad, #c58bf2); }

        /* Profile card */
			.profile-card { overflow: hidden; }
			.profile-header {
				height: 70px;
				background: #fafbfc;
				border-bottom: 1px solid #eef0f3;
			}
			.profile-info { margin-top: -40px; padding: 0 20px; }
			.photo-wrap { position: relative; flex-shrink: 0; }
			.profile-photo {
				width: 96px;
				height: 96px;
				object-fit: cover;
				border-radius: 50%;
				border: 4px solid #fff;
				box-shadow: 0 4px 14px rgba(0,0,0,0.12);
				background: #fff;
			}
			.status-dot {
				position: absolute;
				bottom: 6px;
				right: 6px;
				width: 16px;
				height: 16px;
				background: #27ae60;
				border: 3px solid #fff;
				border-radius: 50%;
			}

        /* Posts */
        .post-thumb { width: 55px; height: 55px; object-fit: cover; border-radius: 8px; }
        .table thead.table-dark th { border: none; font-weight: 500; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; }
        .table td, .table th { vertical-align: middle; }
        .table tbody tr:hover { background: #f8fafc; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <?php $this->load->view('templates/navbar'); ?>

    <div class="container pb-5">

        <!-- Page Heading -->
        <div class="page-heading d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div>
                <h3>Selamat datang kembali 👋</h3>
            </div>
        </div>

        <!-- Profil -->
      <div class="card mb-4 profile-card">
    <div class="profile-header"></div>
    <div class="card-body">
        <?php if ($user): ?>
            <div class="d-flex align-items-end gap-4 profile-info">
                <img src="<?= isset($user->photo) ? base_url('uploads/profile/' . $user->photo) : base_url('assets/img/default-avatar.png') ?>"
                     alt="Foto Profil" class="profile-photo">

                <div class="flex-grow-1 pb-2">
                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                        <div>
                            <!-- VULNERABLE: XSS - no output encoding (disengaja untuk vuln lab) -->
                            <h5 class="mb-0 fw-bold"><?= $user->nama ?></h5>
                            <p class="text-muted mb-2">@<?= $user->username ?></p>
                        </div>
                        <a class="btn btn-sm btn-outline-primary" href="<?= base_url('users/edit_profile/' . $user->id) ?>">
                            <i class="bi bi-pencil-square"></i> Edit Profil
                        </a>
                    </div>

                    <span class="badge bg-primary-subtle text-primary-emphasis border border-primary-subtle px-3 py-2">
                        <i class="bi bi-shield-check"></i> <?= $user->role ?>
                    </span>
                </div>
            </div>
        <?php else: ?>
            <p class="text-muted mb-0">Data profil tidak ditemukan.</p>
        <?php endif; ?>
    </div>
</div>

	<div class="row g-3 mb-4">

		<!-- Total Postingan -->
		<div class="col-md-4">
			<div class="stat-card stat-blue">
				<div class="stat-icon">
					<i class="bi bi-file-earmark-text"></i>
				</div>

				<h3><?= isset($posts) ? count($posts) : 0 ?></h3>
				<small>Total Postingan</small>
			</div>
		</div>

		<div class="col-md-4">
			<div class="stat-card stat-blue">
				<div class="stat-icon">
					<i class="bi bi-file-earmark-text"></i>
				</div>

				<h3><?= isset($pesan) ? count($pesan) : 0 ?></h3>
				<small>Total Pesan</small>
			</div>
		</div>


		<?php if ($this->session->userdata('role') === 'admin'): ?>
			<div class="col-md-4">
				<div class="stat-card stat-blue">
					<div class="stat-icon">
						<i class="bi bi-people"></i>
					</div>
					<h3><?= count($filtered_users) ?></h3>
					<small>Total User</small>
				</div>
			</div>
		<?php endif; ?>

		<!-- Flash Data --> 
		 <?php if ($this->session->flashdata('success')): ?> <div class="alert alert-success alert-dismissible fade show" role="alert"> 
			<i class="bi bi-check-circle me-2"></i> <?= $this->session->flashdata('success'); ?> 
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
		</div> <?php endif; ?> <?php if ($this->session->flashdata('error')): ?> <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
			<i class="bi bi-exclamation-circle me-2"></i> 
			<?= $this->session->flashdata('error'); ?> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
				
			</button> </div> <?php endif; ?>
        <!-- List Postingan -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                    <h5 class="card-title mb-0"><i class="bi bi-file-earmark-text"></i> Daftar Postingan</h5>
                    <a href="<?= base_url('posts/tambah') ?>" class="btn btn-success btn-sm">
                        <i class="bi bi-plus-lg"></i> Tambah Postingan
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($posts)): ?>
                                <?php $no = 1; foreach ($posts as $post): ?>
                                <tr>
                                    <td class="text-muted"><?= $no++ ?></td>
                                    <td>
                                        <?php if (!empty($post->image)): ?>
                                            <img src="<?= base_url('uploads/posts/' . $post->image) ?>" class="post-thumb">
                                        <?php else: ?>
                                            <span class="text-muted small">-</span>
                                        <?php endif; ?>
                                    </td>
                                    <!-- VULNERABLE: XSS -->
                                    <td class="fw-medium"><?= $post->title ?></td>
                                    <td class="text-muted"><?= $post->created_at ?></td>
                                    <td class="text-end">
                                        <a href="<?= base_url('posts/edit/' . $post->id) ?>" class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <a href="<?= base_url('posts/hapus/' . $post->id) ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin hapus?')">
                                            <i class="bi bi-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr><td colspan="5" class="text-center text-muted py-4">Belum ada postingan.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

		    <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                    <h5 class="card-title mb-0"><i class="bi bi-envelope"></i> Daftar Pesan</h5>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
								<th>Email</th>
								<th>Telepon</th>
                                <th>Subjek</th>
                                <th>Pesan</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($pesan)): ?>
                                <?php $no = 1; foreach ($pesan as $p): ?>
                                <tr>
                                    <td class="text-muted"><?= $no++ ?></td>
                                    <td class="fw-medium"><?= $p->nama ?></td>
                                    <td class="text-muted"><?= $p->email ?></td>
                                    <td class="text-muted"><?= $p->telepon ?></td>
                                    <td class="fw-medium"><?= $p->subjek ?></td>
                                    <td class="text-muted"><?= $p->pesan ?></td>
                                    <td class="text-end">
                                        <a href="<?= base_url('pesan/view/' . $p->id) ?>" class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-eye"></i> 
                                        </a>
                                        <a href="<?= base_url('pesan/hapus/' . $p->id) ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin hapus?')">
                                            <i class="bi bi-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr><td colspan="5" class="text-center text-muted py-4">Belum ada pesan.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
