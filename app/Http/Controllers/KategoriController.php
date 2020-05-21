<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
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
        $data['kategori'] = DB::table('table_kategori')->get();
        return view('admin/tabelKategori', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formKategori');
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
            'nama_kategori' => 'required|string',
            'slug' => 'required|string'
        ];

        $this->validate($request, $rule);

        $input = $request -> all();
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();

        unset($input['_token']);
        $status = DB::table('table_kategori')->insert($input);

        if($status){
            return redirect('/kategori')->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect('/kategori/tambah')->with('error', 'Data gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['kategori'] = DB::table('table_kategori')->find($id);
        return view('admin.formKategori', $data);
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
            'nama_kategori' => 'required|string',
            'slug' => 'required|string'
        ];
        $this->validate($req, $rule);

        $input = $req -> all();
        $input['updated_at'] = Carbon::now();
        
        unset($input['_token']);
        unset($input['_method']);

        $status = DB::table('table_kategori')->where('id', $id)->update($input);

        if($status){
            return redirect('/kategori')->with('success', 'Data berhasil diperbaharui');
        }else{
            return redirect('/kategori/tambah')->with('error', 'Data gagal diperbaharui');
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
        $status = DB::table('table_kategori')->where('id', $id)->delete();
        if($status){
            return redirect('/kategori')->with('success', 'Data berhasil dihapus');
        }else{
            return redirect('/kategori/create')->with('error', 'Data gagal dihapus');
        }
    }
}
