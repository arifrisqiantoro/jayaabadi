<!-- Kontak Section -->
<style>
    .kontak-hero {
        background: linear-gradient(135deg, #2980b9, #6dd5fa);
        padding: 150px 0 60px;
        color: #fff;
        text-align: center;
    }

    .kontak-hero h1 { font-weight: 700; }
    .kontak-hero p  { opacity: 0.9; max-width: 600px; margin: 0 auto; }

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

    .contact-card {
        border: none;
        border-radius: 14px;
        padding: 28px 24px;
        background: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        height: 100%;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .contact-card:hover { transform: translateY(-4px); }

    .contact-icon {
        width: 56px; height: 56px;
        border-radius: 14px;
        display: flex; align-items: center; justify-content: center;
        font-size: 22px;
        margin: 0 auto 14px;
    }

    .icon-blue   { background: #dbeafe; color: #2980b9; }
    .icon-green  { background: #dcfce7; color: #27ae60; }
    .icon-purple { background: #ede9fe; color: #7c3aed; }

    .form-card {
        border: none;
        border-radius: 14px;
        padding: 32px;
        background: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.06);
    }

    .form-control, .form-select {
        border-radius: 8px;
        padding: 10px 14px;
        font-size: 14px;
        border: 1px solid #dee2e6;
    }

    .form-control:focus, .form-select:focus {
        border-color: #2980b9;
        box-shadow: 0 0 0 3px rgba(41,128,185,0.15);
    }

    .form-label { font-weight: 500; font-size: 14px; }

    .btn-kirim {
        background: linear-gradient(135deg, #2980b9, #6dd5fa);
        border: none;
        border-radius: 8px;
        padding: 12px 32px;
        font-weight: 600;
        color: #fff;
        width: 100%;
        transition: opacity 0.2s;
    }

    .btn-kirim:hover { opacity: 0.9; color: #fff; }

    .map-wrapper {
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.06);
    }
</style>

<!-- Hero -->
<section class="kontak-hero">
    <div class="container">
        <h1 class="display-6">Hubungi Kami</h1>
        <p class="lead mt-2">Ada pertanyaan atau ingin bekerja sama? Kami siap membantu Anda.</p>
    </div>
</section>

<!-- Info Kontak -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon icon-blue">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h6 class="fw-bold">Alamat</h6>
                    <p class="text-muted small mb-0">
                       Jl. Jenderal Sudirman No. 123, Cilacap, Jawa Tengah
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon icon-green">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h6 class="fw-bold">Telepon</h6>
                    <p class="text-muted small mb-0">
                        +62 21 1234 5678<br>
                        +62 812 3456 7890<br>
                        Senin – Jumat, 08.00 – 17.00
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon icon-purple">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h6 class="fw-bold">Email</h6>
                    <p class="text-muted small mb-0">
                        info@jayaabadi.co.id<br>
                        support@jayaabadi.co.id<br>
                        hrd@jayaabadi.co.id
                    </p>
                </div>
            </div>
        </div>

        <!-- Form + Map -->
        <div class="row g-4 align-items-start">

            <!-- Form -->
            <div class="col-lg-6">
                <div class="form-card">
                    <h4 class="fw-bold mb-1">Kirim Pesan</h4>
                    <p class="text-muted small mb-4">Isi formulir di bawah dan kami akan segera menghubungi Anda.</p>

                    <!-- Flash -->
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show">
                            <i class="fas fa-check-circle me-2"></i><?= $this->session->flashdata('success') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('landing/kirim_pesan') ?>" method="post" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="email@kamu.com" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">No. Telepon</label>
                                <input type="text" name="telepon" class="form-control" placeholder="08xx-xxxx-xxxx">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Subjek</label>
                                <select name="subjek" class="form-select">
                                    <option value="">-- Pilih Subjek --</option>
                                    <option>Informasi Produk</option>
                                    <option>Kerja Sama</option>
                                    <option>Pengaduan</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Pesan</label>
                                <textarea name="pesan" class="form-control" rows="5"
                            placeholder="Tulis pesan Anda di sini..." required></textarea>
                            </div>
							<div class="col-12">
								<label class="form-label">Lampiran</label>
								<input type="file" name="lampiran" class="form-control">
								<div class="form-text">Format yang diizinkan: PDF, JPG, PNG</div>
							</div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-kirim">
                                    <i class="fas fa-paper-plane me-2"></i> Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Map -->
            <div class="col-lg-6">
				<div class="map-wrapper">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5892865845!2d109.00656!3d-7.7259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7b6e3b3b3b3b3b%3A0x3b3b3b3b3b3b3b3b!2sAlun-Alun%20Cilacap!5e0!3m2!1sid!2sid!4v1234567890"
						width="100%" height="420"
						style="border:0; display:block;"
						allowfullscreen=""
						loading="lazy">
					</iframe>
				</div>

                <!-- Sosmed -->
                <div class="form-card mt-4">
                    <h6 class="fw-bold mb-3">Ikuti Kami</h6>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-outline-primary btn-sm px-3">
                            <i class="fab fa-facebook-f me-1"></i> Facebook
                        </a>
                        <a href="#" class="btn btn-outline-info btn-sm px-3">
                            <i class="fab fa-twitter me-1"></i> Twitter
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm px-3">
                            <i class="fab fa-instagram me-1"></i> Instagram
                        </a>
                        <a href="#" class="btn btn-outline-success btn-sm px-3">
                            <i class="fab fa-whatsapp me-1"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
