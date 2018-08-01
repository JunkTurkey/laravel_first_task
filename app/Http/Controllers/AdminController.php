<?php

namespace App\Http\Controllers;

use DB;
use Route;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function lookMessages(){
        $mails = DB::table('mails')->where('user_id', Route::current()->id)->get();
        //dd($mails);
        return view('mailsview', ['mails' => $mails]);
    }
}
