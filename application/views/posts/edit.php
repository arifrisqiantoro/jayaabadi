<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Postingan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Poppins', sans-serif; 
            background: #f8f9fa; 
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h2 class="mb-4 text-secondary fw-bold fs-4">Edit Postingan</h2>
                        
                        <form action="<?= base_url('posts/update') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $post->id ?>">

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Judul</label>
                                <input type="text" name="title" class="form-control" value="<?= $post->title ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Konten</label>
                                <textarea name="content" class="form-control" rows="5" required><?= $post->content ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Kategori</label>
                                <select name="category" class="form-select" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="Promo" <?= ($post->category == 'Promo') ? 'selected' : '' ?>>Promo</option>
                                    <option value="Berita" <?= ($post->category == 'Berita') ? 'selected' : '' ?>>Berita</option>
                                    <option value="Pengumuman" <?= ($post->category == 'Pengumuman') ? 'selected' : '' ?>>Pengumuman</option>
                                    <option value="Informasi" <?= ($post->category == 'Informasi') ? 'selected' : '' ?>>Informasi</option>
                                    <option value="Kegiatan" <?= ($post->category == 'Kegiatan') ? 'selected' : '' ?>>Kegiatan</option>
                                    <option value="Artikel" <?= ($post->category == 'Artikel') ? 'selected' : '' ?>>Artikel</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Foto Saat Ini</label>
                                <?php if (!empty($post->image)): ?>
                                    <div class="mb-2">
                                        <img src="<?= base_url('uploads/posts/' . $post->image) ?>" alt="Foto Postingan" class="img-thumbnail" style="width: 120px; height: auto;">
                                    </div>
                                <?php else: ?>
                                    <p class="text-muted small">Tidak ada foto saat ini.</p>
                                <?php endif; ?>
                                
                                <label class="form-label fw-semibold mt-2">Ganti Foto <span class="text-muted fw-normal">(kosongkan jika tidak ingin ganti)</span></label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary px-4" onclick="window.history.back()">
                                    <i class="bi bi-arrow-left me-1"></i> Kembali
                                </button>
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="bi bi-arrow-repeat me-1"></i> Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
