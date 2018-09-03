<?php

namespace App\Http\Controllers;

use DB;
use Route;

class AdminController extends Controller
{

    public function lookMessages(){
        $mails = DB::table('mails')->where('user_id', Route::current()->id)->get();
        return view('mailsview', ['mails' => $mails]);
    }

    public function appointAs($id){
        $role = DB::table('users')->where('id', $id)->first()->role;
        DB::table('users')->where('id', $id)->update(['role' => ($role == 2 ? 1 : 2)]);
        $users = DB::table('users')->get();
        return view('workingview', ['users' => $users]);
    }
}
