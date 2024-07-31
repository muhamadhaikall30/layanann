<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
    body {
        background-color: #f0f2f5;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-container {
        display: flex;
        height: 100vh;
        align-items: center;
        justify-content: center;
        background: linear-gradient(to right, #ffffff, #e2e8f0);
    }

    .login-image {
        flex: 1;
        background: url('assets/img/homee.jpg') no-repeat center center;
        background-size: cover;
        height: 100%;
        border-radius: 10px 0 0 10px;
    }

    .login-form {
        flex: 1;
        max-width: 400px;
        padding: 2rem;
        margin-left: 2rem;
        /* Menambahkan margin kiri untuk menghindari form terlalu mepet ke kanan */
        background: #ffffff;
        border-radius: 0 10px 10px 0;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header,
    .card-footer {
        background: #f8f9fc;
        border: none;
        padding: 1rem;
    }

    .card-header {
        border-bottom: 1px solid #e3e6f0;
    }

    .btn-primary {
        background-color: #4e73df;
        border: none;
        padding: 0.75rem 1.25rem;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 0.375rem;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #2e59d9;
    }

    .alert-danger {
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        border-radius: 0.375rem;
    }

    @media (max-width: 768px) {
        .login-container {
            flex-direction: column;
        }

        .login-image {
            height: 200px;
            border-radius: 0;
        }

        .login-form {
            margin-left: 0;
            border-radius: 0;
        }
    }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-image"></div>
        <div class="login-form">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header text-center">
                    <h3 class="font-weight-light my-4">Login</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= site_url('loginPost') ?>">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                    <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>