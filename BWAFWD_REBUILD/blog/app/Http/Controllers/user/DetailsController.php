<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TravelPackages;

class DetailsController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = TravelPackages::with(['gallery'])->where('slug', $slug)->firstOrFail();
        return view('pages.user.details', [
            'item' => $item
        ]);
    }
}
