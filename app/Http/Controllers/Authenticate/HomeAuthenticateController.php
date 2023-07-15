<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Boost;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeAuthenticateController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();

        $numOfSellers = Annonce::pluck('user_id')->unique()->count();

        $startDate = Carbon::now()->subWeek();
        $endDate = Carbon::now();
        $pastWeekRevenue = Payment::whereBetween('created_at', [$startDate, $endDate])->sum('amount');

        $boostedAdsIds = Boost::pluck('annonce_id')->unique();
        $boostRevenue = Payment::whereIn('annonce_id', $boostedAdsIds)->whereBetween('created_at', [$startDate, $endDate])->sum('amount');
        $totalBoostRevenue = Payment::whereIn('annonce_id', $boostedAdsIds)->sum('amount');

        $totalRevenue = Payment::sum('amount');
        $pendingOrders = Payment::where('status', 'PENDING')->count();


        $adsByMonth = Annonce::select(DB::raw('MONTH(created_at) as month, YEAR(created_at) as year, COUNT(*) as ad_count'))
        ->groupBy('month', 'year')->orderBy('year', 'asc')
        ->orderBy('month', 'asc')->limit(6);

        $revenueByMonth = Payment::where('status', 'APPROVED')->select(DB::raw('MONTH(updated_at) as month, YEAR(updated_at) as year, SUM(amount) as revenue'))
        ->groupBy('month', 'year')->orderBy('year', 'asc')
        ->orderBy('month', 'asc');

        //dd($revenueByMonth);

        return view('admin.authentication.admin-home',
                compact('totalUsers', 'numOfSellers', 'boostRevenue', 'totalBoostRevenue',
                'pastWeekRevenue', 'totalRevenue', 'pendingOrders', 'adsByMonth', 'revenueByMonth')
        );
    }
}
