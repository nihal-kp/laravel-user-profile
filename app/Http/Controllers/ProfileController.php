<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Models\UserDetail;

class ProfileController extends Controller
{
    //
    public function profile()
    {
        $userId = Session::get('user')['id'];
        $user = User::find($userId);
        $user_detail = UserDetail::find($userId);
        return view ('profile',['user'=>$user,'user_detail'=>$user_detail]);
    }

    public function edit()
    {
        $userId = Session::get('user')['id'];
        $user = User::find($userId);
        $user_detail = UserDetail::find($userId);
        return view ('edit',['user'=>$user,'user_detail'=>$user_detail]);
    }

    public function update(Request $req)
    {
        $req->validate([
            'username' => 'required|min:5',
            'password' => 'required|min:5',
            'email' => 'email',
            'city' => 'required|min:5'
        ]);
        $userId = Session::get('user')['id'];
        $user = User::find($userId);
        $user_detail = UserDetail::find($userId);
        $user->username = $req->username;
        $user->password = $req->password;
        $user_detail->email = $req->email;
        $user_detail->date_of_birth = $req->date_of_birth;
        $user_detail->city = $req->city;
        $user->save();
        $user_detail->save();
        return '<script>
                    alert("Details updated"); 
                    window.location.href="/profile";
                </script>';
    }
}
