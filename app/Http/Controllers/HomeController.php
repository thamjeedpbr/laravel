<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function register(Request $req)
    {
        dd($req->all());
    }
}
