<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FileExport;
use App\Imports\FileImport;
use DB;
use Carbon\Carbon;
use Auth;

class AuthorizationController extends Controller
{
    public function index(Request $request){
        $compact['user_groups'] = DB::table('user_group')->get();
        return view('admin.authorization.index', $compact);
    }
    public function add(Request $request){
        $compact['functions'] = DB::table('function')->get();
        return view('admin.authorization.add', $compact);
    }
    public function store(Request $request){
        $user_group_id = DB::table('user_group')->insertGetId([
            'user_group_name'  => $request['user_group_name'],
            'user_group_description' => $request['user_group_description'],
            'user_group_created_at'  => Carbon::now(),
            'user_group_updated_at'  => Carbon::now()
        ]);

        $function_select = implode(',', $request['function_select']);

        DB::table('user_group_function')->insert([
            'user_group_id'  => $user_group_id,
            'function_id' => $function_select
        ]);

        return redirect()->back()->with('success', 'Thêm dữ liệu thành công!');
    }
    public function edit(Request $request){
        $compact['user'] = DB::table('users')->where('id', $request->user_id)->first();
        $compact['user_groups'] = DB::table('user_group')->get();
        return view('admin.authorization.edit', $compact);
    }
    public function update(Request $request){
        $user_group = explode( '_', $request->user_group );

        $param['name']  = $request['user_name'];
        $param['email'] = $request['user_email'];
        $param['phone'] = $request['user_phone'];
        $param['user_group_id'] = $user_group[0];
        $param['user_group_name'] = $user_group[1];
        $param['updated_at']  = Carbon::now();

        if( !empty( $request['user_password'] ) ){
            $param['password'] = bcrypt($request['user_password']);
        }
        
        DB::table('users')->where('id', $request->user_id)->update($param);
        return redirect()->back()->with('success', 'Sửa dữ liệu thành công!');
    }
    public function delete(Request $request){
        DB::table('users')->where('id', $request->user_id)->delete();
        return redirect()->back()->with('success', 'Xoá dữ liệu thành công!');
    }
}
