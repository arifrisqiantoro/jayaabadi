<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Pesan</title>
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
                        <h2 class="mb-4 text-secondary fw-bold fs-4">Detail Pesan Masuk</h2>
                        <form>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Pengirim</label>
                                <input type="text" class="form-control bg-light" value="<?= $pesan->nama ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Subjek</label>
                                <input type="text" class="form-control bg-light" value="<?= $pesan->subjek ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email</label>
                                <input type="text" class="form-control bg-light" value="<?= $pesan->email ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Telepon</label>
                                <input type="text" class="form-control bg-light" value="<?= $pesan->telepon ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Pesan</label>
                                <textarea class="form-control bg-light" rows="5" readonly><?= $pesan->pesan ?></textarea>
                            </div>

                            <div class="d-flex justify-content-end mt-4">
                                <button type="button" class="btn btn-secondary px-4" onclick="window.history.back()">
                                    <i class="bi bi-arrow-left me-1"></i> Kembali
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
