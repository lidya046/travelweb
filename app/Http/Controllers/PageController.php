<?php

namespace App\Http\Controllers;

use App\Models\Paket;

class PageController extends Controller
{
    public function home()
    {
        $paket = Paket::latest()->take(3)->get();
        return view('home', compact('paket'));
    }

    public function kontak()
    {
        return view('kontak');
    }
}
