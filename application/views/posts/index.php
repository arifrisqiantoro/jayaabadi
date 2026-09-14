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
        body { background: #f1f4f9; font-family: 'Poppins', sans-serif; }
        .card { border: none; border-radius: 14px; box-shadow: 0 2px 10px rgba(0,0,0,0.06); }
        .navbar-brand { font-weight: 700; letter-spacing: 0.5px; }

        .page-heading { margin-bottom: 24px; }
        .page-heading h3 { font-weight: 600; margin-bottom: 2px; }
        .page-heading p { color: #8a94a6; margin-bottom: 0; }

        .stat-card { border-radius: 14px; padding: 20px; color: #fff; }
        .stat-card .stat-icon {
            width: 46px; height: 46px; border-radius: 12px;
            background: rgba(255,255,255,0.2);
            display: flex; align-items: center; justify-content: center;
            font-size: 20px; margin-bottom: 10px;
        }
        .stat-card h3 { font-weight: 700; margin-bottom: 0; }
        .stat-card small { opacity: 0.85; }
        .stat-blue { background: linear-gradient(135deg, #2980b9, #6dd5fa); }

        .profile-card { overflow: hidden; }
        .profile-header { height: 70px; background: #fafbfc; border-bottom: 1px solid #eef0f3; }
        .profile-info { margin-top: -40px; padding: 0 20px; }
        .profile-photo {
            width: 96px; height: 96px;
            object-fit: cover; border-radius: 50%;
            border: 4px solid #fff;
            box-shadow: 0 4px 14px rgba(0,0,0,0.12);
            background: #fff;
        }

        .post-thumb { width: 55px; height: 55px; object-fit: cover; border-radius: 8px; }
        .table thead.table-dark th { border: none; font-weight: 500; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; }
        .table td, .table th { vertical-align: middle; }
        .table tbody tr:hover { background: #f8fafc; }
    </style>
</head>
<body>

    <?php $this->load->view('templates/navbar'); ?>
    <div class="container pb-5">
        <!-- Stat -->
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="stat-card stat-blue">
                    <div class="stat-icon"><i class="bi bi-file-earmark-text"></i></div>
                    <h3><?= isset($posts) ? count($posts) : 0 ?></h3>
                    <small>Total Postingan</small>
                </div>
            </div>
        </div>

        <!-- Flash -->
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show">
                <i class="bi bi-check-circle me-2"></i><?= $this->session->flashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <i class="bi bi-exclamation-circle me-2"></i><?= $this->session->flashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

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

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
