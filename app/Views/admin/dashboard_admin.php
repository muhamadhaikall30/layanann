<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>"> <!-- Sesuaikan dengan lokasi file CSS Anda -->
</head>

<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <ul>
                <li><a href="<?= base_url('/admin/users'); ?>">Kelola Pengguna</a></li>
                <li><a href="<?= base_url('/admin/settings'); ?>">Pengaturan</a></li>
                <li><a href="<?= base_url('/logout'); ?>">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Selamat datang, <?= session()->get('username'); ?></h2>
        <p>Ini adalah halaman utama dashboard admin. Anda bisa menambahkan konten lainnya sesuai kebutuhan aplikasi
            Anda.</p>

        <!-- Contoh tabel pengguna -->
        <h3>Daftar Pengguna</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data pengguna -->
                <tr>
                    <td>1</td>
                    <td>admin</td>
                    <td>Admin</td>
                    <td><a href="<?= base_url('/admin/edit_user/1'); ?>">Edit</a> | <a
                            href="<?= base_url('/admin/delete_user/1'); ?>">Hapus</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>user1</td>
                    <td>User</td>
                    <td><a href="<?= base_url('/admin/edit_user/2'); ?>">Edit</a> | <a
                            href="<?= base_url('/admin/delete_user/2'); ?>">Hapus</a></td>
                </tr>
                <!-- Tambahkan baris pengguna lainnya di sini -->
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>
</body>

</html>