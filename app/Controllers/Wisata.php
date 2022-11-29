<?php

namespace App\Controllers;

use App\Models\WisataModel;
use Myth\Auth\Models\UserModel;

class Wisata extends BaseController
{
    public function index()
    {
        $users = new UserModel();
        // memanggil fungsi getdata pada model
        $data = $users->getData();
    }
}
