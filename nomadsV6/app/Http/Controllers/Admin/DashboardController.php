<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Transaction; // menggunakan model transaction
use Illuminate\Http\Request;
use App\TravelPackages; //menggunakan model travel-packages

class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        // menggunakan return untuk memanggil halaman yang akan ditampilkan yaitu halaman dasboard.blade.php yang ada pada sub folder admin dalam folder pages
        return view('pages.admin.dashboard', [
            //menghitung jumlah paket travel
            'travel_package' => TravelPackages::count(),
            // menghitung jumlah transaksi
            'transaction' => Transaction::count(),
            //menghitung transaksi yang pending
            'transaction_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
            //menghitung transaksi yang success
            'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count()
        ]);
    }
}
