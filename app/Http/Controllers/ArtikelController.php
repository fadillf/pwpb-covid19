<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Artikel;
use App\Kategori;

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
        $artikel = Artikel::orderByDesc('created_at')->get();
        return view('admin/tabelArtikel', compact('artikel'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::select('id', 'nama_kategori')->get();
        return view('admin.formArtikel', compact('kategori'));
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
        $input['slug'] = \Str::slug($request->judul);
        
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();
        
        
        $imageName = $request->gambar->getClientOriginalName();  
        $input['gambar'] = $imageName;
        $request->gambar->move(public_path('uploads/artikel'), $imageName);

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
        $artikel = Artikel::find($id);
        $kategori = Kategori::all();
        return view('admin.formArtikel', compact('artikel'), compact('kategori'));
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
        $input['slug'] = \Str::slug($req->judul);
        $input['updated_at'] = Carbon::now();
        
        if(!empty($input['gambar'])){
            $imageName = $req->gambar->getClientOriginalName();  
            $input['gambar'] = $imageName;
            $req->gambar->move(public_path('uploads/artikel'), $imageName);
        }

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
