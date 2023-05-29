<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function Index(){
        return Redirect::to('/dashboard')->withStatus(302);
    }
}

