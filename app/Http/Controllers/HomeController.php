<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countKategori = DB::table('table_kategori')->count();
        $countArtikel = DB::table('table_artikel')->count();
        return view('admin/dashboard', compact('countKategori', 'countArtikel'));
    }

    public function profile()
    {
        return view('admin/profile');
    }
    public function tableArtikel()
    {
        return view('admin/tabelArtikel');
    }
}
