<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home () {
        $storeBar = config('storebar');

        return view('guest.home', compact('storeBar'));
    }

    public function index () {
        $comicsIndex = Comic::all();

        return view('guest.index', compact('comicsIndex'));
    }
}
