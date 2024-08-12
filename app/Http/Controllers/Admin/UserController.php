<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index(Request $request){
        return view('admin.user.index');
    }
    public function add(Request $request){
        return view('admin.user.index');
    }
    public function store(Request $request){
        return view('admin.user.index');
    }
    public function edit(Request $request){
        return view('admin.user.index');
    }
    public function update(Request $request){
        return view('admin.user.index');
    }
    public function delete(Request $request){
        return view('admin.user.index');
    }
}
