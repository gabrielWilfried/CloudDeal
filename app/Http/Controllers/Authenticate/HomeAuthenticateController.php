<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;

class HomeAuthenticateController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();

        $numOfSellers = Annonce::pluck('user_id')->unique()->count();

        $todayRevenue = Payment::whereDate('created_at', Carbon::today())->sum('amount');
        $totalRevenue = Payment::sum('amount');
        $pendingOrders = Payment::where('status', 'PENDING')->count();

        return view('admin.authentication.admin-home',
                compact('totalUsers', 'numOfSellers', 
                'todayRevenue', 'totalRevenue', 'pendingOrders')
        );
    }
}
