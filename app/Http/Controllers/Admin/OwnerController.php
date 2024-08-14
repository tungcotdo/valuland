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
        $query = DB::table('owner');

        if( !empty( $request->owner_code ) ){
            $query->where( 'owner_code', 'LIKE', '%'.$request->owner_code.'%' );
        }

        if( !empty( $request->owner_name ) ){
            $query->where( 'owner_name', 'LIKE', '%'.$request->owner_name.'%' );
        }

        if( !empty( $request->owner_phone ) ){
            $query->where( 'owner_phone', 'LIKE', '%'.$request->owner_phone.'%' );
        }

        if( !empty( $request->owner_demand ) ){
            $query->where( 'owner_demand', $request->owner_demand );
        }

        $owners = $query->get();
        return view('admin.owner.index', ['owners' => $owners]);
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

            return redirect()->back()->with('success', 'Thêm dữ liệu vào danh sách chủ nhà thành công!'); 

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

            return redirect()->back()->with('success', 'Thêm dữ liệu vào danh sách bán thành công!');

        }elseif( $request['owner_demand'] == 2 ){
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

            return redirect()->back()->with('success', 'Thêm dữ liệu vào danh sách cho thuê thành công!');
        }

        return redirect()->back()->with('error', 'Có lỗi xảy ra, vui lòng kiểm tra lại!');
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
        $owner = DB::table('owner')->where('owner_id', $request->owner_id)->first();
        return view('admin.owner.edit', ['owner' => $owner]);
    }
    public function update(Request $request){
        if( empty( $request['owner_demand'] ) ){
            DB::table('owner')->where('owner_id', $request->owner_id)->update([
                'owner_name'  => $request['owner_name'],
                'owner_phone' => $request['owner_phone'],
                'owner_email' => $request['owner_email'],
                'owner_code'  => $request['owner_code'],
                'owner_created_by'  => Auth::user()->email,
                'owner_updated_by'  => Auth::user()->email,
                'owner_created_at'  => Carbon::now(),
                'owner_updated_at'  => Carbon::now()
            ]);

            return redirect()->back()->with('success', 'Sửa thông tin chủ nhà thành công!'); 

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

            return redirect()->back()->with('success', 'Thêm dữ liệu vào danh sách bán thành công!');

        }elseif( $request['owner_demand'] == 2 ){
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

            return redirect()->back()->with('success', 'Thêm dữ liệu vào danh sách cho thuê thành công!');
        }

        return redirect()->back()->with('error', 'Có lỗi xảy ra, vui lòng kiểm tra lại!');
    }

    public function updateDemand(Request $request){

        $owner = (array)DB::table('owner')->where('owner_id', $request->owner_id)->first();

        if( $request['owner_demand'] == 1 ){
            DB::table('sale')->insert([
                'sale_owner_name'  => $owner['owner_name'],
                'sale_owner_phone' => $owner['owner_phone'],
                'sale_owner_email' => $owner['owner_email'],
                'sale_owner_code'  => $owner['owner_code'],
                'sale_created_by'  => Auth::user()->email,
                'sale_updated_by'  => Auth::user()->email,
                'sale_created_at'  => Carbon::now(),
                'sale_updated_at'  => Carbon::now()
            ]);
            DB::table('owner')->where('owner_id', $request->owner_id)->delete();
            return redirect()->back()->with('success', 'Thêm dữ liệu vào danh sách bán thành công!');
        }elseif( $request['owner_demand'] == 2 ){
            DB::table('rent')->insert([
                'rent_owner_name'  => $owner['owner_name'],
                'rent_owner_phone' => $owner['owner_phone'],
                'rent_owner_email' => $owner['owner_email'],
                'rent_owner_code'  => $owner['owner_code'],
                'rent_created_by'  => Auth::user()->email,
                'rent_updated_by'  => Auth::user()->email,
                'rent_created_at'  => Carbon::now(),
                'rent_updated_at'  => Carbon::now()
            ]);
            DB::table('owner')->where('owner_id', $request->owner_id)->delete();
            return redirect()->back()->with('success', 'Thêm dữ liệu vào danh sách cho thuê thành công!');
        }
    }

    public function delete(Request $request){
        DB::table('owner')->where('owner_id',$request->owner_id)->delete();
        return redirect()->route('admin.owner.index')->with('success', 'Xoá dữ liệu thành công!'); 
    }

    public function truncate(Request $request){
        DB::table('owner')->truncate();
        return redirect()->back()->with('success', 'Xoá dữ liệu thành công!'); 
    }
    
}
