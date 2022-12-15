<?php

// untuk mengakses folder dari luar
namespace App\Controllers\pengelola;

use App\Controllers\BaseController;
use App\Models\WisataModel;
use App\Models\AuthModel;

class HomeAdmin extends BaseController
{
    function __construct()
    {
        $this->wisata = new WisataModel();
        $this->user = new AuthModel();
    }
    public function index()
    {
        $data = [
            'title' => 'HOME-ADMIN'
        ];
        return view('pengelola/index', $data);
    }
    public function tambahWisata()
    {
        $data = [
            'title' => 'Wisata'
        ];
        return view('pengelola/wisata', $data);
    }
    public function editWisata($id_wisata)
    {
        $data = [
            'title' => 'Wisata',
            'getdatabyid' => $this->wisata->getDataById($id_wisata)
        ];
        return view('pengelola/edit-wisata', $data);
    }
    public function panorama($id_wisata)
    {
        $data = [
            'title' => 'Add Panorama',
            'insertpano' => $this->pano->insertPano($id_wisata)
        ];
        return view('pengelola/panorama', $data);
    }


    public function listwisata()
    {
        $data = [
            'title' => 'All Data',
            'getbyid' => $this->wisata->getById()
        ];
        return view('pengelola/all-wisata', $data);
    }
    public function editProfile()
    {
        $data = [
            'title' => 'Edit Profile'
        ];
        return view('pengelola/edit-profile', $data);
    }
    public function profile()
    {
        if (!$this->validate([
            'nama_pemilik' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Nama Harus diisi',
                    'min_length' => 'Nama Minimal 4 Karakter',
                    'max_length' => 'Nama Maksimal 100 Karakter',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email Harus diisi',
                    'valid_email' => 'Email Isi dengan alamat email yang benar'
                ]
            ],
            'contact' => [
                'rules' => 'required|min_length[11]|max_length[20]',
                'errors' => [
                    'required' => 'Kontak Harus diisi',
                    'min_length' => 'Kontak Minimal 11 Karakter',
                    'max_length' => 'Kontak Maksimal 20 Karakter',
                ]
            ],
            'alamat' => [
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' => 'Alamat Harus diisi',
                    'min_length' => 'Alamat Minimal 10 Karakter',
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $id = session()->id;
        $data = [
            'nama_pemilik' => $this->request->getVar('nama_pemilik'),
            'email' => $this->request->getVar('email'),
            'contact' => $this->request->getVar('contact'),
            'alamat' => $this->request->getVar('alamat'),
            'is_active' => 1

        ];
        $this->user->where('id', $id);
        $this->user->set($data);
        $this->user->update($id, $data);
        echo '<script type="text/javascript">alert("Update Berhasil")</script>';
        session()->destroy();
        return redirect()->to('/auth');
    }
    public function password()
    {
        if (!$this->validate([
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
            session()->setFlashdata('error1', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $id = session()->id;
        $data = [
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)

        ];
        $this->user->where('id', $id);
        $this->user->set($data);
        $this->user->update($id, $data);
        echo '<script type="text/javascript">alert("Update Berhasil")</script>';
        session()->destroy();
        return redirect()->to('/auth');
    }
}
