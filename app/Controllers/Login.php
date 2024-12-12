<?php

namespace App\Controllers;
use App\Models\ModelUser;



class Login extends BaseController
{
    protected $UserModel;
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->UserModel = new ModelUser();
    }

    public function index(): string
    {
        return view('Login/index.php');
    }
    

    public function login()
    {
        $nomor = $this->request->getPost('nomor');
        $password = $this->request->getPost('password');
        $cek_login = $this->UserModel->cekNomor($nomor);
        if ($cek_login->getNumRows() > 0) {
            $akun = $cek_login->getRowArray();
            $pw_valid = $akun['password'];
            if ($password == $pw_valid) {
                $newSession = [
                    'id' => $akun['id'],
                    'nama' => $akun['nama'],
                    'nomor_telepon' => $akun['nomor_telepon'],
                    'jabatan' => $akun['jabatan'],
                    'password' => $akun['password'],
                    'foto' => $akun['foto'],
                ];

                session()->set($newSession);
                session()->setFlashdata('success', 'Selamat Anda Berhasil Login');
                return redirect()->to(base_url('/'));
            } else {
                session()->setFlashdata('error', 'Username atau Password salah');
                return redirect()->to(base_url('login'));
            }
        } else {
            session()->setFlashdata('error', 'Username atau Password salah');
            return redirect()->to(base_url('login'));
        }

    }


    public function logout()
    {
        
        $this->session->destroy();
        return redirect()->to(base_url('login'));
    }



}
