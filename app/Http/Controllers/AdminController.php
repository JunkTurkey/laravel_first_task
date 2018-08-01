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
}
