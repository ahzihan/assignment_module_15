<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function Profile(){
        return "Welcome to Profile";
    }
    public function Setting(){
        return "Welcome to Setting";
    }
}
