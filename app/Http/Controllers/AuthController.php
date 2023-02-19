<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;   
use Illuminate\Validation\Rules;
use App\Models\User;

class AuthController extends Controller
{
    public function view_signup_page(){
        return view('auth.signup');
    }
    public function signup(Request $request)
    {
        $rules = [
            'nama_lengkap' => 'required|min:3|string|max:30',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'nomor_telepon' => 'required|unique:users,phone|min:8|max:12|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email' => 'required|unique:users,email',
            'password' => 'required|',
            'repeat_password' => 'required|same:password'
        ];
       


        $validator = Validator::make($request->all(),$rules);

        if($validator -> fails())
        {
            return back()->withErrors($validator);
        }
        // dd($validator);

        User::create([
            'name' => $request['nama_lengkap'],
            'dob' => $request['tanggal_lahir'],
            'gender' => $request['jenis_kelamin'],
            'phone' => $request['nomor_telepon'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        

        return redirect()->route('login_page')
        ->with('message','Sign Up Successfully. Please login!');
    }

    public function view_login_page()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );

        if(Auth::attempt($user_data)){

            $user = Auth::user();

            if($user->role == "user")
            {
                return redirect()->route('user_home');
            }
            else if ($user->role == "admin")
            {
                return redirect()->route('admin_home');
            }
        }
        else{
            return back()->withErrors(['message' => 'Sign In Failed!']);
        }
    }


}