<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
        $this->authorization(1);
        $compact['saleNumber'] = DB::table('sale')->whereIn('sale_status', [1,2,3])->count();
        $compact['rentNumber'] = DB::table('rent')->whereIn('rent_status', [1,2,3])->count();
        $compact['saleTransactionNumber'] = DB::table('sale')->whereIn('sale_status', [3])->count();
        $compact['rentTransactionNumber'] = DB::table('rent')->whereIn('rent_status', [3])->count();
        $compact['saleRevenueNumber'] = DB::table('sale')->whereIn('sale_status', [4])->sum('sale_price');
        $compact['rentRevenueNumber'] = DB::table('rent')->whereIn('rent_status', [4])->sum('rent_price');

        $compact['saleRaws'] = DB::table('sale')->where('sale_status', 1)->limit(10)->get();
        $compact['saleSelects'] = DB::table('sale')->where('sale_status', 2)->limit(10)->get();

        $compact['rentRaws'] = DB::table('rent')->where('rent_status', 1)->limit(10)->get();
        $compact['rentSelects'] = DB::table('rent')->where('rent_status', 2)->limit(10)->get();

        $compact['notifications'] = DB::table('notification')->limit(10)->get();

        return view('admin.dashboard.index', $compact);
    }
}
