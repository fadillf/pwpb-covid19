<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RsUserController extends Controller
{
    public function index()
    {
        $data['rs'] = DB::table('table_rs')->orderBy('nama_rs', 'ASC')->get();
        return view('user/rumahsakit', $data);
    }
}
