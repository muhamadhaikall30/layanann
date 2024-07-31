<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Pastikan pengguna telah login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // Ambil data yang diperlukan untuk dashboard admin
        $data = [
            'username' => 'Admin', // Ganti dengan nama pengguna yang sesuai
        ];

        return view('admin/dashboard', $data);
    }
}