<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    function dashboard() {
        $totalSell = DB::table('invoices')->where('paid', 1)->sum('total_price');
        $todayTotalSell = DB::table('invoices')->where('paid', 1)->sum('total_price');
        return view('dashboard', ["totalSell"=>$totalSell, "todayTotalSell"=>$todayTotalSell]);
    }
}
