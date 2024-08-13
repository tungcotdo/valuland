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

class OwnerController extends Controller
{
    public function index(Request $request){
        return view('admin.owner.index');
    }
    public function add(Request $request){
        return view('admin.owner.add');
    }
    public function store(Request $request){
        if( empty( $request['owner_demand'] ) ){
            DB::table('owner')->insert([
                'owner_name'  => $request['owner_name'],
                'owner_phone' => $request['owner_phone'],
                'owner_email' => $request['owner_email'],
                'owner_code'  => $request['owner_code'],
                'owner_created_by'  => Auth::user()->email,
                'owner_updated_by'  => Auth::user()->email,
                'owner_created_at'  => Carbon::now(),
                'owner_updated_at'  => Carbon::now()
            ]);
        }elseif( $request['owner_demand'] == 1 ){
            DB::table('sale')->insert([
                'sale_owner_name'  => $request['owner_name'],
                'sale_owner_phone' => $request['owner_phone'],
                'sale_owner_email' => $request['owner_email'],
                'sale_owner_code'  => $request['owner_code'],
                'sale_created_by'  => Auth::user()->email,
                'sale_updated_by'  => Auth::user()->email,
                'sale_created_at'  => Carbon::now(),
                'sale_updated_at'  => Carbon::now()
            ]);
        }else{
            DB::table('rent')->insert([
                'rent_owner_name'  => $request['owner_name'],
                'rent_owner_phone' => $request['owner_phone'],
                'rent_owner_email' => $request['owner_email'],
                'rent_owner_code'  => $request['owner_code'],
                'rent_created_by'  => Auth::user()->email,
                'rent_updated_by'  => Auth::user()->email,
                'rent_created_at'  => Carbon::now(),
                'rent_updated_at'  => Carbon::now()
            ]);
        }
        return view('admin.owner.index');
    }
    public function formUploadExcel(Request $request){
        return view('admin.owner.upload-excel');
    }
    public function uploadExcel(Request $request){
        if ( !$request->hasFile('owner_upload_excel') ) {
            return redirect()->back()->with('error', 'Chưa chọn file excel!');
        }

        $uploadFile = request()->file('owner_upload_excel');

        $excelData = Excel::toArray( new FileImport, $uploadFile );

        if( empty( $excelData[0] ) ){
            return redirect()->back()->with('error', 'File excel không có dữ liệu');  
        }   

        foreach( $excelData[0] as $key => $value ){
            DB::table('owner')->insert([
                'owner_name'  => $value['ten'],
                'owner_phone' => $value['sdt'],
                'owner_email' => $value['email'],
                'owner_code'  => $value['macan'],
                'owner_created_by'  => Auth::user()->email,
                'owner_updated_by'  => Auth::user()->email,
                'owner_created_at'  => Carbon::now(),
                'owner_updated_at'  => Carbon::now()
            ]);
        }

        return redirect()->back()->with('success', 'Tải dữ liệu thành công!'); 
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
