<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Login extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function attempt()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $adminModel = new AdminModel();

        $admin = $adminModel
            ->where('username', $username)
            ->first();

        if ($admin && password_verify($password, $admin['password'])) {

            session()->set([
                'id_admin'  => $admin['id_admin'],
                'username'  => $admin['username'],
                'logged_in' => true
            ]);

            return redirect()->to('/dashboard');
        }

        return redirect()->back()->with(
            'error',
            'Username atau password salah.'
        );
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}