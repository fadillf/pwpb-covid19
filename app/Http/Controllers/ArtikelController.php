<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArtikelController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['artikel'] = DB::table('table_artikel')->get();
        return view('admin/tabelArtikel', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formArtikel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = [
            'judul' => 'required|string',
            'kategori_id' => 'required|string',
            'isi' => 'required|string'
        ];
        
        $this->validate($request, $rule);
        $input = $request -> all();
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();
        unset($input['_token']);
        $status = DB::table('table_artikel')->insert($input);

        if($status){
            return redirect('/artikel')->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect('/artikel/tambah')->with('error', 'Data gagal ditambahkan');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['artikel'] = DB::table('table_artikel')->find($id);
        return view('admin.formArtikel', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $rule = [
            'judul' => 'required|string',
            'isi' => 'required|string'
        ];

        $this->validate($req, $rule);

        $input = $req -> all();
        $input['updated_at'] = Carbon::now();
        unset($input['_token']);
        unset($input['_method']);
        

        $status = DB::table('table_artikel')->where('id', $id)->update($input);

        if($status){
            return redirect('/artikel')->with('success', 'Data berhasil diperbaharui');
        }else{
            return redirect('/artikel/tambah')->with('error', 'Data gagal diperbaharui');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = DB::table('table_artikel')->where('id', $id)->delete();
        if($status){
            return redirect('/artikel')->with('success', 'Data berhasil dihapus');
        }else{
            return redirect('/artikel/tambah')->with('error', 'Data gagal dihapus');
        }
    }
}
