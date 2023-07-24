<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home () {
        return view('guest.home');
    }

    public function indexComics () {
        $comicsIndex = Comic::all();

        return view('guest.index', compact('comicsIndex'));
    }
}
