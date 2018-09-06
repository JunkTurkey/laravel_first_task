<?php

namespace App\Http\Controllers;

use DB;
use App\Mail\UserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function validateEmail(array $data){
        return Validator::make($data, [
            'email' => 'required|string|email|max:255',
        ]);
    }

    public function sendMail(Request $request){

        $user = session('user');
        if ($this->validateEmail($request->all())->passes()){
            Mail::to($request->get('email'))->send(new UserMail($user));
            DB::table('mails')->insert(['mail' => $request->get('message'), 'user_id' => DB::table('users')->
                where('email', $user->email)->first()->id]);
            return 'lol';
        }
        return 'not lol';
    }

    public function uploadPicture(Request $request){
        dd($request->file('picture'));
        $user = session('user');
        $path = $request->file('picture')->store('pictures');
        DB::table('picture')->insert(['picture' => $path]);
        DB::table('users')->where('id', $user->id)->update(['picture_id' =>
            DB::table('picture')->where('picture', $path)->first()->id]);
        return view('userview');
    }
}
