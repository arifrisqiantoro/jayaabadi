<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $post->title; ?> - PT Jaya Abadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Poppins', sans-serif; 
            background: #f8f9fa; 
        }
        .post-detail-hero {
            background: linear-gradient(135deg, #2980b9, #6dd5fa);
            padding: 120px 0 40px;
            color: #fff;
            text-align: center;
        }
        .badge-category {
            background: linear-gradient(135deg, #2980b9, #6dd5fa);
            padding: 5px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            color: #fff;
            display: inline-block;
        }
    </style>
</head>
<body>

    <!-- Hero / Header Detail -->
    <section class="post-detail-hero">
        <div class="container">
            <span class="badge-category mb-3"><?= !empty($post->category) ? $post->category : 'Informasi'; ?></span>
            <h1 class="fw-bold display-6"><?= $post->title; ?></h1>
            <p class="text-white-50 mt-2">
                <i class="far fa-calendar-alt me-1"></i> 
                <?= date('d M Y, H:i', strtotime($post->created_at)); ?> WIB
            </p>
        </div>
    </section>

    <!-- Content Detail -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4 p-md-5">
                            
                            <!-- Gambar Postingan -->
                            <?php if (!empty($post->image)): ?>
                                <div class="mb-4 text-center">
                                    <img src="<?= base_url('uploads/posts/' . $post->image); ?>" alt="<?= $post->title; ?>" class="img-fluid rounded shadow-sm w-100" style="max-height: 400px; object-fit: cover;">
                                </div>
                            <?php endif; ?>

                            <!-- Isi Konten -->
                            <div class="post-content text-secondary" style="line-height: 1.8; font-size: 15px;">
                                <?= nl2br($post->content); ?>
                            </div>

                            <!-- Tombol Kembali -->
                            <div class="mt-5 pt-3 border-top d-flex justify-content-between align-items-center">
                                <a href="<?= base_url('landing/posts'); ?>" class="btn btn-secondary px-4">
                                    <i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar Postingan
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
