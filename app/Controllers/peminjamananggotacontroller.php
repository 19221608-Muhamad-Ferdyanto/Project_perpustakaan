<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PeminjamanModel;

class peminjamananggotacontroller extends BaseController
{
    public function show()
    {
        $anggota=session()->get('anggota');
        $anggotaId=$anggota['id'];
        $m = new PeminjamanModel();
 
         return view('peminjamananggota/tampildata', [
             'data_peminjaman' => $m->where('tb_anggota_id', $anggotaId)->findAll()
         ]);
    }
}