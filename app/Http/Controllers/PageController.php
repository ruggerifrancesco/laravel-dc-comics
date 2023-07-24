<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home () {
        return view('guest.home');
    }

    public function indexComics () {
        return view('guest.index');
    }
}
