<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', ['page' => 'home']);
    }

    public function profile()
    {
        return view('home', ['page' => 'profile']);
    }

    public function layanan()
    {
        return view('home', ['page' => 'layanan']);
    }

    public function kontak()
    {
        return view('home', ['page' => 'kontak']);
    }

    public function login()
    {
        return view('home', ['page' => 'login']);
    }

    public function register()
    {
        return view('home', ['page' => 'register']);
    }
}
