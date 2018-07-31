<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\User;
use Illuminate\Support\Facades\Redirect;

class RegOrAuthController extends Controller
{
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => $data['asadmin'] = 'on' ? 2 : 1,
        ]);
    }

//    public function regOrAuth(Request $request){
//        $userInDB = DB::table('users')->where('email', $request->get('email'))->first();
//
//        if ($userInDB == null) {
//            $user = new User($request->only('email', 'password', 'role'));
//            session(['user' => $user]);
//            return $this->register($user);
//        }
//
//        else if ($request->get('password') == $userInDB->password) {
//            $user = new User([$userInDB->email, $userInDB->password, $userInDB->role]);
//            session(['user' => $user]);
//            return $this->auth($user);
//        }
//
//        return 'not lol';
//    }

    public function auth(Request $request){
        $user = DB::table('users')->where('email', $request->get('email'))->first();
        if ($request->get('password') == $user->password) {
            //$user = new User([$userInDB->email, $userInDB->password, $userInDB->role]);
            //dd($user->role);
            session(['user' => $user]);
            if ($user->role == 2) {
                $users = DB::table('users')->get();
                return view('workingview', ['users' => $users]);
            }
            else
                return view('userview');
        }
        return 'not lol';
    }

    public function register(Request $request){
        $user = DB::table('users')->where('email', $request->get('email'))->first();

        if ($user == null)
            return $this->create($user);

        return 'not lol';
    }
}

