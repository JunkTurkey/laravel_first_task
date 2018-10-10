<?php

namespace App\Http\Controllers;

use App\Picture;
use DB;
use App\User;
use App\Mails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function validateEmail(array $data){
        return Validator::make($data, [
            'email' => 'required|string|email|max:255',
        ]);
    }

    public function sendMail(Request $request){
        dd($request->all());
        $user = Auth::user();
        if ($this->validateEmail($request->all())->passes()){
            $this->createMail(['mail' => $request->get('message'), 'user_id' => DB::table('users')->
                where('email', $user->email)->first()->id]);
            return redirect('/user');
        }
        return 'not lol';
    }

    public function uploadPicture(Request $request){

        $user = Auth::user();
        $path = $request->file('picture')->store("", 'public');
        /*DB::table('picture')->insert(['picture_path' => $path]);
        DB::table('users')->where('id', $user->id)->update(['picture_id' =>
            DB::table('picture')->where('picture_path', $path)->first()->id]);*/
        $picture = Picture::create(['picture_path' => $path]);
        User::where('id', $user->id)->update(['picture_id' => $picture->id]);
        return redirect('/user');
    }

    protected function createMail(array $data){
        return Mails::create([
            'mail' => $data['mail'],
            'user_id' => $data['user_id'],
        ]);
    }
}
