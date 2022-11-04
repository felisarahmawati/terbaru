<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard_ad()
    {
        return view("admin.admin.dashboard_admin");
    }

    public function data_customer()
    {
        return view("admin.pengguna.user.customer");
    }
    public function data_vendor()
    {
        return view("admin.pengguna.user.vendor");
    }
    public function transaksi()
    {
        return view("admin.transaksi.transaksi");
    }
    
}
