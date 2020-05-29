<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Artikel;
use App\Kategori;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikelSlideBar = Artikel::latest()->get()->random(4);
        $artikel = Artikel::orderByDesc('created_at')->get();
        $kategori = Kategori::withCount('Artikel')->get();
        return view('user/informasi', compact('artikelSlideBar','artikel', 'kategori'));
    }
    public function kategori($slug)
    {
        $artikelSlideBar = Artikel::latest()->get()->random(4);
        $kategoriID = DB::table('table_kategori')->select('id')->where('slug', $slug)->get();
        $artikel = DB::table('table_artikel')->where('kategori_id', $kategoriID['0']->id)->get();
        $kategori = Kategori::withCount('Artikel')->get();

        return view('user/informasi', compact('artikelSlideBar','artikel', 'kategori', 'slug'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        $artikelDetail = $artikel;
        $kategori = Kategori::withCount('Artikel')->get();
        $artikelTerkait = Artikel::latest()->get()->random(3);
        return view ('user/detailArtikel', compact('artikelDetail', 'kategori', 'artikelTerkait'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
