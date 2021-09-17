<?php

namespace App\Http\Controllers;

use App\TravelPackages; // memanggil model TravelPackages
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // memanggil relasi galleries agar bisa digunakan untuk menampilkan foto
        $items = TravelPackages::with([
            'galleries'
        ])->get();
        return view('pages.home', [
            'items' => $items
        ]);
    }
}
