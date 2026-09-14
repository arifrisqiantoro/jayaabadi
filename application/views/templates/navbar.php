<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container-fluid px-4">
       <a class="navbar-brand py-0" href="<?= base_url('dashboard'); ?>">
                <img src="<?= base_url('assets/img/logo/logo.png'); ?>" alt="Logo PT Jaya Abadi" height="75" class="d-inline-block align-middle">
            </a>
        <div class="d-flex align-items-center gap-3">
            <a class="nav-link text-white d-inline" href="<?= base_url('dashboard') ?>">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <?php if ($this->session->userdata('role') === 'admin'): ?>
                <a class="nav-link text-white d-inline" href="<?= base_url('users') ?>">
                    <i class="bi bi-people"></i> Data User
                </a>
            <?php endif; ?>
            <a class="nav-link text-white d-inline" href="<?= base_url('posts') ?>">
                <i class="bi bi-file-earmark-text"></i> Postingan
            </a>
            <a class="nav-link text-white d-inline" href="<?= base_url('pesan') ?>">
                <i class="bi bi-envelope"></i> Pesan
            </a>
            <form action="<?= base_url('login/logout') ?>" method="post" class="d-inline m-0">
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </div>
    </div>
</nav>
