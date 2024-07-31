<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?= site_url('admin-dashboard') ?>">Dashboard Admin</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?= site_url('admin-dashboard/logout') ?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?= site_url('admin-dashboard') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Pendaftaran
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= site_url('manage-kk') ?>">KK</a>
                                <a class="nav-link" href="<?= site_url('manage-ktp') ?>">KTP</a>
                                <a class="nav-link" href="<?= site_url('manage-akta') ?>">Akta</a>
                                <a class="nav-link" href="<?= site_url('manage-surat-pindah') ?>">Surat Pindah
                                    Domisili</a>
                            </nav>
                        </div>
                        <!-- Tambahkan bagian berikut untuk Surat Pengantar -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseSuratPengantar" aria-expanded="false"
                            aria-controls="collapseSuratPengantar">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                            Surat Pengantar
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseSuratPengantar" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= site_url('manage-surat-pengantar-kk') ?>">Surat Pengantar
                                    KK</a>
                                <a class="nav-link" href="<?= site_url('manage-surat-pengantar-ktp') ?>">Surat Pengantar
                                    KTP</a>
                                <a class="nav-link" href="<?= site_url('manage-surat-pengantar-akta') ?>">Surat
                                    Pengantar Akta</a>
                                <a class="nav-link" href="<?= site_url('manage-surat-pengantar-pindah') ?>">Surat
                                    Pengantar Pindah Domisili</a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="<?= site_url('charts') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Grafik Laporan Pendaftaran
                        </a>
                        <a class="nav-link" href="<?= site_url('tables') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Data Pendaftaran
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Batas dashboard admin -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Selamat Datang, <?= esc($username) ?>, Di Dashboard Admin</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Jumlah Pendaftaran</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">3</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Jumlah Di Proses</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">3</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Jumlah Selesai</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">1</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Pendaftaran Perminggu
                                </div>
                                <div class="card-body">
                                    <canvas id="weeklyChart" width="100%" height="40"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Pendaftaran Perbulan
                                </div>
                                <div class="card-body">
                                    <canvas id="monthlyChart" width="100%" height="40"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Website Admin 2024</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="<?= base_url('js/scripts.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" crossorigin="anonymous"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Data untuk pendaftaran per minggu
        var weeklyData = {
            labels: ["Minggu 1", "Minggu 2", "Minggu 3", "Minggu 4"],
            datasets: [{
                label: "Pendaftaran Perminggu",
                backgroundColor: "rgba(2,117,216,1)",
                borderColor: "rgba(2,117,216,1)",
                data: <?= $weeklyData ?> // Data dari PHP
            }]
        };

        // Data untuk pendaftaran per bulan
        var monthlyData = {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                "Oktober", "November", "Desember"
            ],
            datasets: [{
                label: "Pendaftaran Perbulan",
                backgroundColor: "rgba(92,184,92,1)",
                borderColor: "rgba(92,184,92,1)",
                data: <?= $monthlyData ?> // Data dari PHP
            }]
        };

        // Membuat grafik pendaftaran per minggu
        var ctxWeekly = document.getElementById("weeklyChart").getContext("2d");
        new Chart(ctxWeekly, {
            type: 'line',
            data: weeklyData,
            options: {
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'week'
                        },
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: 100, // Sesuaikan dengan data Anda
                            maxTicksLimit: 5
                        },
                        gridLines: {
                            display: true
                        }
                    }]
                },
                legend: {
                    display: false
                }
            }
        });

        // Membuat grafik pendaftaran per bulan
        var ctxMonthly = document.getElementById("monthlyChart").getContext("2d");
        new Chart(ctxMonthly, {
            type: 'bar',
            data: monthlyData,
            options: {
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'month'
                        },
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            maxTicksLimit: 12
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: 150, // Sesuaikan dengan data Anda
                            maxTicksLimit: 5
                        },
                        gridLines: {
                            display: true
                        }
                    }]
                },
                legend: {
                    display: false
                }
            }
        });
    });
    </script>
</body>

</html>