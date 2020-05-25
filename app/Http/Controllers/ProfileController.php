<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
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

    public function edit(){
        $user = Auth::user();
        return view('admin/profile', compact('user'));
    }

    public function update(Request $request)
    {
        // $input;
        // $request->user()->update(
        //     $request->all()
        // );

        $rule = [
            'name' => 'required|string'
        ];

        $this->validate($request, $rule);

        $input = $request -> all();

        if(!empty($input['gambar'])){
            $imageName = $request->gambar->getClientOriginalName();  
            $input['gambar'] = $imageName;
            $request->gambar->move(public_path('uploads/profile'), $imageName);
        }

        unset($input['_token']);
        unset($input['_method']);

        $status = DB::table('users')->where('id', Auth::user()->id)->update($input);
        //return redirect()->route('profile');
    
        // $this->validate(request(), [
        //     'name' => 'required'
        // ]);

        // $user->name = request('name');

        // $user->save();

        //return back();

        if($status){
            return redirect('/profile')->with('success', 'Profile berhasil diperbaharui');
        }
        else{
            return redirect('/profile')->with('danger', 'Profile gagal diperbaharui');
        }
    }
}
