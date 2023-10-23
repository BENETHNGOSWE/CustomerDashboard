<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EpicController extends Controller
{
    public function home(){
        return view("home");
    }
}
