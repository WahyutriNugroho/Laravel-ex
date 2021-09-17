<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TravelPackages;

class HomeController extends Controller
{
    public function index()
    {
        $items = TravelPackages::with(['gallery'])->get();
        return view('pages.user.home', [
            'items' => $items
        ]);
    }
}
