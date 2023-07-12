<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;

class HomeAuthenticateController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $todayRevenue = Payment::whereDate('created_at', Carbon::today())->count();
        $totalRevenue = Payment::sum('amount');
        $pendingOrders = Payment::where('status', 'PENDING')->count();
        return view('admin.authentication.admin-home',
                compact('totalUsers', 'todayRevenue', 'totalRevenue', 'pendingOrders')
        );
    }
}
