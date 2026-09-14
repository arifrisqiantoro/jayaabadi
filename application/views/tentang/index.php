<!-- About Section -->
<style>
    .about-hero {
    background: linear-gradient(135deg, #2980b9, #6dd5fa);
    padding: 150px 0 60px; /* <- atas dinaikkan jadi 100px */
    color: #fff;
    text-align: center;
}

    .about-hero h1 { font-weight: 700; }
    .about-hero p  { opacity: 0.9; max-width: 600px; margin: 0 auto; }

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

    .value-card {
        border: none;
        border-radius: 14px;
        padding: 28px 24px;
        background: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        height: 100%;
        transition: transform 0.3s ease;
    }

    .value-card:hover { transform: translateY(-4px); }

    .value-icon {
        width: 52px; height: 52px;
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-size: 22px;
        margin-bottom: 14px;
    }

    .icon-blue   { background: #dbeafe; color: #2980b9; }
    .icon-green  { background: #dcfce7; color: #27ae60; }
    .icon-purple { background: #ede9fe; color: #7c3aed; }
    .icon-orange { background: #ffedd5; color: #ea580c; }

    .team-card {
        border: none;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        background: #fff;
        text-align: center;
        padding: 28px 20px;
        height: 100%;
    }

    .team-avatar {
        width: 80px; height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, #2980b9, #6dd5fa);
        display: flex; align-items: center; justify-content: center;
        font-size: 28px; font-weight: 700; color: #fff;
        margin: 0 auto 14px;
    }

    .stat-number { font-size: 36px; font-weight: 700; color: #2980b9; }
    .stat-desc   { color: #6c757d; font-size: 14px; }

    .bg-light-blue { background: #f0f7ff; }
</style>

<!-- Hero -->
<section class="about-hero">
    <div class="container">
        <h1 class="display-6">Tentang Kami</h1>
        <p class="lead mt-2">Mengenal lebih dekat PT Jaya Abadi — visi, misi, dan nilai-nilai yang kami pegang.</p>
    </div>
</section>

<!-- Tentang Perusahaan -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="section-title">Siapa Kami</h2>
                <p class="text-muted">
                    PT Jaya Abadi adalah perusahaan yang bergerak di bidang teknologi dan jasa informasi,
                    berdiri sejak 2010 dengan komitmen menghadirkan solusi terbaik bagi klien dan mitra kami.
                </p>
                <p class="text-muted">
                    Dengan pengalaman lebih dari satu dekade, kami telah melayani ratusan klien dari berbagai
                    sektor industri di seluruh Indonesia, mulai dari UMKM hingga perusahaan skala nasional.
                </p>
                <p class="text-muted mb-0">
                    Kami percaya bahwa teknologi yang tepat dapat mengubah cara bisnis beroperasi dan
                    menciptakan dampak positif yang nyata bagi masyarakat luas.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="row g-3 text-center">
                    <div class="col-6">
                        <div class="p-4 bg-light-blue rounded-3">
                            <div class="stat-number">10+</div>
                            <div class="stat-desc">Tahun Berpengalaman</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-4 bg-light-blue rounded-3">
                            <div class="stat-number">500+</div>
                            <div class="stat-desc">Klien Terlayani</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-4 bg-light-blue rounded-3">
                            <div class="stat-number">50+</div>
                            <div class="stat-desc">Tim Profesional</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-4 bg-light-blue rounded-3">
                            <div class="stat-number">99%</div>
                            <div class="stat-desc">Kepuasan Klien</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visi Misi -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="value-card">
                    <div class="value-icon icon-blue">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h4 class="fw-bold">Visi</h4>
                    <p class="text-muted mb-0">
                        Menjadi perusahaan teknologi terdepan di Indonesia yang dipercaya oleh klien,
                        mitra, dan masyarakat dalam menghadirkan solusi digital yang inovatif dan berkelanjutan.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="value-card">
                    <div class="value-icon icon-green">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h4 class="fw-bold">Misi</h4>
                    <ul class="text-muted mb-0 ps-3">
                        <li class="mb-1">Menghadirkan produk dan layanan teknologi berkualitas tinggi.</li>
                        <li class="mb-1">Membangun hubungan jangka panjang yang saling menguntungkan.</li>
                        <li class="mb-1">Mendorong inovasi dan pengembangan SDM secara berkelanjutan.</li>
                        <li>Memberikan dampak positif bagi masyarakat dan lingkungan sekitar.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nilai Perusahaan -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center" style="padding-bottom:12px;">
            Nilai-Nilai Kami
        </h2>
        <p class="text-center text-muted mb-5">Prinsip yang menjadi landasan setiap langkah kami.</p>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="value-card text-center">
                    <div class="value-icon icon-blue mx-auto">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h6 class="fw-bold">Integritas</h6>
                    <p class="text-muted small mb-0">Kami menjunjung tinggi kejujuran dan transparansi dalam setiap tindakan.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="value-card text-center">
                    <div class="value-icon icon-green mx-auto">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h6 class="fw-bold">Inovasi</h6>
                    <p class="text-muted small mb-0">Kami terus berinovasi untuk menghadirkan solusi terbaik dan relevan.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="value-card text-center">
                    <div class="value-icon icon-purple mx-auto">
                        <i class="fas fa-users"></i>
                    </div>
                    <h6 class="fw-bold">Kolaborasi</h6>
                    <p class="text-muted small mb-0">Kami percaya hasil terbaik lahir dari kerja sama yang solid.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="value-card text-center">
                    <div class="value-icon icon-orange mx-auto">
                        <i class="fas fa-star"></i>
                    </div>
                    <h6 class="fw-bold">Kualitas</h6>
                    <p class="text-muted small mb-0">Standar kualitas tinggi adalah komitmen kami kepada setiap klien.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tim -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Tim Kami</h2>
        <p class="text-center text-muted mb-5">Orang-orang hebat di balik PT Jaya Abadi.</p>

        <div class="row g-4 justify-content-center">
            <div class="col-md-4 col-lg-3">
                <div class="team-card">
                    <div class="team-avatar">B</div>
                    <h6 class="fw-bold mb-0">Budi Santoso</h6>
                    <small class="text-muted">CEO & Founder</small>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="team-card">
                    <div class="team-avatar">S</div>
                    <h6 class="fw-bold mb-0">Siti Rahayu</h6>
                    <small class="text-muted">CTO</small>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="team-card">
                    <div class="team-avatar">A</div>
                    <h6 class="fw-bold mb-0">Ahmad Fauzi</h6>
                    <small class="text-muted">Head of Operations</small>
                </div>
            </div>
        </div>
    </div>
</section>
