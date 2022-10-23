<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{
    
    public function allStat() {
        
        $stats = new Order;
        $stats = DB::table('orders')
        ->select('provider_id',DB::raw('SUM(total_time) as total_time'), DB::raw('SUM(earnings) as earnings'))
        ->where('status', '=','confirmed')
        ->where('updated_at', '>=', DB::raw('CURDATE()-INTERVAL 7 DAY'))
        ->groupBy('provider_id')
        ->get();
        return view('statistics', ['order' => $stats]);  
    }

    public function myStat() {

        $user = auth()->user()->id;
        $stats = new Order;
        $stats = DB::table('orders')
        ->select('provider_id',DB::raw('SUM(total_time) as total_time'), DB::raw('SUM(earnings) as earnings'))
        ->where('status', '=','confirmed')
        ->where('updated_at', '>=', DB::raw('CURDATE()-INTERVAL 7 DAY'))
        ->where('provider_id', '=', $user)
        ->groupBy('provider_id')
        ->get();
        return view('myStatistics', ['order' => $stats]);   
    }
}
