<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
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
            <div class="col-md-7">
                
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('success') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                
                <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('error') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h2 class="mb-4 text-secondary fw-bold fs-4">Edit User</h2>

                        <?php if (!empty($user['photo'])): ?>
                            <div class="text-center mb-4">
                                <img src="<?= base_url('uploads/profile/' . $user['photo']) ?>" alt="Foto User" class="rounded-circle shadow-sm" style="width: 90px; height: 90px; object-fit: cover;">
                            </div>
                        <?php endif; ?>

                        <form action="<?= base_url('users/update') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $this->uri->segment(3) ?>">

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Username</label>
                                <input type="text" name="username" class="form-control bg-light" value="<?= $user['username'] ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?= $user['nama'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Password</label>
                                <input type="text" name="password" class="form-control" value="<?= $user['password'] ?>" placeholder="Masukkan password baru jika ingin mengubah">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Role</label>
                                <select name="role" class="form-select" required>
                                    <option value="Admin" <?= (strtolower($user['role']) === 'admin') ? 'selected' : '' ?>>Admin</option>
                                    <option value="User" <?= (strtolower($user['role']) === 'user') ? 'selected' : '' ?>>User</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Ganti Foto <span class="text-muted fw-normal">(kosongkan jika tidak ingin ganti)</span></label>
                                <input type="file" name="photo" class="form-control" accept="image/*">
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary px-4" onclick="window.location.href='<?= base_url('users') ?>'">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
