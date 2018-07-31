<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Mail\UserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function validateThis(array $data){
        return Validator::make($data, [
            'email' => 'required|string|email|max:255',
        ]);
    }

    public function sendMail(Request $request){
        dd(session('user'));
        //dd($request->old('user'));
        //dd($user);
        $user = session('user');
        if ($this->validateThis($request->all())->passes()){
            Mail::to($request->get('email'))->send(new UserMail($user));
            //TODO dynamic user_id
            DB::table('mails')->insert(['mail' => $request->get('email'), 'user_id' => '2']);
            return 'lol';
        }
        return 'not lol';
    }
}
