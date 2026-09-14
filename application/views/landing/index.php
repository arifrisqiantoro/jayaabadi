<style>
    /* =========================================================
       GENERAL
    ========================================================= */
    body {
        background: #fff;
        color: #1f2937;
    }

    .bg-light-blue {
        background: #f0f7ff;
    }

    .text-primary-custom {
        color: #2980b9 !important;
    }

    /* =========================================================
       JARAK DARI NAVBAR
    ========================================================= */
    .content-wrapper {
        padding-top: 80px;
    }

    /* Kalau navbar fixed */
    .first-section {
        padding-top: 80px !important;
    }

    /* =========================================================
       SECTION TITLE
    ========================================================= */
    .section-heading {
        text-align: center;
        margin-bottom: 45px;
    }

    .section-heading .section-label {
        display: inline-block;
        color: #2980b9;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .section-heading h2 {
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 10px;
    }

    .section-heading p {
        color: #6b7280;
        max-width: 650px;
        margin: 0 auto;
        line-height: 1.7;
    }

    /* =========================================================
       UPDATE PERUSAHAAN
    ========================================================= */
    .company-update {
        padding: 70px 0;
    }

    .company-update-content {
        padding-right: 30px;
    }

    .company-update-label {
        color: #2980b9;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .company-update h2 {
        font-size: 34px;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 18px;
        color: #1f2937;
    }

    .company-update h2 span {
        color: #16b89a;
    }

    .company-update p {
        color: #64748b;
        line-height: 1.8;
        font-size: 15px;
        margin-bottom: 0;
    }

    /* =========================================================
       STAT CARD
    ========================================================= */
    .info-stat-card {
        background: #fff;
        border-radius: 16px;
        padding: 24px 15px;
        text-align: center;
        height: 100%;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.06);
        border: 1px solid rgba(0, 0, 0, 0.03);
        transition: all 0.3s ease;
    }

    .info-stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.10);
    }

    .info-stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 12px;
        font-size: 20px;
    }

    .info-stat-card h4 {
        font-size: 24px;
        color: #1f2937;
    }

    .icon-blue {
        background: #dbeafe;
        color: #2980b9;
    }

    .icon-green {
        background: #dcfce7;
        color: #27ae60;
    }

    .icon-purple {
        background: #ede9fe;
        color: #7c3aed;
    }

    .icon-orange {
        background: #ffedd5;
        color: #ea580c;
    }

    /* =========================================================
       CATEGORY
    ========================================================= */
    .category-section {
        padding: 75px 0;
    }

    .category-card {
        display: block;
        height: 100%;
        background: #fff;
        border-radius: 15px;
        padding: 25px 15px;
        text-align: center;
        text-decoration: none;
        color: #1f2937;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.06);
        border: 1px solid rgba(0, 0, 0, 0.03);
        transition: all 0.3s ease;
    }

    .category-card:hover {
        transform: translateY(-7px);
        color: #1f2937;
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.10);
    }

    .category-icon {
        width: 55px;
        height: 55px;
        border-radius: 13px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 14px;
        font-size: 21px;
    }

    .category-card h5 {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 6px;
    }

    .category-card small {
        color: #64748b;
        font-size: 12px;
    }

    /* =========================================================
       FEATURED POST
    ========================================================= */
    .featured-section {
        padding: 80px 0;
    }

    .featured-card {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.07);
        border: 1px solid #f0f0f0;
    }

    .featured-image-wrapper {
        width: 100%;
        height: 360px;
        overflow: hidden;
        background: #f1f5f9;
    }

    .featured-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
        transition: transform 0.5s ease;
    }

    .featured-card:hover .featured-image {
        transform: scale(1.04);
    }

    .featured-content {
        padding: 35px;
    }

    .featured-category {
        display: inline-block;
        background: #dbeafe;
        color: #2980b9;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 11px;
        font-weight: 700;
        margin-bottom: 13px;
    }

    .featured-content h3 {
        font-weight: 700;
        font-size: 27px;
        line-height: 1.4;
        margin-bottom: 12px;
    }

    .featured-content h3 a {
        color: #1f2937;
        text-decoration: none;
    }

    .featured-content h3 a:hover {
        color: #2980b9;
    }

    .featured-content p {
        color: #64748b;
        line-height: 1.7;
    }

    .featured-meta {
        color: #94a3b8;
        font-size: 13px;
        margin-bottom: 20px;
    }

    /* =========================================================
       POST CARD
    ========================================================= */
    .posts-section {
        padding: 75px 0;
        background: #f8fafc;
    }

    .card-post {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        background: #fff;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
        height: 100%;
    }

    .card-post:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.10);
    }

    .post-image-wrapper {
        width: 100%;
        height: 220px;
        overflow: hidden;
        background: #f1f5f9;
    }

    .post-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
        transition: transform 0.4s ease;
    }

    .card-post:hover .post-image {
        transform: scale(1.05);
    }

    .card-post .card-body {
        padding: 20px;
    }

    .post-title {
        color: #1f2937;
        text-decoration: none;
        font-weight: 700;
        line-height: 1.45;
        transition: color 0.2s ease;
    }

    .post-title:hover {
        color: #2980b9;
    }

    .card-post .card-title {
        min-height: 48px;
        margin-bottom: 10px;
    }

    .card-post .card-text {
        min-height: 48px;
        line-height: 1.6;
        color: #64748b;
    }

    .card-post .card-footer {
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
    }

    .badge-category {
        background: linear-gradient(135deg, #2980b9, #6dd5fa);
        padding: 5px 10px;
        border-radius: 6px;
        font-size: 11px;
        font-weight: 600;
    }

    /* =========================================================
       EMPTY POST
    ========================================================= */
    .empty-post {
        background: #fff;
        border-radius: 15px;
        padding: 60px 20px;
        text-align: center;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.04);
    }

    .empty-post i {
        font-size: 45px;
        color: #94a3b8;
        margin-bottom: 15px;
    }

    .empty-post p {
        color: #64748b;
        margin-bottom: 0;
    }

    /* =========================================================
       PAGINATION
    ========================================================= */
    .pagination {
        margin-bottom: 0;
    }

    .pagination .page-link {
        color: #2980b9;
        border: none;
        margin: 0 3px;
        border-radius: 8px;
        min-width: 38px;
        text-align: center;
    }

    .pagination .page-item.active .page-link {
        background: #2980b9;
        color: #fff;
    }

    .pagination .page-link:hover {
        background: #dbeafe;
    }

    /* =========================================================
       CTA
    ========================================================= */
    .cta-section {
        padding: 70px 0;
    }

    .cta-box {
        background: linear-gradient(135deg, #2980b9, #6dd5fa);
        border-radius: 17px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(41, 128, 185, 0.18);
    }

    .cta-box h3 {
        font-size: 27px;
        line-height: 1.4;
    }

    .cta-box p {
        line-height: 1.7;
    }

    .cta-box .btn {
        border-radius: 8px;
        padding: 11px 22px;
    }

    /* =========================================================
       RESPONSIVE
    ========================================================= */
    @media (max-width: 991.98px) {

        .content-wrapper {
            padding-top: 60px;
        }

        .first-section {
            padding-top: 60px !important;
        }

        .company-update-content {
            padding-right: 0;
        }

        .company-update h2 {
            font-size: 30px;
        }

        .featured-image-wrapper {
            height: 300px;
        }
    }

    @media (max-width: 767.98px) {

        .content-wrapper {
            padding-top: 40px;
        }

        .first-section {
            padding-top: 45px !important;
        }

        .company-update,
        .category-section,
        .featured-section,
        .posts-section,
        .cta-section {
            padding-top: 55px;
            padding-bottom: 55px;
        }

        .company-update h2 {
            font-size: 27px;
        }

        .section-heading {
            margin-bottom: 30px;
        }

        .featured-image-wrapper {
            height: 230px;
        }

        .featured-content {
            padding: 25px;
        }

        .featured-content h3 {
            font-size: 22px;
        }

        .post-image-wrapper {
            height: 200px;
        }

        .cta-box {
            padding: 30px 25px;
            text-align: center;
        }

        .cta-box h3 {
            font-size: 23px;
        }

        .cta-box .text-lg-end {
            text-align: center !important;
        }
    }
</style>


<!-- =========================================================
     CONTENT WRAPPER
========================================================= -->
<div class="content-wrapper">


    <!-- =====================================================
         UPDATE PERUSAHAAN
    ====================================================== -->
    <section class="company-update first-section bg-light-blue">
        <div class="container">

            <div class="row align-items-center g-4">

                <!-- TEXT -->
                <div class="col-lg-7">

                    <div class="company-update-content">

                        <div class="company-update-label">
                            Update Perusahaan
                        </div>

                        <h2>
                            Tetap Terhubung dengan
                            <span>Jaya Abadi</span>
                        </h2>

                        <p>
                            Temukan berbagai informasi terbaru mengenai kegiatan,
                            layanan, pengumuman, promo, dan perkembangan
                            PT Jaya Abadi. Kami terus berbagi informasi untuk
                            menjaga hubungan yang baik dengan pelanggan dan mitra.
                        </p>

                    </div>

                </div>


            </div>

        </div>
    </section>


    <!-- =====================================================
         KATEGORI INFORMASI
    ====================================================== -->
    <section class="category-section">

        <div class="container">

            <div class="section-heading">

                <span class="section-label">
                    Informasi
                </span>

                <h2>
                    Jelajahi Informasi
                </h2>

                <p>
                    Temukan informasi berdasarkan kategori yang kamu butuhkan.
                </p>

            </div>


            <div class="row g-4 justify-content-center">

                <!-- BERITA -->
                <div class="col-6 col-md-4 col-lg">
                    <a href="<?= base_url('landing/posts?category=Berita'); ?>"
                       class="category-card">

                        <div class="category-icon icon-blue">
                            <i class="fas fa-newspaper"></i>
                        </div>

                        <h5>Berita</h5>

                        <small>
                            Kabar terbaru
                        </small>

                    </a>
                </div>


                <!-- PENGUMUMAN -->
                <div class="col-6 col-md-4 col-lg">
                    <a href="<?= base_url('landing/posts?category=Pengumuman'); ?>"
                       class="category-card">

                        <div class="category-icon icon-orange">
                            <i class="fas fa-bullhorn"></i>
                        </div>

                        <h5>Pengumuman</h5>

                        <small>
                            Informasi penting
                        </small>

                    </a>
                </div>


                <!-- PROMO -->
                <div class="col-6 col-md-4 col-lg">
                    <a href="<?= base_url('landing/posts?category=Promo'); ?>"
                       class="category-card">

                        <div class="category-icon icon-green">
                            <i class="fas fa-tags"></i>
                        </div>

                        <h5>Promo</h5>

                        <small>
                            Penawaran terbaru
                        </small>

                    </a>
                </div>


                <!-- KEGIATAN -->
                <div class="col-6 col-md-4 col-lg">
                    <a href="<?= base_url('landing/posts?category=Kegiatan'); ?>"
                       class="category-card">

                        <div class="category-icon icon-purple">
                            <i class="fas fa-calendar-check"></i>
                        </div>

                        <h5>Kegiatan</h5>

                        <small>
                            Aktivitas perusahaan
                        </small>

                    </a>
                </div>


                <!-- ARTIKEL -->
                <div class="col-6 col-md-4 col-lg">
                    <a href="<?= base_url('landing/posts?category=Artikel'); ?>"
                       class="category-card">

                        <div class="category-icon icon-blue">
                            <i class="fas fa-book-open"></i>
                        </div>

                        <h5>Artikel</h5>

                        <small>
                            Wawasan & informasi
                        </small>

                    </a>
                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         FEATURED / POST TERBARU
    ====================================================== -->
    <?php if (!empty($posts)): ?>

        <?php
            /*
             * Ambil postingan pertama sebagai featured.
             * Postingan lainnya tetap ditampilkan di bawah.
             */
            $featured_post = $posts[0];
        ?>

        <section class="featured-section bg-light-blue">

            <div class="container">

                <div class="section-heading">

                    <span class="section-label">
                        Pilihan Terbaru
                    </span>

                    <h2>
                        Berita Terbaru
                    </h2>

                    <p>
                        Informasi terbaru dan pilihan dari PT Jaya Abadi.
                    </p>

                </div>


                <div class="featured-card">

                    <div class="row g-0 align-items-stretch">

                        <!-- IMAGE -->
                        <div class="col-lg-6">

                            <div class="featured-image-wrapper">

                                <img
                                    src="<?= !empty($featured_post['image'])
                                        ? base_url('uploads/posts/' . $featured_post['image'])
                                        : 'https://placehold.co/800x500/e9ecef/adb5bd?text=No+Image'; ?>"
                                    class="featured-image"
                                    alt="<?= htmlspecialchars($featured_post['title']); ?>"
                                >

                            </div>

                        </div>


                        <!-- CONTENT -->
                        <div class="col-lg-6 d-flex align-items-center">

                            <div class="featured-content w-100">

                                <span class="featured-category">
                                    <?= htmlspecialchars($featured_post['category']); ?>
                                </span>

                                <div class="featured-meta">

                                    <i class="far fa-calendar-alt me-1"></i>

                                    <?= date(
                                        'd M Y',
                                        strtotime($featured_post['created_at'])
                                    ); ?>

                                </div>

                                <h3>

                                    <a href="<?= base_url(
                                        'landing/post_detail/' . $featured_post['id']
                                    ); ?>">

                                        <?= htmlspecialchars(
                                            $featured_post['title']
                                        ); ?>

                                    </a>

                                </h3>

                                <p>
                                    <?= substr(
                                        strip_tags($featured_post['content']),
                                        0,
                                        180
                                    ); ?>...
                                </p>

                                <a
                                    href="<?= base_url(
                                        'landing/post_detail/' . $featured_post['id']
                                    ); ?>"
                                    class="btn btn-primary px-4 fw-bold"
                                >
                                    Baca Selengkapnya
                                    <i class="fas fa-arrow-right ms-1"></i>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    <?php endif; ?>


    <!-- =====================================================
         SEMUA POSTINGAN
    ====================================================== -->
    <section class="posts-section">

        <div class="container">

            <div class="section-heading">

                <span class="section-label">
                    Artikel & Informasi
                </span>

                <h2>
                    Postingan Terbaru
                </h2>

                <p>
                    Ikuti berbagai kabar, kegiatan, dan informasi terbaru
                    dari PT Jaya Abadi.
                </p>

            </div>


            <?php if (!empty($posts)): ?>

                <div class="row g-4">

                    <?php foreach ($posts as $index => $post): ?>

                        <?php
                            /*
                             * Lewati postingan pertama karena sudah
                             * ditampilkan sebagai featured.
                             */
                            if ($index === 0) {
                                continue;
                            }
                        ?>

                        <div class="col-md-6 col-lg-4">

                            <div class="card card-post">

                                <!-- IMAGE -->
                                <div class="post-image-wrapper">

                                    <img
                                        src="<?= !empty($post['image'])
                                            ? base_url('uploads/posts/' . $post['image'])
                                            : 'https://placehold.co/600x400/e9ecef/adb5bd?text=No+Image'; ?>"
                                        class="post-image"
                                        alt="<?= htmlspecialchars($post['title']); ?>"
                                    >

                                </div>


                                <!-- BODY -->
                                <div class="card-body">

                                    <div class="d-flex justify-content-between align-items-center mb-2">

                                        <span class="badge badge-category text-white">

                                            <?= htmlspecialchars(
                                                $post['category']
                                            ); ?>

                                        </span>


                                        <small class="text-muted">

                                            <i class="far fa-calendar-alt me-1"></i>

                                            <?= date(
                                                'd M Y',
                                                strtotime($post['created_at'])
                                            ); ?>

                                        </small>

                                    </div>


                                    <h5 class="card-title">

                                        <a
                                            href="<?= base_url(
                                                'landing/post_detail/' . $post['id']
                                            ); ?>"
                                            class="post-title"
                                        >

                                            <?= htmlspecialchars(
                                                $post['title']
                                            ); ?>

                                        </a>

                                    </h5>


                                    <p class="card-text small">

                                        <?= substr(
                                            strip_tags($post['content']),
                                            0,
                                            100
                                        ); ?>...

                                    </p>

                                </div>


                                <!-- FOOTER -->
                                <div class="card-footer bg-transparent border-0">

                                    <a
                                        href="<?= base_url(
                                            'landing/post_detail/' . $post['id']
                                        ); ?>"
                                        class="btn btn-sm btn-outline-primary w-100 fw-bold"
                                    >

                                        Baca Selengkapnya

                                        <i class="fas fa-arrow-right ms-1"></i>

                                    </a>

                                </div>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>


                <!-- =================================================
                     PAGINATION
                ================================================== -->
                <?php if (isset($total_pages) && $total_pages > 1): ?>

                    <div class="d-flex justify-content-center mt-5">

                        <nav>

                            <ul class="pagination">

                                <!-- PREVIOUS -->
                                <li class="page-item
                                    <?= ($current_page <= 1)
                                        ? 'disabled'
                                        : '' ?>">

                                    <a
                                        class="page-link"
                                        href="<?= base_url(
                                            'landing/post_detail/' . $post['id']
                                        ); ?>"
                                    >

                                        <i class="fas fa-chevron-left"></i>

                                    </a>

                                </li>


                                <!-- PAGE -->
                                <?php for (
                                    $i = 1;
                                    $i <= $total_pages;
                                    $i++
                                ): ?>

                                    <li class="page-item
                                        <?= ($i == $current_page)
                                            ? 'active'
                                            : '' ?>">

                                        <a
                                            class="page-link"
                                            href="<?= base_url(
                                                'landing/posts?page=' . $i
                                            ); ?>"
                                        >

                                            <?= $i; ?>

                                        </a>

                                    </li>

                                <?php endfor; ?>


                                <!-- NEXT -->
                                <li class="page-item
                                    <?= ($current_page >= $total_pages)
                                        ? 'disabled'
                                        : '' ?>">

                                    <a
                                        class="page-link"
                                        href="<?= base_url(
                                            'landing/posts?page=' .
                                            ($current_page + 1)
                                        ); ?>"
                                    >

                                        <i class="fas fa-chevron-right"></i>

                                    </a>

                                </li>

                            </ul>

                        </nav>

                    </div>

                <?php endif; ?>


            <?php else: ?>

                <!-- EMPTY -->
                <div class="empty-post">

                    <i class="fas fa-newspaper"></i>

                    <p>
                        Belum ada postingan yang dipublikasikan.
                    </p>

                </div>

            <?php endif; ?>

        </div>

    </section>


    <!-- =====================================================
         CTA TENTANG KAMI
    ====================================================== -->
    <section class="cta-section">

        <div class="container">

            <div class="cta-box">

                <div class="row align-items-center g-4">

                    <div class="col-lg-8">

                        <h3 class="fw-bold text-white mb-2">

                            Ingin Mengenal Jaya Abadi Lebih Dekat?

                        </h3>

                        <p class="text-white mb-0 opacity-75">

                            Kenali lebih jauh tentang perusahaan,
                            visi, misi, layanan, dan nilai-nilai
                            yang kami pegang.

                        </p>

                    </div>


                    <div class="col-lg-4 text-lg-end">

                        <a
                            href="<?= base_url('landing/about'); ?>"
                            class="btn btn-light px-4 fw-bold"
                        >

                            Tentang Kami

                            <i class="fas fa-arrow-right ms-1"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


</div>
