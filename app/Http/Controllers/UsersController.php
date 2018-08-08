<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.users.index')
            ->with('users', User::all());
    }

    public function create()
    {
        return view('admin.users.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('123456')
        ]);

        $profile = Profile::create([
            'user_id' => $user->id,
            'avatar' => 'avatars/no-image-avatar.jpg',
        ]);
        Session::flash('success','User added Successfully');

        return redirect()->route('users');
    }



    public function admin($id)
    {
        $user = User::find($id);
        $user->admin = 1;
        $user->save();
        Session::flash('success','Successfully changed user permissions');
        return redirect()->back();
    }
    public function not_admin($id)
    {
        $user = User::find($id);
        $user->admin = 0;
        $user->save();
        Session::flash('success','Successfully changed user permissions');
        return redirect()->back();
    }
}
