<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(Request $request){
        return view('admin.sale.index');
    }
    public function add(Request $request){
        return view('admin.sale.index');
    }
    public function store(Request $request){
        return view('admin.sale.index');
    }
    public function edit(Request $request){
        return view('admin.sale.index');
    }
    public function update(Request $request){
        return view('admin.sale.index');
    }
    public function delete(Request $request){
        return view('admin.sale.index');
    }
}
