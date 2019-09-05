<?php

namespace App\Http\Controllers;

use App\SideTaskValues;
use Illuminate\Http\Request;

class SideTaskController extends Controller
{
    public function firstSideTaskBlock1(Request $request){
        return SideTaskValues::create([
            'text' => $request->message,
            'selected' => $request->selected,
            'checked' => $request->checked,
        ]);
    }
}
