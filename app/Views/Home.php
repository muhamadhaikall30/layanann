<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
    .navbar {
        background-color: black;
    }

    .hero {
        position: relative;
        background-image: url('assets/img/homee.jpg');
        background-size: cover;
        background-position: center center;
        height: calc(100vh - 56px);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: black;
        opacity: 0.6;
    }

    .hero-content {
        position: relative;
        z-index: 1;
        text-align: center;
        color: white;
    }

    .hero img {
        max-width: 200px;
        height: auto;
    }

    .hero .btn {
        margin-top: 20px;
    }

    .profile-section {
        padding: 60px 0;
        background-color: #f8f9fa;
    }

    .profile-section h1,
    .profile-section p {
        text-align: center;
    }

    .profile-section p {
        max-width: 800px;
        margin: 20px auto;
    }

    .contact-info {
        text-align: center;
        margin-top: 40px;
    }

    .contact-item {
        margin-bottom: 20px;
    }

    .map {
        margin-top: 40px;
    }

    footer {
        background-color: #212529;
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    footer a {
        color: #f8f9fa;
        text-decoration: none;
    }

    footer a:hover {
        color: #adb5bd;
    }

    .divider {
        border-top: 1px solid #ddd;
        margin: 40px 0;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pelayanan Publik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#tentang">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#layanan">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#kontak">Kontak</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero" id="hero">
        <div class="hero-content">
            <img src="assets/img/Logoo1.svg" alt="Logo">
            <h1>Selamat datang di Website Pelayanan Publik Kecamatan Sukalarang</h1>
            <a href="#layanan" class="btn btn-primary">Telusuri Layanan</a>
        </div>
    </section>

    <div class="divider"></div>

    <section id="tentang" class="profile-section">
        <section class="jumbotron text-center">
            <img src="assets/img/Logoo1.svg" alt="Logo">
            <h1 class="display-4">Kecamatan Sukalarang</h1>
            <p class="lead">Sukalarang adalah sebuah kecamatan di Kabupaten Sukabumi, Provinsi Jawa Barat, Indonesia.
            </p>
        </section>

        <!-- About Section -->
        <section id="profile">
            <div class="container">
                <div class="row justify-content-center fs-5 text-center">
                    <div class="col-md-4">
                        <p><strong>Visi</strong></p>
                        <p>Membangun Sumber Daya Manusia yang Beriman, Berbudaya dan Berdaya Saing. Meningkatkan
                            Produktivitas dan Daya Saing Ekonomi Berbasis Agrobisnis, dan Pariwisata Berkelanjutan.
                            Meningkatkan Konektivitas untuk Percepatan, Pertumbuhan Wilayah. Meningkatkan Kualitas
                            Pelayanan Publik yang Inovatif, Profesional dan Akuntabel.</p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Misi</strong></p>
                        <p>Terwujudnya Kabupaten Sukabumi yang Religius, Maju dan Inovatif menuju Masyarakat Sejahtera
                            Lahir Batin</p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <div class="divider"></div>

    <!-- Layanan Section -->
    <section id="layanan" class="profile-section">
        <div class="container">
            <h2 class="text-center mb-5">Layanan Kami</h2>
            <p class="text-center mb-4">Di sini Anda dapat menemukan berbagai layanan yang kami tawarkan.</p>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Layanan KK</h5>
                            <p class="card-text flex-grow-1">Layanan pembuatan Kartu Keluarga (KK).</p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal"
                                data-bs-target="#modalKK">Akses Layanan</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Layanan KTP</h5>
                            <p class="card-text flex-grow-1">Layanan pembuatan Kartu Tanda Penduduk (KTP).</p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal"
                                data-bs-target="#modalKTP">Akses Layanan</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Layanan Akta</h5>
                            <p class="card-text flex-grow-1">Layanan pembuatan Akta Kelahiran, Kematian, dll.</p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal"
                                data-bs-target="#modalAkta">Akses Layanan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Layanan Surat Pindah Domisili</h5>
                            <p class="card-text flex-grow-1">Layanan Pindah Alamat.</p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal"
                                data-bs-target="#modalSuratPindahDomisili">Akses Layanan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <p>Jika Anda belum memiliki akun, silakan <a href="<?= base_url('register') ?>">Register</a>.</p>
                <p>Sudah punya akun? <a href="<?= base_url('login') ?>">Login</a> untuk akses lebih lanjut.</p>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- Contact Section -->
    <section id="kontak" class="profile-section">
        <div class="container">
            <h2 class="text-center mb-5">Kontak Kami</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Alamat</h5>
                            <p class="card-text">Jl. Raya Sukalarang No. 123, Sukabumi, Jawa Barat</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Telepon</h5>
                            <p class="card-text">(0266) 123456</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Email</h5>
                            <p class="card-text">info@sukalarang.go.id</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map text-center">
                <iframe src="https://www.google.com/maps/embed?pb=..." width="100%" height="450" style="border:0;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>© 2024 Pelayanan Publik Kecamatan Sukalarang. All Rights Reserved.</p>
            <p>Design by <a href="#">Tim Pengembangan</a>.</p>
        </div>
    </footer>

    <!-- Modal KK -->
    <div class="modal fade" id="modalKK" tabindex="-1" aria-labelledby="modalKKLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalKKLabel">Layanan KK</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Untuk mengakses layanan KK, silakan login atau daftar terlebih dahulu.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a href="<?= base_url('login') ?>" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal KTP -->
    <div class="modal fade" id="modalKTP" tabindex="-1" aria-labelledby="modalKTPLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalKTPLabel">Layanan KTP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Untuk mengakses layanan KTP, silakan login atau daftar terlebih dahulu.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a href="<?= base_url('login') ?>" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Akta -->
    <div class="modal fade" id="modalAkta" tabindex="-1" aria-labelledby="modalAktaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAktaLabel">Layanan Akta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Untuk mengakses layanan Akta, silakan login atau daftar terlebih dahulu.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a href="<?= base_url('login') ?>" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Surat Pindah Domisili -->
    <div class="modal fade" id="modalSuratPindahDomisili" tabindex="-1" aria-labelledby="modalSuratPindahDomisiliLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSuratPindahDomisiliLabel">Layanan Surat Pindah Domisili</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Untuk mengakses layanan Surat Pindah Domisili, silakan login atau daftar terlebih dahulu.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a href="<?= base_url('login') ?>" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"></script>
    <script src="<?= base_url('js/scripts.js') ?>"></script>
</body>

</html>