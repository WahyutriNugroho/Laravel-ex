<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TravelPackages;
use App\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackages::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count(),

        ]);
    }
}
