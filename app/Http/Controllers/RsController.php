<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RsController extends Controller
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
        $data['rs'] = DB::table('table_rs')->get();
        return view('admin/tabelRs', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formRs');
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
            'nama_rs' => 'required|string',
            'alamat' => 'required|string',
            'no_telp' => 'required|string'
        ];

        $this->validate($request, $rule);

        $input = $request -> all();

        unset($input['_token']);
        $status = DB::table('table_rs')->insert($input);

        if($status){
            return redirect('/admin/rumahsakit')->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect('/admin/rumahsakit/tambah')->with('error', 'Data gagal ditambahkan');
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
        $data['rs'] = DB::table('table_rs')->find($id);
        return view('admin.formRs', $data);
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
            'nama_rs' => 'required|string',
            'alamat' => 'required|string',
            'no_telp' => 'required|string'
        ];
        $this->validate($req, $rule);

        $input = $req -> all();

        unset($input['_token']);
        unset($input['_method']);

        $status = DB::table('table_rs')->where('id', $id)->update($input);

        if($status){
            return redirect('/admin/rumahsakit')->with('success', 'Data berhasil diperbaharui');
        }else{
            return redirect('/admin/rumahsakit/tambah')->with('error', 'Data gagal diperbaharui');
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
        $status = DB::table('table_rs')->where('id', $id)->delete();
        if($status){
            return redirect('/admin/rumahsakit')->with('success', 'Data berhasil dihapus');
        }else{
            return redirect('/admin/rumahsakit')->with('error', 'Data gagal dihapus');
        }
    }
}
