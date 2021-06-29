<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_add;
use Illuminate\Support\Carbon;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $data = User_add::get();
        return view('admin.index', compact('data'));
    }


    public function save(Request $request)
    {
        // dd($request->all());
        $user = User_add::Create([
            'firstname' =>  $request->firstname,
            'lastname' =>  $request->lastname,
            'sex' =>  $request->sex,
            'career' =>  $request->career,
            'dateB' => date('Y-m-d' , strtotime($request->dateB))
        ]);

        return redirect('/')->with('success', 'บันทึกข้อมูลสำเร็จ');
    }

    public function profile($id)
    {
        $data = User_add::where('id',$id)->first();
        return view('users.profile', compact('data'));
    
    }
}
