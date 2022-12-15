<?php

// untuk mengakses folder dari luar
namespace App\Controllers\pengelola;

use App\Controllers\BaseController;
use App\Models\AuthModel;



class Auth extends BaseController
{
    function __construct()
    {
        $this->user = new AuthModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Wisata'
        ];
        return view('pengelola/sign-in.php', $data);
    }
    public function process_signup()
    {
        if (!$this->validate([
            'nama_pemilik' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => '{field} Isi dengan alamat email yang benar',
                    'is_unique' => 'Email sudah digunakan sebelumnya',
                ]
            ],
            'contact' => [
                'rules' => 'required|min_length[11]|max_length[20]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 11 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                ]
            ],
            'alamat' => [
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 10 Karakter',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'password_verif' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $this->user->insert([
            'nama_pemilik' => $this->request->getVar('nama_pemilik'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'contact' => $this->request->getVar('contact'),
            'alamat' => $this->request->getVar('alamat'),
            'is_active' => 1

        ]);
        return redirect()->to('/auth');
    }
    public function process_signin()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataUser = $this->user->where([
            'email' => $email,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'id' => $dataUser->id,
                    'nama_pemilik' => $dataUser->nama_pemilik,
                    'email' => $dataUser->email,
                    'password' => $dataUser->password,
                    'contact' => $dataUser->contact,
                    'alamat' => $dataUser->alamat,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('home-admin'));
            } else {
                session()->setFlashdata('error', 'Email & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Email & Password Salah');
            return redirect()->back();
        }
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to('/auth');
    }
    public function signUp()
    {
        $data = [
            'title' => 'Wisata'
        ];
        return view('pengelola/sign-up.php', $data);
    }
}
