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


class ContractController extends Controller
{
    public function index(Request $request){
        $compact['contracts'] = DB::table('contract')->get();
        return view('admin.contract.index');
    }
    public function add(Request $request){
        return view('admin.contract.add');
    }
    public function store(Request $request){
        try{
            $file = $request->file('contract_file');

            if( !empty( $file ) ){
                $file_name = rand().'.'.$file->extension();
                
                $upload_path = 'upload'. '/'. 'contract' . '/';
                
                $file->move($upload_path, $file_name);

                $contract_path = $upload_path . $file_name;
            }

            DB::table('contract')->insert([
                'contract_title' => $request->contract_title,
                'contract_description' => $request->contract_description,
                'contract_path' => $contract_path
            ]);
            
            return redirect()->back()->with('success', 'Cập nhật dữ liệu danh sách bán thành công!');
           
        }
        catch(Exception $e){
            return Redirect::to(URL::previous() . "#sale-img")->with('success', 'Có lỗi xảy ra!');
        }

    }
    public function edit(Request $request){
        return view('admin.contract.index');
    }
    public function update(Request $request){
        return view('admin.contract.index');
    }
    public function delete(Request $request){
        return view('admin.contract.index');
    }
}
