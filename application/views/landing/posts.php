<!-- CSS -->
<style>
    .posts-hero {
        background: linear-gradient(135deg, #2980b9, #6dd5fa);
        padding: 150px 0 60px;
        color: #fff;
        text-align: center;
    }

    .posts-hero h1 { font-weight: 700; }
    .posts-hero p  { opacity: 0.9; max-width: 600px; margin: 0 auto; }

    .section-title {
        font-weight: 700;
        position: relative;
        padding-bottom: 12px;
        margin-bottom: 20px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0; left: 0;
        width: 48px; height: 3px;
        background: #2980b9;
        border-radius: 2px;
    }

    .post-card {
        border: none;
        border-radius: 14px;
        background: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }

    .post-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }

    .post-thumb {
        width: 200px;
        min-height: 160px;
        object-fit: cover;
        flex-shrink: 0;
    }

    .post-meta { font-size: 12px; color: #aaa; }

    .post-title {
        font-weight: 600;
        color: #1a1a2e;
        text-decoration: none;
        line-height: 1.4;
    }

    .post-title:hover { color: #2980b9; }

    .post-excerpt {
        font-size: 13px;
        color: #6c757d;
        line-height: 1.6;
    }

    .btn-read {
        background: linear-gradient(135deg, #2980b9, #6dd5fa);
        border: none;
        border-radius: 8px;
        padding: 7px 18px;
        font-size: 13px;
        font-weight: 600;
        color: #fff;
        text-decoration: none;
        transition: opacity 0.2s;
        white-space: nowrap;
        display: inline-block;
    }

    .btn-read:hover { opacity: 0.9; color: #fff; }

    .badge-category {
        background: linear-gradient(135deg, #2980b9, #6dd5fa);
        padding: 5px 10px;
        border-radius: 6px;
        font-size: 11px;
        font-weight: 600;
        color: #fff;
    }

    @media (max-width: 576px) {
        .post-thumb { width: 100%; min-height: 180px; }
        .post-card .d-flex { flex-direction: column; }
    }
</style>

<!-- Hero -->
<section class="posts-hero">
    <div class="container">
        <h1 class="display-6">Informasi & Berita Perusahaan</h1>
        <p class="lead mt-2">Kumpulan artikel, pengumuman, dan kabar terbaru dari PT Jaya Abadi.</p>
    </div>
</section>

<!-- Post List -->
<section class="py-5">
    <div class="container">

        <h4 class="section-title">Postingan Terbaru</h4>

        <div class="d-flex flex-column gap-3">
            <?php if (!empty($posts)): ?>
                <?php foreach ($posts as $post): ?>
                <div class="post-card">
                    <div class="d-flex">

                        <img
                            src="<?= !empty($post['image'])
                                ? base_url('uploads/posts/' . $post['image'])
                                : 'https://placehold.co/200x160/dbeafe/2980b9?text=JAJ'; ?>"
                            class="post-thumb"
                            alt="<?= $post['title']; ?>"
                        >

                        <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge-category"><?= $post['category']; ?></span>
                                    <span class="post-meta">
                                        <i class="far fa-calendar-alt me-1"></i>
                                        <?= date('d M Y', strtotime($post['created_at'])); ?>
                                    </span>
                                </div>
                                <h5 class="mb-2">
                                    <a href="<?= base_url('landing/post_detail/' . $post['id']); ?>" class="post-title">
                                        <?= $post['title']; ?>
                                    </a>
                                </h5>
                                <p class="post-excerpt mb-0">
                                    <?= substr(strip_tags($post['content']), 0, 120); ?>...
                                </p>
                            </div>
                            <div class="mt-3">
                                <a href="<?= base_url('landing/post_detail/' . $post['id']); ?>" class="btn-read">
                                    Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <?php endforeach; ?>

            <?php else: ?>
                <div class="text-center py-5">
                    <i class="fas fa-newspaper fa-3x text-muted mb-3 d-block"></i>
                    <p class="text-muted">Belum ada postingan yang dipublikasikan.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <?php if (isset($total_pages) && $total_pages > 1): ?>
        <div class="d-flex justify-content-center mt-5">
            <nav>
                <ul class="pagination">
                    <li class="page-item <?= ($current_page <= 1) ? 'disabled' : '' ?>">
                        <a class="page-link" href="<?= base_url('landing/posts?page=' . ($current_page - 1)) ?>">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>
                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?= ($i == $current_page) ? 'active' : '' ?>">
                            <a class="page-link" href="<?= base_url('landing/posts?page=' . $i) ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                    <li class="page-item <?= ($current_page >= $total_pages) ? 'disabled' : '' ?>">
                        <a class="page-link" href="<?= base_url('landing/posts?page=' . ($current_page + 1)) ?>">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <?php endif; ?>

    </div>
</section>
