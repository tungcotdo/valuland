<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
        $user = DB::table('users')->where('id', 1)->first();
        dd(Carbon::parse($user->created_at)->diffForHumans());
        return view('admin.dashboard.index');
    }
}
