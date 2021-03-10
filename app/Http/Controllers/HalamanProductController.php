<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProductController extends Controllers
{
    public function index(){
        return view('HalamanProduct',['product' => product::product()]);
    }
}