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

class UserController extends Controller
{
    public function index(Request $request){
        $query = DB::table('users');

        if( !empty( $request->name ) ){
            $query->where( 'name', 'LIKE', '%'.$request->name.'%' );
        }

        if( !empty( $request->email ) ){
            $query->where( 'email', 'LIKE', '%'.$request->email.'%' );
        }

        if( !empty( $request->user_phone ) ){
            $query->where( 'phone', 'LIKE', '%'.$request->user_phone.'%' );
        }

        $compact['users'] = $query->get();
        $compact['user_groups'] = DB::table('user_group')->get();
        return view('admin.user.index', $compact);
    }
    public function add(Request $request){
        $compact['user_groups'] = DB::table('user_group')->get();
        return view('admin.user.add', $compact);
    }
    public function store(Request $request){
        $user_group = explode( '_', $request->user_group );
        
        DB::table('users')->insert([
            'name'  => $request['user_name'],
            'email' => $request['user_email'],
            'password' => bcrypt($request['user_password']),
            'phone' => $request['user_phone'],
            'user_group_id' => $user_group[0],
            'user_group_name' => $user_group[1],
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now()
        ]);
        return redirect()->back()->with('success', 'Thêm dữ liệu thành công!');
    }
    public function edit(Request $request){
        return view('admin.user.index');
    }
    public function update(Request $request){
        return view('admin.user.index');
    }
    public function delete(Request $request){
        DB::table('users')->where('id', $request->user_id)->delete();
        return redirect()->back()->with('success', 'Xoá dữ liệu thành công!');
    }
}
