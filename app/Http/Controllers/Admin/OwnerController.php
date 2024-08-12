<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index(Request $request){
        return view('admin.owner.index');
    }
    public function add(Request $request){
        return view('admin.owner.index');
    }
    public function store(Request $request){
        return view('admin.owner.index');
    }
    public function formUploadExcel(Request $request){
        return view('admin.owner.index');
    }
    public function uploadExcel(Request $request){
        return view('admin.owner.index');
    }
    public function edit(Request $request){
        return view('admin.owner.index');
    }
    public function update(Request $request){
        return view('admin.owner.index');
    }
    public function delete(Request $request){
        return view('admin.owner.index');
    }
    
}
