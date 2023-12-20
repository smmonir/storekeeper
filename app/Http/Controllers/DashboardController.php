<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    function dashboard() {
        $totalSell = DB::table('invoices')->where('paid', 1)->sum('total_price');
        $todayTotalSell = DB::table('invoices')->where('paid', 1)->whereDay('updated_at', date('d'))->sum('total_price');
        $yesterdayTotalSell = DB::table('invoices')->where('paid', 1)->whereDay('updated_at', date('d')-1)->sum('total_price');
        $thismonthTotalSell = DB::table('invoices')->where('paid', 1)->whereMonth('updated_at', date('m'))->sum('total_price');
        $lastmonthTotalSell = DB::table('invoices')->where('paid', 1)->whereMonth('updated_at', date('m')-1)->sum('total_price');
        return view('dashboard', ["totalSell"=>$totalSell, "todayTotalSell"=>$todayTotalSell, "yesterdayTotalSell"=>$yesterdayTotalSell, "thismonthTotalSell"=>$thismonthTotalSell, "lastmonthTotalSell"=>$lastmonthTotalSell]);
    }
}
