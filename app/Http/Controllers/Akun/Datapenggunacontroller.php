<?php

namespace App\Http\Controllers\Akun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Datapenggunacontroller extends Controller
{
    public function vendor()
    {
        return view("superadmin.akun.pengguna.users.vendor");
    }
    public function customer()
    {
        return view("superadmin.akun.pengguna.users.customer");
    }
    public function admin()
    {
        return view("superadmin.akun.pengguna.users.admin");
    }
    public function finance()
    {
        return view("superadmin.akun.pengguna.users.finance");
    }

    public function verifikasi_vendor()
    {
        return view("superadmin.verifikasi.data_vendor");
    }
    public function verifikasi_layanan()
    {
        return view("superadmin.verifikasi.verifikasi_layanan");
    }
}
