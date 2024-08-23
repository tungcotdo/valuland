<?php
// Copyright (c) Microsoft Corporation.
// Licensed under the MIT License.

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use PhpParser\Node\FunctionLike;
use DB;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use Route;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct(){
        $this->middleware(function ($request, $next) {
            $notifications = DB::table('notification as n')
            ->join('notification_user as nu', 'n.notification_id', '=', 'nu.notification_id')
            ->where('nu.user_id', Auth::user()->id)
            ->get();

            View::share(['_notifications' => $notifications]);
            return $next($request);
        });
    }

    public function authorization($function_id){
        $user_group_function = DB::table('user_group_function')->where('user_group_id', Auth::user()->user_group_id)->first();
        $function_ids = explode(',', $user_group_function->function_id);
        if( !in_array($function_id, $function_ids) ){
            //dd("Bạn không có quyền truy cập");
        }
    }
}
