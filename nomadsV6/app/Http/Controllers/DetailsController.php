<?php

namespace App\Http\Controllers;

use App\TravelPackages; //memanggil model TravelPackages
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index(Request $request, $slug)
    {
        // memanggil halaman details pada folder views/pages.details
        // mengambil data travelpackage dari gallery jika slug sama dengan slug yang masuk
        // memanggil data yang ditemukan pertama atau gagalkan jika tidak ada
        $item = TravelPackages::with(['galleries'])->where('slug', $slug)->firstOrFail();
        return view('pages.details', [
            'item' => $item
        ]);
    }
}
