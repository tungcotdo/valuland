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
use App\Services\House;
use Validator,Response,File;

class RentController extends Controller
{

    public function raw(Request $request){
        $query = DB::table('rent')->where('rent_status', 1);

        if( !empty( $request->code ) ){
            $query->where( 'code', 'LIKE', '%'.$request->code.'%' );
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

        $rent_raws = $query->get();
        return view('admin.rent.raw', ['rent_raws' => $rent_raws]);
    }
    public function select(Request $request){
        $query = DB::table('rent')->where('rent_status', 2);

        if( !empty( $request->code ) ){
            $query->where( 'code', 'LIKE', '%'.$request->code.'%' );
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

        $rent_selects = $query->get();
        return view('admin.rent.select', ['rent_selects' => $rent_selects]);
    }
    public function transaction(Request $request){
        $query = DB::table('rent')->where('rent_status', 3);

        if( !empty( $request->code ) ){
            $query->where( 'code', 'LIKE', '%'.$request->code.'%' );
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

        $rent_transactions = $query->get();
        return view('admin.rent.transaction', ['rent_transactions' => $rent_transactions]);
    }

    public function transactionEdit(Request $request){
        $rent = DB::table('rent')->where('rent_id', $request->rent_id)->first();
        return view('admin.rent.edit-transaction', ['rent' => $rent, 'house' => new House]);
    }

    public function transactionUpdate(Request $request){
        try{
            $file = $request->file('rent_contract_img');
            $rent_contract_img = $request->rent_contract_img_text;

            if( !empty( $file ) ){
                $file_name = rand().'.'.$file->extension();
                
                $upload_path = 'upload'. '/'. 'rent' . '/' . $request->rent_id  . '/';
                
                $file->move($upload_path, $file_name);
    
                File::delete($rent_contract_img);

                $rent_contract_img = $upload_path . $file_name;
            }

            DB::table('rent')->where('rent_id', $request->rent_id)->update([
                'rent_price' => $request->rent_price,
                'rent_deposit' => $request->rent_deposit,
                'rent_deposit_date' => $request->rent_deposit_date,
                'rent_contract_date' => $request->rent_contract_date,
                'rent_broker' => $request->rent_broker,
                'rent_legal_person' => $request->rent_legal_person,
                'rent_contract_img' => $rent_contract_img,
                'rent_style' => $request->rent_style,
                'rent_created_by'  => Auth::user()->email,
                'rent_updated_by'  => Auth::user()->email,
                'rent_created_at'  => Carbon::now(),
                'rent_updated_at'  => Carbon::now()
            ]);
            
            return redirect()->back()->with('success', 'Cập nhật dữ liệu danh sách bán thành công!');
           
        }
        catch(Exception $e){
            return Redirect::to(URL::previous() . "#rent-img")->with('success', 'Có lỗi xảy ra!');
        }


    }
    
    public function add(Request $request){
        return view('admin.rent.add');
    }
    public function store(Request $request){
    }
    public function edit(Request $request){
        $rent = DB::table('rent')->where('rent_id', $request->rent_id)->first();
        return view('admin.rent.edit', ['rent' => $rent, 'house' => new House]);
    }
    public function update(Request $request){

        //Required fields to select list
        $flag = array_filter([
            'code' => $request->code,
            'owner_name' => $request->owner_name,
            'owner_phone' => $request->owner_phone,
            'owner_email' => $request->owner_email,
            'rent_style' => $request->rent_style,
            'rent_direction' => $request->rent_direction,
            'rent_navigable_area' => $request->rent_navigable_area,
            'rent_price' => $request->rent_price
        ], function ($a) { 
            return $a == null;
        });

        $rent_status = empty($flag) ? 2 : 1;

        DB::table('rent')->where('rent_id', $request->rent_id)->update([
            'rent_status' => $rent_status,
            'code' => $request->code,
            'owner_name' => $request->owner_name,
            'owner_phone' => $request->owner_phone,
            'owner_email' => $request->owner_email,
            'rent_subdivision' => $request->rent_subdivision,
            'rent_building' => $request->rent_building,
            'rent_floor' => $request->rent_floor,
            'rent_style' => $request->rent_style,
            'rent_direction' => $request->rent_direction,
            'rent_navigable_area' => $request->rent_navigable_area,
            'rent_price' => $request->rent_price,
            'rent_description' => $request->rent_description,
            'rent_deposit' => $request->rent_deposit,
            'rent_deposit_date' => $request->rent_deposit_date,
            'rent_contract_date' => $request->rent_contract_date,
            'rent_broker' => $request->rent_broker,
            'rent_legal_person' => $request->rent_legal_person,
            'rent_contract_img' => $request->rent_contract_img,
            'rent_style' => $request->rent_style,
            'rent_created_by'  => Auth::user()->email,
            'rent_updated_by'  => Auth::user()->email,
            'rent_created_at'  => Carbon::now(),
            'rent_updated_at'  => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Cập nhật dữ liệu danh sách bán thành công!');
    }
    public function delete(Request $request){
        DB::table('rent')->where('rent_id',$request->rent_id)->delete();
        return redirect()->back()->with('success', 'Xoá dữ liệu thành công!'); 
    }
    public function status(Request $request){
        DB::table('rent')->where('rent_id', $request->rent_id)->update([
            'rent_status' => $request->rent_status
        ]);
        return redirect()->back()->with('success', 'Cập nhật dữ liệu danh sách bán thành công!');
    }
}
