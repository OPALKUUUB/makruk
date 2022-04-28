<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    function index()
    {
        return view('frontend.index');
    }
    function login()
    {
        return view('frontend.login');
    }
    function checklogin(Request $request)
    {
        // This is check for validate
        $request->validate([
            'username'      =>  'required',
            'password'      =>  'required',
        ]);

        $user_data = array(
            'username'      =>  $request->get('username'),
            'password'      =>  $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return redirect('home');
        } else {
            return back()->with('error', 'username or passowrd is wrong!');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    function register()
    {
        return view('frontend.register');
    }

    function checkregister(Request $request)
    {

        $request->validate(
            [
                'username'          =>      'required',
                'email'             =>      'required|email|unique:users,email',
                'password'          =>      'required',
                'confirm_password'  =>      'required|same:password'
            ]
        );
        $user_data = array(
            'username'      =>  $request->username,
            'email'         =>  $request->email,
            'password'      =>  Hash::make($request->password)
        );
        DB::table('users')->insert($user_data);

        if (!is_null($user_data)) {
            return redirect('/login');
        } else {
            return back()->with('error', 'Wrong Register Detail!');
        }
    }
}
