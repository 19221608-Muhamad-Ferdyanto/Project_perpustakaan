<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class bukuanggotacontroller extends BaseController
{
    public function show()
    {
        $m = new BukuModel();
 
         return view('bukuanggota/tampildata', [
             'data_buku' => $m->findAll()
         ]);
    }
}