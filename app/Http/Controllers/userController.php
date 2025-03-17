<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function members(){
        return view('user.members');
    }

    public function penjaga_gudang(){
        return view('penjaga_gudang.index');
    }
}
