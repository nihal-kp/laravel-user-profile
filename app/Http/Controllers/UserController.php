<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller
{
    //
    public function register(Request $req)
    {
        $this->validate($req, [
            'username' => 'required|min:5|unique:users',
            'password' => 'required|min:5|confirmed',
            'email' => 'required|unique:user_details|email|max:255',
            'date_of_birth' => 'required',
            'city' => 'required|min:5'
        ]);
        $user = new User;
        $user_detail = new UserDetail;
        $user->username = $req->username;
        $user->password = $req->password;
        $user_detail->email = $req->email;
        $user_detail->date_of_birth = $req->date_of_birth;
        $user_detail->city = $req->city;
        $user->save();
        $user_detail->save();
        return '<script>
                    alert("Registration successfully completed!! Please login"); 
                    window.location.href="/";
                </script>';
    }

    public function login(Request $req)
    {
        $user =  User::where(['username'=>$req->username,'password'=>$req->password])->first();
        if(!$user)
        {
            return '<script>
                        alert("Incorrect username and password!!"); 
                        window.location.href="/";
                    </script>';
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/profile');
        }
    }
}