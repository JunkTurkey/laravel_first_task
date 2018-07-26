<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\User;

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

    public function regOrAuth(Request $request){
        $user = DB::table('users')->where('email', $request->get('email'))->first();
        if ($user == null) {
            $this->create($request->all());
            return 'reg';
        }
        //dd($userpass);

        $reqpass = $request->get('password');
        $userpass = $user->password;
        if ($reqpass == $userpass)
            return 'auth';
        return 'not lol';
    }
}
