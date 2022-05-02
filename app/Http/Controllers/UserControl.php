<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControl extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'userName'=>'required',
            'password'=>'required|min:6|max:15'
        ]);
        return "hello";
    }
}
