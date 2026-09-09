<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT Jaya Abadi - Login</title>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: #1abc9c;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 15px;
            font-family: 'Lato', sans-serif;
        }

        .login-wrapper {
            width: 100%;
            max-width: 430px;
        }

        .login-card {
            background: #fff;
            border-radius: 15px;
            padding: 40px 35px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .login-logo {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            background: #2c3e50;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 30px;
        }

        .company-name {
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            font-size: 18px;
            text-align: center;
            color: #2c3e50;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        .form-label {
            font-weight: 700;
            color: #2c3e50;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px 14px;
        }

        .form-control:focus {
            border-color: #1abc9c;
            box-shadow: 0 0 0 .2rem rgba(26, 188, 156, .20);
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            background: #1abc9c;
            border-color: #1abc9c;
            font-weight: 700;
        }

        .btn-login:hover {
            background: #159a80;
            border-color: #159a80;
        }
    </style>
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">

        <!-- Logo -->
        <div class="login-logo">
            <i class="fas fa-lock"></i>
        </div>

        <!-- Company -->
        <div class="company-name">
            PT Jaya Abadi
        </div>

        <!-- Login Form -->
        <form action="<?= base_url('login/login_action'); ?>" method="post">

            <!-- Username -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" autocomplete="off" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary btn-login">
                <i class="fas fa-right-to-bracket me-2"></i>
                Login
            </button>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <?= $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
        </form>

</div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
