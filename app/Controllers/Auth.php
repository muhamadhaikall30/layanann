<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function loginPage()
    {
        return view('login'); // Pastikan nama file view adalah 'login.php' di folder 'app/Views'
    }

    public function masuk()
    {
        helper(['form']);
        $session = session();

        if ($this->request->getMethod() == 'post') {
            // Validasi form input
            $rules = [
                'username' => 'required',
                'password' => 'required|min_length[6]'
            ];

            if ($this->validate($rules)) {
                $model = new UserModel();
                $username = $this->request->getVar('username');
                $password = $this->request->getVar('password');
                $user = $model->getUserByUsername($username);

                if ($user) {
                    // Periksa password
                    if (password_verify($password, $user['password'])) {
                        $session->set([
                            'id' => $user['id'],
                            'username' => $user['username'],
                            'role' => $user['role'],
                            'isLoggedIn' => true
                        ]);

                        // Redirect berdasarkan role
                        if ($user['role'] == 1) { // Admin role
                            return redirect()->to('/dashboard_admin');
                        } else if ($user['role'] == 2) { // User role
                            return redirect()->to('/user/dashboard');
                        } else {
                            $session->setFlashdata('error', 'Role tidak dikenali.');
                            return redirect()->to('/login');
                        }
                    } else {
                        $session->setFlashdata('error', 'Password salah.');
                        return redirect()->to('/login');
                    }
                } else {
                    $session->setFlashdata('error', 'Username tidak ditemukan.');
                    return redirect()->to('/login');
                }
            } else {
                // Jika validasi gagal, kembalikan ke halaman login dengan error
                $session->setFlashdata('error', 'Validasi gagal.');
                return redirect()->to('/login');
            }
        }

        return view('login'); // Pastikan nama file view adalah 'login.php' di folder 'app/Views'
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}