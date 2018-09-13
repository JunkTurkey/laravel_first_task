<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\User;
use Illuminate\Support\Facades\Validator;

class RegOrAuthController extends Controller
{
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => 1,
        ]);
    }

    public function validateThis(array $data){

        return Validator::make($data, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
    }

    public function auth(Request $request){

        if ($this->validateThis($request->all())->fails())
            return 'wrong input';
        $user = DB::table('users')->where('email', $request->get('email'))->first();
        if ($request->get('password') == $user->password) {
            session(['user' => $user]);
            $asadmin = $request->get('asadmin');
            if ($asadmin!=null && $user->role == 2) {
                $users = DB::table('users')->get();
                return view('workingview', ['users' => $users]);
            }
            else
                return view('userview', ['user' => $user]);
        }
        return 'not lol';
    }

    public function register(Request $request){

        if ($this->validateThis($request->all())->fails())
            return 'wrong input';
        $user = DB::table('users')->where('email', $request->get('email'))->first();
        if ($user == null) {
            $this->create($request->only('email', 'password', 'asadmin'));
            return view ('firstpage');
        }
        return 'not lol';
    }
}

